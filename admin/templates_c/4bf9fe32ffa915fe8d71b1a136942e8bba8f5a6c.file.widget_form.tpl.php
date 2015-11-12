<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 22:08:23
         compiled from "templates/widget_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189111180564402a74bb5d7-26192202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf9fe32ffa915fe8d71b1a136942e8bba8f5a6c' => 
    array (
      0 => 'templates/widget_form.tpl',
      1 => 1431032008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189111180564402a74bb5d7-26192202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_id' => 0,
    'buttons' => 0,
    'ajax_validation' => 0,
    'form_url_ajax' => 0,
    'form_title' => 0,
    'form_method' => 0,
    'form_url' => 0,
    'items' => 0,
    'label_color' => 0,
    'label_align' => 0,
    'label_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_564402a765d488_88493439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564402a765d488_88493439')) {function content_564402a765d488_88493439($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/html/eugced/admin/includes/thirdparties/smarty/smarty/libs/plugins/block.t.php';
?><?php echo '<script'; ?>
 type="text/javascript">

 $(document).ready(function() {
 

     $(".phonenumber").mask("(999) 999-9999");


    $('#form_<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
').validate({
    rules: {
        password: {
            required: true,
            minlength: 5
        },
        password_again: {
            required: true,
            minlength: 5,
            equalTo: "#password"
        }

    },
        errorPlacement: function(error, element) {
            error.css('color', 'red');
            error.insertAfter(element);
        },
        wrapper: "div"


});

    var form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
  
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['b'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['b']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['name'] = 'b';
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['buttons']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total']);
?>

    var id = '#form_' + form_id + '_<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['name']);?>
';
    
    $(id).click(function(event) {
    
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['type']==0) {?>
            <?php if ($_smarty_tpl->tpl_vars['ajax_validation']->value==true) {?>
            console.log('URL: <?php echo $_smarty_tpl->tpl_vars['form_url_ajax']->value;?>
');
        $.ajax( {
            type: "POST",
            url: '<?php echo $_smarty_tpl->tpl_vars['form_url_ajax']->value;?>
',
            data: $('#form_' + form_id).serialize()
        }).done(function(result) {

            var json = JSON.parse(result);
            if (json == null) {
                console.log(result);
            }
            if (json.result == false) {
                alert(json.error);
            } else {
                $('#form_' + form_id).submit();
            }
        });
            <?php } else { ?>
                $('#form_' + form_id).submit();
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['type']==1) {?>
           $('#form_' + form_id)[0].reset();
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['type']==2) {?>
            window.location = '<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['url']);?>
';
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['type']==4) {?>
            <?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['url']);?>
(event);
        <?php }?>

        event.preventDefault();
        
    });

    
<?php endfor; endif; ?>



 });
 
<?php echo '</script'; ?>
>

<div style="text-align:left" class="ui-widget">
    <?php if (strlen($_smarty_tpl->tpl_vars['form_title']->value)==0) {?>
    <?php } else { ?>
    <div style="background-color:#1f8dd6;color:white;margin-top:0px;margin-bottom:15px;padding:10px"><b><?php echo $_smarty_tpl->tpl_vars['form_title']->value;?>
</b></div>
    <?php }?>
    <form id="form_<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" method="<?php echo $_smarty_tpl->tpl_vars['form_method']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['form_url']->value;?>
" autocomplete="off" enctype="multipart/form-data" class="pure-form pure-form-aligned">
        <fieldset>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            
            <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==8) {?>
            <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==13) {?>
                <div style="background-color:#6f6e6d;color:white;margin-top:30px;margin-bottom:15px;padding:10px">
                <b><?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
</b>
                </div>

            <?php } else { ?>
                <div class="pure-control-group">
                
                <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==7) {?>
                <div class="ui-state-highlight ui-corner-all padding_10px margin_5px" <?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>style="width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
"<?php }?>>
                    <?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>

                </div>
                <?php } else { ?>

                <label style="color:<?php echo $_smarty_tpl->tpl_vars['label_color']->value;?>
;text-align:<?php echo $_smarty_tpl->tpl_vars['label_align']->value;?>
;<?php if ($_smarty_tpl->tpl_vars['label_width']->value>0) {?>width:<?php echo $_smarty_tpl->tpl_vars['label_width']->value;?>
;<?php }?>">
                
                <?php if (($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==2)) {?>
                <?php } else { ?>
                
                <?php if (($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==3)) {?>
                    <br/>
               <b style="padding:5px;color:<?php echo $_smarty_tpl->tpl_vars['label_color']->value;?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
</b>
               <br/>
                <?php } else { ?>
                    <?php if (($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==14)) {?>
                    <?php } else { ?>

                <?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
&nbsp;
                        <?php }?>
                <?php }?>
                <?php }?>
                </label>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==0) {?>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" placeholder="<?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==12) {?>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" placeholder="<?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" class="phonenumber <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">

                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==1) {?>
                    <textarea name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
</textarea>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==2) {?>
                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']==true) {?>checked<?php }?>> <?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>

                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==3) {?>
                        <?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']);?>

                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==4) {?>
                    <select name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">

                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['extra'];?>
><?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['name']);?>
</option>
                        <?php endfor; else: ?>
                        <option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No value!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                        <?php endif; ?>

                    </select>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==5) {?>
                        <input type="password" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="password" placeholder="<?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" class="input_text <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">
                    </div>
                    <div class="pure-control-group">
                        <label style="color:<?php echo $_smarty_tpl->tpl_vars['label_color']->value;?>
;text-align:<?php echo $_smarty_tpl->tpl_vars['label_align']->value;?>
;<?php if ($_smarty_tpl->tpl_vars['label_width']->value>0) {?>width:<?php echo $_smarty_tpl->tpl_vars['label_width']->value;
}?>">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password (Again)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        <input type="password" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
_again" id="password_again" placeholder="<?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">

                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==9) {?>
                        <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']==true) {?>checked<?php }?> />
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==6) {?>
                          <span id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
</b></span>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==10) {?>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']['text'];?>
" class="ui-widget-content <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['validation'];?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['width'];?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['height'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['height'];?>
;<?php }?>">
                        <?php echo '<script'; ?>
 type="text/javascript"t>
                            $(function() {

                                $( "#<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" ).autocomplete({
                                    source: "?autocomplete=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
",
                                    minLength: 2,
                                    select: function( event, ui ) {
                                    }
                                });

                            });
                        <?php echo '</script'; ?>
>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==11) {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
</span>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==14) {?>
                        <div style="background-color:#6f6e6d;color:white;margin-top:30px;margin-bottom:15px;padding:10px">
                            <b><?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label']);?>
</b>
                        </div>

                        <span>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['name'] = 'cb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['total']);
?>
                                <div style="display:inline-block;white-space: nowrap">
                                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['value']==true) {?>checked<?php }?>>
                                    <?php echo stripslashes($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'][$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['label']);?>
&nbsp;&nbsp;
                                </div>
                            <?php endfor; endif; ?>

                        </span>
                    <?php }?>

                <?php }?>
                </div>
            <?php }?>
            <?php endfor; endif; ?>


            <?php if (count($_smarty_tpl->tpl_vars['buttons']->value)>0) {?>
            <div class="pure-controls">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['b'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['b']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['name'] = 'b';
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['buttons']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['b']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['b']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['b']['total']);
?>
                    <button id="form_<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['name'];?>
" class="pure-button" style="border:1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['b']['index']]['label'];?>
</button>

                    <?php endfor; endif; ?>
                    
            </div>

            <?php }?>


        </fieldset>
    </form>
</div><?php }} ?>
