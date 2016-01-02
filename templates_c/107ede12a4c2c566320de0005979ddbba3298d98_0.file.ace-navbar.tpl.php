<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:08:54
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/ace-navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768c46bd82d3_51703952',
  'file_dependency' => 
  array (
    '107ede12a4c2c566320de0005979ddbba3298d98' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/ace-navbar.tpl',
      1 => 1450609700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56768c46bd82d3_51703952 ($_smarty_tpl) {
?>
<div class="navbar navbar-default" id="navbar">
    <?php echo '<script'; ?>
 type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    <?php echo '</script'; ?>
>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    Lamps administrace
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/avatars/avatar2.png" alt="Avatar" />
                        <span class="user-info">
                            <small>Vítejte,</small>
                            <?php echo $_SESSION['user']['nick'];?>

                        </span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
profil/nastaveni.html">
                                <i class="icon-user"></i>
                                Profil
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
?odhlasit=1">
                                <i class="icon-off"></i>
                                Odhlásit
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div><?php }
}
