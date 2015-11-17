<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 21:50:21
         compiled from "./templates/page_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11557375145643fe6dcdf7e4-48812497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa220330b14dc910fb6d3fa451d9916c01bf1b8' => 
    array (
      0 => './templates/page_login.tpl',
      1 => 1426607282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11557375145643fe6dcdf7e4-48812497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_forgot' => 0,
    'current_script' => 0,
    'enable_register' => 0,
    'register_url' => 0,
    'complete_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5643fe6dd41149_44939760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643fe6dd41149_44939760')) {function content_5643fe6dd41149_44939760($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/html/eugced/admin/includes/thirdparties/smarty/smarty/libs/plugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo '<script'; ?>
 type="text/javascript">


$(function(){

    $('#dialog_forgot_container').dialog({ autoOpen: false });
    $('#dialog_forgot_container').dialog( 'option', 'resizable', false );
    $('#dialog_forgot_container').dialog( 'option', 'modal', true );
    $('#dialog_forgot_container').dialog( 'option', 'width', 500 );


    // Focus username field
    $('#username').focus();

    // If someone press enter in username we focus on password field
    $('#username').keydown(function(event) {
        if (event.keyCode == '13') {
            event.preventDefault();
            $('#password').focus();
        }
    });


    $('#password').keydown(function(event) {
        if (event.keyCode == '13') {
            event.preventDefault();
            $('#button_login_continue').click();
        }
    });

    

    <?php if (isset($_smarty_tpl->tpl_vars['enable_forgot']->value)) {?>
    

    // Click callback on 'Continue' button of the forgot password dialog
    $('#button_forgot_continue').click(function() {
        var email_address = $('#email_address').val();

        // Show error dialog when email address field is empty!
        if (email_address == '') {

            
            var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to continue<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your email address field is empty!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            

            var newX = ($(window).width() - $('#dialog_container').width)/2;
            var newY = 180;
            $('#dialog_container').dialog('option', 'position', [newX,newY] );
            $('#dialog_container').dialog('option', 'title',dlgTitle);
            $('#dialog_content').html(dlgContent);
            $('#dialog_container').bind( "dialogclose", function(event, ui) {
                $('#email_address').focus();
            });
            $('#dialog_container').dialog('open');
            return;

        }

        
        var current_script = '<?php echo $_smarty_tpl->tpl_vars['current_script']->value;?>
';
        var ajaxData = 'email_address='+email_address;
        

        // Hide button
        $('#span_forgot_continue').addClass('ui-helper-hidden');
        $('#span_forgot_pleasewait').removeClass('ui-helper-hidden');
        // AJAX submission of username and password
        $.ajax({ url: current_script, type:'POST', data: ajaxData, success: function(result){

            $('#span_forgot_continue').removeClass('ui-helper-hidden');
            $('#span_forgot_pleasewait').addClass('ui-helper-hidden');

            if (result != 'TRUE') {
                
                var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to continue<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to send a email to this address (' + result + ')<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                

                var newX = ($(window).width() - $('#dialog_container').width)/2;
                var newY = 180;
                $('#dialog_container').dialog('option', 'position', [newX,newY] );
                $('#dialog_container').dialog('option', 'title',dlgTitle);
                $('#dialog_content').html(dlgContent);
                $('#dialog_container').bind( "dialogclose", function(event, ui) {
                    $('#password').focus();
                });
                $('#dialog_container').dialog('open');
                return;
            } else {
                
                var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Operation completed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A email containing your new password was succesfully sent.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                


                var newX = ($(window).width() - $('#dialog_container').width)/2;
                var newY = 180;

                $('#dialog_container').dialog('option', 'position', [newX,newY] );
                $('#dialog_container').dialog('option', 'title',dlgTitle);
                $('#dialog_content').html(dlgContent);


                $('#dialog_forgot_container').dialog('close');
                $('#dialog_container').dialog('open');

                return;
            }
        }});


    });


    // Click callback on 'Forgot password' link
    $('#link_login_forgot').click(function(evt) {

        evt.preventDefault();

        var newX = ($(window).width() - $('#dialog_forgot_container').width)/2;
        var newY = 180;
        $('#dialog_forgot_container').dialog('option', 'position', [newX,newY] );
        $('#dialog_forgot_container').dialog('open');
        $('#email_address').val('');
        $('#email_address').focus();
        $('#email_address').keydown(function(event) {
            if (event.keyCode == '13') {
                event.preventDefault();
                $('#button_forgot_continue').click();
            }
        });
        return;
    });

    
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['enable_register']->value)) {?>
    var register_url='<?php echo $_smarty_tpl->tpl_vars['register_url']->value;?>
';
    // Click callback on 'Forgot password' link
    $('#button_login_register').click(function() {
        window.location=register_url;
        return;
    });
    <?php }?>

    

    // Click callback on 'Continue' button of the main login form
    $('#button_login_continue').click(function(evt) {


        evt.preventDefault();

        // Login using ajax
        var username = $('#username').val();
        var password = $('#password').val();

        // Show error dialog when username field is empty!
        if (username == '') {

            
            var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to perform a login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your username field is empty!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            

            var newX = ($(window).width() - $('#dialog_container').width)/2;
            var newY = 180;
            $('#dialog_container').dialog('option', 'position', [newX,newY] );
            $('#dialog_container').dialog('option', 'title',dlgTitle);
            $('#dialog_content').html(dlgContent);
            $('#dialog_container').bind( "dialogclose", function(event, ui) {
                $('#username').focus();
            });
            $('#dialog_container').dialog('open');
            return;
        }

        // Show error dialog when password field is empty!
        if (password == '') {

            
            var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to perform a login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your password field is empty!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            

            var newX = ($(window).width() - $('#dialog_container').width)/2;
            var newY = 180;
            $('#dialog_container').dialog('option', 'position', [newX,newY] );
            $('#dialog_container').dialog('option', 'title',dlgTitle);
            $('#dialog_content').html(dlgContent);
            $('#dialog_container').bind( "dialogclose", function(event, ui) {
                $('#password').focus();
            });
            $('#dialog_container').dialog('open');
            return;
        }

        
        var current_script = '<?php echo $_smarty_tpl->tpl_vars['current_script']->value;?>
';
        var ajaxData = 'username='+username+'&password='+password;
        


        // AJAX submission of username and password
        $.ajax({ url: current_script, type:'POST', data: ajaxData, success: function(result){


            if (result != 'TRUE') {
                
                var dlgTitle = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to perform a login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                var dlgContent = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The username and password entered are not matching any entry in our database!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                

                var newX = ($(window).width() - $('#dialog_container').width)/2;
                var newY = 180;
                $('#dialog_container').dialog('option', 'position', [newX,newY] );
                $('#dialog_container').dialog('option', 'title',dlgTitle);
                $('#dialog_content').html(dlgContent);
                $('#dialog_container').bind( "dialogclose", function(event, ui) {
                    $('#password').focus();
                });
                $('#dialog_container').dialog('open');
                return;
            } else {
                
                window.location = '<?php echo $_smarty_tpl->tpl_vars['complete_url']->value;?>
';
                
            }
        }});

    });


});

<?php echo '</script'; ?>
>




<div id="dialog_forgot_container" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forgot Password Reminder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="login_content ui-helper-hidden">
    <form class="pure-form pure-forma-ligned" method="post">
        <fieldset>
            <div class="pure-control-group">
                <div class="ui-state-highlight"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A new password will be generated and the details will be sent to you through your email address.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            </div>
            <div class="pure-control-group">
                <label for="forgot_email_address"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                <input id="forgot_email_address" type="text" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="forgot_email_address" required>
            </div>
            <div class="pure-controls">
                <span id="span_forgot_continue"><button type="button" id="button_forgot_continue" class="pure-button pure-button-primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Continue<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button></span>
                <span id="span_forgot_pleasewait" class="ui-helper-hidden"><div class="padding_5px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait... <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<img src="images/ajax-loader.gif"></div></span>
            </div>
        </fieldset>
    </form>
</div>

<div class="login_content">
    <img src="images/logo.png" class="pure-img" style="padding-bottom:20px">

    <form class="pure-form pure-form-aligned" method="post">
        <fieldset>
            <div class="pure-control-group">
                <label for="username"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                <input id="username" type="text" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="username" required>
            </div>

            <div class="pure-control-group">
                <label for="password"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                <input id="password" type="password" name="password" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" required>
            </div>

            <div class="pure-controls">
                <?php if (isset($_smarty_tpl->tpl_vars['enable_register']->value)) {?>
                    <label for="link_login_register" class="pure-checkbox">
                        <a href="#" id="button_login_register" class="pure-"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                    </label>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['enable_forgot']->value)) {?>
                    <label for="link_login_forgot" class="pure-checkbox">
                        <a href="#" id="link_login_forgot" class="pure-"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I forgot my password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                    </label>
                <?php }?>
                <button type="submit" id="button_login_continue" class="pure-button pure-button-primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Continue<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
            </div>
        </fieldset>
    </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
