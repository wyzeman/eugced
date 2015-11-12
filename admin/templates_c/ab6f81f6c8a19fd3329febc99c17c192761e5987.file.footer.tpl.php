<?php /* Smarty version Smarty-3.1.21, created on 2015-11-11 22:05:18
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19369919395643fe6dd5b661-76222899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab6f81f6c8a19fd3329febc99c17c192761e5987' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1447297517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19369919395643fe6dd5b661-76222899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5643fe6dd6f574_89494458',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643fe6dd6f574_89494458')) {function content_5643fe6dd6f574_89494458($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/html/eugced/admin/includes/thirdparties/smarty/smarty/libs/plugins/block.t.php';
?>

<!-- Fix for IE outlines on A HREF -->

    <?php echo '<script'; ?>
 type="text/javascript">

        if (document.getElementById('nav') != null) {
            var links = document.getElementById('nav').getElementsByTagName('a');
            for ( var i = 0; i < links.length; i++ ) {
                links[i].onmousedown = function () {
                    this.blur();
                    return false;
                }
                links[i].onclick = function() {
                    this.blur();
                }
                if ( /msie/i.test(navigator.userAgent) && !/opera/i.test(navigator.userAgent) ) {
                    links[i].onfocus = function() {
                        this.blur();
                    }
                }
            }
        }
    <?php echo '</script'; ?>
>


<div class="footer" id="layout" style="padding-top:20px;padding-bottom:20px">
        &copy; <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2015 tous droits réservés<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <b><a href="http://www.3btech.ca" class="link_light">3b solutions technologiques</a></b>



</div>
</body>
</html><?php }} ?>
