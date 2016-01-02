<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:08:54
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/ace-sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768c46cbc530_54038439',
  'file_dependency' => 
  array (
    '86e7b7d9007f5aa1fceb3bcd06f9e16c5ff70c28' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/ace-sidebar.tpl',
      1 => 1450609700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56768c46cbc530_54038439 ($_smarty_tpl) {
?>
<div class="sidebar" id="sidebar">
    <?php echo '<script'; ?>
 type="text/javascript">
        try {
            ace.settings.check('sidebar', 'fixed')
        } catch (e) {
        }
    <?php echo '</script'; ?>
>
    
    <ul class="nav nav-list">
        <?php
$_from = $_smarty_tpl->tpl_vars['modul']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['zobraz'] == 2) {?>
                <li<?php if ($_GET['page'] == $_smarty_tpl->tpl_vars['value']->value['page']) {?> class="active open"<?php }?>>
                    <a href="#" class="dropdown-toggle">
                        <i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);?>
"></i>
                        <span class="menu-text <?php if ($_smarty_tpl->tpl_vars['value']->value['zobraz'] == '0') {?>red<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['value']->value['nazev'];?>
</span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['sub']) {?>
                        <ul class="submenu">
                            <?php
$_from = $_smarty_tpl->tpl_vars['value']->value['sub'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['zobraz'] == 2) {?>
                                    <li<?php if ($_GET['page'] == $_smarty_tpl->tpl_vars['value']->value['page'] && $_GET['subpage'] == $_smarty_tpl->tpl_vars['v']->value['page']) {?> class="active"<?php }?>>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['v']->value['url']) {
echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];
echo $_smarty_tpl->tpl_vars['v']->value['url'];
} else { ?>#<?php }?>">
                                            <i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);?>
"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['nazev'];?>

                                        </a>
                                    </li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
                        </ul>
                    <?php }?>
                </li>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_0_saved_key;
}
?>
    </ul><!-- /.nav-list -->
    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        try {
            ace.settings.check('sidebar', 'collapsed')
        } catch (e) {
        }
    <?php echo '</script'; ?>
>
</div><?php }
}
