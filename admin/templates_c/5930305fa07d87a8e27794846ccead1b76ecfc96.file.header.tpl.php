<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 21:50:21
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6093686025643fe6dd450f4-91867941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5930305fa07d87a8e27794846ccead1b76ecfc96' => 
    array (
      0 => './templates/header.tpl',
      1 => 1431030868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6093686025643fe6dd450f4-91867941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'website_name' => 0,
    'notice' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5643fe6dd59891_43474041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643fe6dd59891_43474041')) {function content_5643fe6dd59891_43474041($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title><?php echo stripslashes($_smarty_tpl->tpl_vars['website_name']->value);?>
</title>
    <meta name="google" value="notranslate" />
    <meta charset="utf-8">
    <link href="styles/pure/pure-min.css" rel="stylesheet" type="text/css"/>
    <link href="styles/fa/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="scripts/jquery/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="styles/stacktable/stacktable.css" rel="stylesheet" type="text/css"/>
    <link href="scripts/jquery_notification/notification.css" rel="stylesheet" type="text/css"/>

    <?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery/external/jquery/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/stacktable/stacktable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery_validate/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery_notification/jquery.notification.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="styles/website-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="styles/website.css">
    <!--<![endif]-->

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"><?php echo '</script'; ?>
>
    <![endif]-->


    <?php echo '<script'; ?>
 type="text/javascript">


        $(function(){

            $('#dialog_container').dialog({ autoOpen: false });
            $('#dialog_container').dialog( 'option', 'resizable', false );
            $('#dialog_container').dialog( 'option', 'modal', true );
            $('#dialog_container').dialog( "option", "buttons", { "OK": function() { $(this).dialog("close"); } } );
            $('#dialog_container').dialog( 'option', 'width', 400 );

            <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>

            $.createNotification({ content: "<?php echo stripslashes($_smarty_tpl->tpl_vars['notice']->value);?>
" })

            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['warning']->value)) {?>

            $.createWarning({ content: "<?php echo stripslashes($_smarty_tpl->tpl_vars['warning']->value);?>
" })

            <?php }?>



        });
    <?php echo '</script'; ?>
>

</head>

<body>



<div id="dialog_container" title="Undefined" class="ui-helper-hidden">
    <p id="dialog_content">Undefined</p>
</div>
<?php }} ?>
