<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:19:00
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/areas/areas-list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768ea4469424_72652115',
  'file_dependency' => 
  array (
    '0f04578e2d6b21314d1958ad525da61f15fd796a' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/areas/areas-list.tpl',
      1 => 1450610318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56768ea4469424_72652115 ($_smarty_tpl) {
if (!is_callable('smarty_function_locale')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.locale.php';
if (!is_callable('smarty_block_t')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/block.t.php';
?>
<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <?php echo smarty_function_locale(array('path'=>"locale",'domain'=>"lightmaster_en_US"),$_smarty_tpl);?>

                <h4><?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AREASTITLE<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</h4>
            </div>
<?php echo '<script'; ?>
>
    var areas = <?php echo json_encode($_smarty_tpl->tpl_vars['areasList']->value);?>
;
<?php echo '</script'; ?>
>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            
                            <th><?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AREANAME<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</th>
                            <th><?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AREAEDIT<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->tpl_vars['areasList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it_0_saved_item = isset($_smarty_tpl->tpl_vars['it']) ? $_smarty_tpl->tpl_vars['it'] : false;
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable();
$__foreach_it_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$__foreach_it_0_saved_local_item = $_smarty_tpl->tpl_vars['it'];
?>
                            <tr id="item<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
">

                                
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['Area_name'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['it']->value['is_admin'] == 1) {?>
                                    <div class="action-buttons">
                                        <a class="blue" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
areas/edit.html?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['ID_area'];?>
" title="<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
EDIT<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
} else {
?>
                            <tr>
                                <td class="center" colspan="5"><?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NOCOMPANIESINDB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</td>
                            </tr>
                        <?php
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
