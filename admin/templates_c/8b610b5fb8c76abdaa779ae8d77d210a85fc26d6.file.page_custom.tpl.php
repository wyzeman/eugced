<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 21:54:55
         compiled from "./templates/page_custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7593311305643ff7f7bb5a7-35316881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b610b5fb8c76abdaa779ae8d77d210a85fc26d6' => 
    array (
      0 => './templates/page_custom.tpl',
      1 => 1438021034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7593311305643ff7f7bb5a7-35316881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'website_name' => 0,
    'menu_items' => 0,
    'current_userlevel' => 0,
    'menu_position' => 0,
    'title' => 0,
    'submenu_position' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5643ff7f806a08_97651314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643ff7f806a08_97651314')) {function content_5643ff7f806a08_97651314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="styles/side-menu.css" rel="stylesheet" type="text/css"/>


<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#"><?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>
</a>

            <ul class="pure-menu-list">

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['current_userlevel']->value>=$_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['user_level']) {?>

                   <?php if ($_smarty_tpl->tpl_vars['menu_position']->value==$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']) {?>
                       <li class="pure-menu-item menu-item-divided pure-menu-selected">
                   <?php } else { ?>
                       <li class="pure-menu-item menu-item-divided">
                   <?php }?>
                   <a class="pure-menu-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['url'];?>
?initial"><?php echo stripslashes($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['label']);?>
</a>
                    </li>
                    <?php } else { ?>
                    <li class="pure-menu-item menu-item-divided">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['url'];?>
?initial"><img src="<?php echo $_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['label'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['label'];?>
"></a>
                    </li>
                    <?php }?>
                    <?php endfor; endif; ?>
            </ul>

        </div>
    </div>
    <div id="main">
        <div class="header">
            <h1><?php echo stripslashes($_smarty_tpl->tpl_vars['title']->value);?>
</h1>

            <h2>
            <?php if (isset($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items'])) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['submenu_position']->value==$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']) {?>
                <a href="<?php echo stripslashes($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items'][$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['url']);?>
?initial"><b><?php echo stripslashes($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items'][$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['label']);?>
</b></a>
                <?php } else { ?>
                    <a href="<?php echo stripslashes($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items'][$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['url']);?>
?initial"><?php echo stripslashes($_smarty_tpl->tpl_vars['menu_items']->value[$_smarty_tpl->tpl_vars['menu_position']->value]['sub_items'][$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['label']);?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['s']['last']==false) {?>
                &nbsp;|&nbsp;
                <?php }?>
            <?php endfor; endif; ?>
            <?php }?>
            </h2>
        </div>
        <div class="content">
          <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>
</div>




<?php echo '<script'; ?>
 type="text/javascript" src="scripts/ui.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
