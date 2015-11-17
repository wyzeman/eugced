<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 22:08:23
         compiled from "templates/widget_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1673347688564402a73948c0-47321963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dca7279c1b0d2af15bb9be83410d42d57c8b429' => 
    array (
      0 => 'templates/widget_table.tpl',
      1 => 1438021834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1673347688564402a73948c0-47321963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'columns' => 0,
    'sortable' => 0,
    'order_by' => 0,
    'order_dir' => 0,
    'show_actions' => 0,
    'actions_width' => 0,
    'values' => 0,
    'table_id' => 0,
    'buttons' => 0,
    'empty_message' => 0,
    'current_page' => 0,
    'total_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_564402a74b23e8_07850320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564402a74b23e8_07850320')) {function content_564402a74b23e8_07850320($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/html/eugced/admin/includes/thirdparties/smarty/smarty/libs/plugins/block.t.php';
?><?php echo '<script'; ?>
 type="text/javascript">

    $(document).on('mouseenter',".table_table_widget tr", function() {
        if ($(this).attr('orig_background') == null) {
            return;
        }
        $(this).css("background","rgb(200, 200, 200)");

    });
    $(document).on('mouseleave',".table_table_widget tr", function() {
        if ($(this).attr('orig_background') == null) {
            return;
        }
        $(this).css("background-color",$(this).attr('orig_background'));

    });

    $(function() {
                
                $('.table_table_widget').cardtable({myClass:'stacktable small-only' });
                
    }
    )

<?php echo '</script'; ?>
>


<table class="table_table_widget pure-table pure-table-horizontal unselectable <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" cellspacing="2" cellpadding="3" border="0" width="100%" unselectable="on">

    <thead>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['columns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['c']['index']]['width'])) {?>
        <th nowrap  style="min-width:<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['width'];?>
">
    <?php } else { ?>
        <th nowrap style="text-align:left">
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sortable']->value==false) {?>
            <?php echo stripslashes($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']);?>

        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['db_name']==$_smarty_tpl->tpl_vars['order_by']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['order_dir']->value=='DESC') {?>
                <a href="?order_by=<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['db_name'];?>
&order_dir=ASC"><?php echo stripslashes($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']);?>
</a>
                <img class="stacktable_img" src="images/dir_desc.png" border="0">
                </a>
                <?php } else { ?>
                <a href="?order_by=<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['db_name'];?>
&order_dir=DESC"><?php echo stripslashes($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']);?>
</a>
                <img class="stacktable_img" src="images/dir_asc.png" border="0">
                <?php }?>

            <?php } else { ?>
            <a href="?order_by=<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['db_name'];?>
&order_dir=ASC"><?php echo stripslashes($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']);?>
</a>
            <?php }?>

        <?php }?>

        </th>
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['show_actions']->value) {?>
        <th nowrap width="<?php echo $_smarty_tpl->tpl_vars['actions_width']->value;?>
" style="max-width:<?php echo $_smarty_tpl->tpl_vars['actions_width']->value;?>
">&nbsp;</th>
    <?php }?>
    </thead>
    <tbody>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['values']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['v']['index']]['background_color']))) {?>
    <tr style="background-color:<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['background_color'];?>
" orig_background="<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['background_color'];?>
">
    <?php } else { ?>
        <tr>
    <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['vv'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['name'] = 'vv';
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['vv']['total']);
?>

       <?php if ($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['editable'][$_smarty_tpl->getVariable('smarty')->value['section']['vv']['index']]>0) {?>
        <td nowrap class="td_row_table_widget" align="left">
            <input type="text" id="editable_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['vv']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" name="table_field_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['v']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['vv']['index'];?>
" class="ui-widget-content" style="width:98%;height:100%" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['vv']['index']]);?>
">
        </td>
        <?php } else { ?>
        <td  class="td_row_table_widget" align="left"><?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['vv']['index']];?>
</td>
        <?php }?>
        <?php endfor; endif; ?>

        
        <?php if ($_smarty_tpl->tpl_vars['show_actions']->value) {?>
        <td  class="td_row_table_widget" valign="top" nowrap style="vertical-align:middle">

            
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['bb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['name'] = 'bb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['buttons']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bb']['total']);
?>
            <?php if ($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['label']=='') {?>

            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']==0) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['v']['index']]['button1_label'])) {?>
                <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i><?php echo stripslashes($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['button1_label']);?>
</button>
                <?php } else { ?>
                <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i></button>
            <?php }?>
            <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']==1) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['v']['index']]['button2_label'])) {?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i><?php echo stripslashes($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['button2_label']);?>
</button>
            <?php } else { ?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i></button>
            <?php }?>
            <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']==2) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['v']['index']]['button3_label'])) {?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i><?php echo stripslashes($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['button3_label']);?>
</button>
            <?php } else { ?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i></button>
            <?php }?>
            <?php } else { ?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i></button>
            <?php }?>
            
            <?php } else { ?>
            <button id="button_<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['tooltip']);?>
" class="pure-button" style="border:1px solid #aaa;font-size:85%"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['icon'];?>
"></i><?php echo stripslashes($_smarty_tpl->tpl_vars['buttons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bb']['index']]['label']);?>
</button>
            <?php }?>
            <?php endfor; endif; ?>

        </td>
        
        <?php }?>
    </tr>

    <?php endfor; else: ?>
    <tr class="tr_row_table_widget">
        <td colspan="10" style="color:black;padding:5px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['empty_message']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
    </tr>
    <?php endif; ?>
    </tbody>

</table>


<?php if ($_smarty_tpl->tpl_vars['current_page']->value!=-1) {?>
        <?php if ($_smarty_tpl->tpl_vars['total_pages']->value>0) {?>
    <div align="right" style="padding:5px">
        
        <table border="0" cellspacing="3" cellpadding="0">
        <tr>
                
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value>1) {?>
            <td style="padding-right:5px"><a href="?table_page=1"><img src="images/rewind.png" style="margin-top:2px" border="0"></a></td>
        <td style="padding-right:5px"><a href="?table_page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><img src="images/previous.png" style="margin-top:2px" border="0"></a></td>
        <?php }?>
        <td><span style="color:#666;padding-left:5px;padding-right:5px"><b><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</b> / <b><?php echo ceil($_smarty_tpl->tpl_vars['total_pages']->value);?>
</b></span></td>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value<$_smarty_tpl->tpl_vars['total_pages']->value) {?>
        <td style="padding-left:5px"><a href="?table_page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><img src="images/next.png" style="margin-top:2px" border="0"></a></td>
        <td style="padding-left:5px"><a href="?table_page=<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
"><img src="images/ff.png" style="margin-top:2px" border="0"></a></td>
        <?php }?>
        </tr>
        </table>
        
    </div>
            
        <?php }?>
    
<?php }?><?php }} ?>
