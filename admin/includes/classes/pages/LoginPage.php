<?php


class LoginPage {

    /**
     *
     */
    function __construct() {
        global $DB;


    }


    /**
     *
     */
    function show($enableRegisterButton = false, $enableForgotPasswordLink = false, $complete_url = 'mainpage.php', $register_url ='register_account.php') {


        global $DB, $INPUT, $TPL, $LOG;
 
        // logoff
        if ($INPUT->get->keyExists("logoff")) {

            

            if(isset($_SESSION[SI]["user"])) {
            
                //log the logoff attempt
                $LOG->logActivity($_SESSION[SI]["user"]["email_address"],LogMonitor::ACTIVITY_LOGOUT,"");
                
                //erasing occurence in table tb_sessions        
                $user_id = $DB->getScalar("id","tb_users", array("email_address","=",$_SESSION[SI]["user"]["email_address"]), $order_by = array("email_address"));
                $DB->delete("tb_sessions",array("id_user","=",$user_id));

                //do the logoff action
                unset($_SESSION[SI]["user"]);
            }
        }



        // Redirect to completion URL if the user is already connected

        if (isset($_SESSION[SI]["user"])) {
            die(header("Location: $complete_url"));
        }

        // Check for AJAX submit

        if ($enableForgotPasswordLink == true) {
            if ($INPUT->post->keyExists("email_address")) {

                if ($INPUT->post->testEmail("email_address") == false)  die("Invalid email address provided!");
                
                $email_address = $INPUT->post->getRaw("email_address");
                $new_password = $DB->resetPassword($email_address);
                if ($new_password == "") die(T_("Email not found in database!"));

                // Sending password by email
                require_once("includes/thirdparty/class.phpmailer.php");
                $mail = new PHPMailer();

                $MAIL_TPL = new Smarty();
                $MAIL_TPL->assign("website_name",CONFIG_WEBSITE_NAME);
                $MAIL_TPL->assign("website_url", CONFIG_WEBSITE_URL);
                $MAIL_TPL->assign("new_password",$new_password);
                $body = $MAIL_TPL->fetch("email_forgot_password.html");

                $mail->IsSMTP();
                $mail->Host = CONFIG_EMAIL_SERVER_HOSTNAME;
                $mail->Port = CONFIG_EMAIL_SERVER_PORT;
                $mail->SMTPAuth = CONFIG_EMAIL_AUTH_ENABLED;
                $mail->Username = CONFIG_EMAIL_AUTH_USERNAME;
                $mail->Password = CONFIG_EMAIL_AUTH_PASSWORD;

                $mail->SetFrom(CONFIG_EMAIL_ADDR_FROM);
                $mail->Subject = T_("New password generated for site: ") . CONFIG_WEBSITE_NAME;
                $mail->AltBody = T_("To view the message, please use an HTML compatible email viewer!");
                $mail->MsgHTML($body);
                $mail->AddAddress($email_address);
                if(!$mail->Send()) die(str_replace("\n","<br/>",$mail->ErrorInfo));

                if ($DB->UpdatePassword($email_address, $new_password) == false) die(T_("Unable to update password!"));
                die("TRUE");
            }
        }

        if ($INPUT->post->keyExists("username") && $INPUT->post->keyExists("password")) {


            $username = $INPUT->post->getAlnum("username");
            $password = $INPUT->post->getAlnum("password");
            
            // Verify if username exceeds length limit.
            if (strlen($username) > 75) {
                $username = substr($username,0,75);
            }


            //do the login action
            $result = $DB->login($username,$password);

            if ($result == false) {
                //log the failed login attempt
                $LOG->logActivity("",LogMonitor::ACTIVITY_LOGIN_FAIL,$username." ".$password);
                //do the failed login action
                die("FALSE");
            }
            
            //check if the user have an existing session open
            $user_id = $DB->getScalar("id","tb_users", array("email_address","=",$username), array("email_address"));

            //log the login attempt
            $LOG->logActivity($username,LogMonitor::ACTIVITY_LOGIN,"");

            // Set default language
            $default_language = $DB->getScalar("default_language","tb_users",array("id","=",$user_id));
            if ($default_language != "") {
                $_SESSION[SI]["LANG"] = $default_language;
            }
            die("TRUE");
        }

        if ($enableRegisterButton == true) {
            $TPL->assign("enable_register",true);
        }

        if ($enableForgotPasswordLink == true) {
            $TPL->assign("enable_forgot", true);
        }

        $TPL->assign("complete_url",$complete_url);
        $TPL->assign("register_url",$register_url);

        $script_name = explode("/",str_replace("\\","/",$INPUT->server->getRaw("SCRIPT_NAME")));
        $script_name = $script_name[count($script_name)-1];
        $TPL->assign("current_script", $script_name);

        $TPL->display("page_login.tpl");
    }

}
