<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 22:08:23
         compiled from "templates/super_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310666364564402a7668d97-97134122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f787f0f8e0708c05b0ccd3040eefd0d150f47c7' => 
    array (
      0 => 'templates/super_table.tpl',
      1 => 1444153582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310666364564402a7668d97-97134122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uniqid' => 0,
    'callbacks' => 0,
    'payload' => 0,
    'labels' => 0,
    'action_add' => 0,
    'tabs' => 0,
    'filter' => 0,
    'searchable' => 0,
    'search_keywords' => 0,
    'count_total' => 0,
    'table' => 0,
    'form_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_564402a76e2416_39357222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564402a76e2416_39357222')) {function content_564402a76e2416_39357222($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/html/eugced/admin/includes/thirdparties/smarty/smarty/libs/plugins/block.t.php';
?><?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function() {
        $('#tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
').tabs();


        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['name'] = 'cb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['callbacks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

        $(document).on('click', "button[id^='button_<?php echo $_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['id'];?>
_supertable_']", function(evt) {

            evt.preventDefault();

            var v = $(this).attr('id').split('_');
            var id = v[v.length-1];

            <?php if (isset($_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['cb']['index']]['confirm'])&&($_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['confirm']==true)) {?>
            if (confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')) {

                <?php if (isset($_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['cb']['index']]['javascript'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['javascript'];?>

                <?php } else { ?>
                    window.location = '?<?php echo $_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['id'];?>
=' + id;
                <?php }?>
            }
            <?php } else { ?>
                <?php if (isset($_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['cb']['index']]['javascript'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['javascript'];?>

                <?php } else { ?>
                    window.location = '?<?php echo $_smarty_tpl->tpl_vars['callbacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cb']['index']]['id'];?>
=' + id;
                <?php }?>
            <?php }?>


        });

        <?php endfor; endif; ?>

    });


<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['payload']->value;?>


<div id="tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
">

    <ul>
        <li><a href="#tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_table"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo stripslashes($_smarty_tpl->tpl_vars['labels']->value['title_table']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>

        <?php if ($_smarty_tpl->tpl_vars['action_add']->value==true) {?>
        <li><a href="#tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_add"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo stripslashes($_smarty_tpl->tpl_vars['labels']->value['title_add']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
            <li><a href="#tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['t']['index'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo stripslashes($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <?php endfor; endif; ?>
    </ul>

    <div id="tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_table">

        <?php if (isset($_smarty_tpl->tpl_vars['filter']->value)||($_smarty_tpl->tpl_vars['searchable']->value==true)) {?>
        <div class="pure-g">
        <?php if (isset($_smarty_tpl->tpl_vars['filter']->value)) {?>

                <div class="pure-u-1-3" align="left">
                    <div style="margin-top:10px" class="pure-form"><?php echo $_smarty_tpl->tpl_vars['filter']->value['name'];?>
:
                    <select style="width:220px" onchange="window.location='?filter='+this.value">
                        <option value="-1">---</option>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filter']->value['source']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['source'][$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['filter']->value['source'][$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['extra'];?>
><?php echo stripslashes($_smarty_tpl->tpl_vars['filter']->value['source'][$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']);?>
</option>
                        <?php endfor; endif; ?>
                    </select></div>
                </div>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['searchable']->value==true) {?>


            <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value))) {?>
                <div class="pure-u-1-3" align="left">
            <?php } else { ?>
                <div class="pure-u-2-3" align="left">
            <?php }?>
                    <?php if (strlen($_smarty_tpl->tpl_vars['search_keywords']->value)>0) {?>
                    <div style="margin-top:20px">Search result: <b><?php echo number_format($_smarty_tpl->tpl_vars['count_total']->value);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
item(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b> with keyword(s): <b><?php echo $_smarty_tpl->tpl_vars['search_keywords']->value;?>
</b>&nbsp;<a href="?search="><img style="vertical-align: middle" src="images/reset.png"></a></div>
                    <?php }?>
                </div>
                <div class="pure-u-1-3" align="right">
            <form class="pure-form">
                <fieldset>
                <input type="text" id="search_text" name="search" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                </fieldset>
            </form>
                </div>

        <?php }?>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['table']->value;?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['action_add']->value==true) {?>
    <div id="tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_add">
        <?php echo $_smarty_tpl->tpl_vars['form_add']->value;?>

    </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
        <div id="tabs_<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['t']['index'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['content'];?>

        </div>
    <?php endfor; endif; ?>

</div>
<?php }} ?>
