<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:29:02
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-seznam.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567690feb339f6_23441512',
  'file_dependency' => 
  array (
    'abc8acef052549318616617c0f34524ad5b43e94' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-seznam.tpl',
      1 => 1450609714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567690feb339f6_23441512 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4>Uživatelé</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Přihlašovací jméno</th>
                                <th>Jméno uživatele</th>
                                <th>Email</th>
                                <th>Oprávnění</th>
                                <th>Blokován</th>
                                <th>Akce</th>
                            </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
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
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['login'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['nick'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['uzivatelOpravneni_nazev'];?>
 <?php if ($_smarty_tpl->tpl_vars['it']->value['dealer_company']) {?>( <?php echo $_smarty_tpl->tpl_vars['it']->value['dealer_company'];?>
 )<?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['variable']->value['booleanBadgeInverse'][$_smarty_tpl->tpl_vars['it']->value['blokace']];
if ($_smarty_tpl->tpl_vars['it']->value['duvodBlokace']) {?> - <?php echo $_smarty_tpl->tpl_vars['it']->value['duvodBlokace'];
}?></td>
                                <td>
                                    <div class="action-buttons">
                                        <a class="blue" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
uzivatele/edit.html?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" title="Editovat">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
} else {
?>
                            <tr>
                                <td class="center" colspan="5">Není žádný záznam</td>
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
