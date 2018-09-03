<?php
/* Smarty version 3.1.32, created on 2018-09-03 13:14:43
  from '/home/lizard/www/site.local/views/old/menuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8d17a3e6a049_26936850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e72d01f154c2e2d30022fe46d2cd7c1e8f3833' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/menuBlock.tpl',
      1 => 1535973278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8d17a3e6a049_26936850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
    <div class="wrapper">
        <div class="menuToggle">
        <div class="menu-icon" data-behaviour="toggle-menu-icon">
            <span class="menu-icon__bar">
        </div>
            <div class="mobileMenuHeader">
                Меню
            </div>
            </div>
        <div class="menuBlock">
            <ul class="countryMenu menu"> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/" 
                           <?php if ($_smarty_tpl->tpl_vars['item']->value['url_cat_name'] == $_smarty_tpl->tpl_vars['smcountry']->value) {?> id="countryMenuActive"
                           <?php } else { ?> id="unSelectMenu"
                           <?php }?>> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                        </a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </ul>

            <div class="subMenu menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smSubMenu']->value, 'item', false, NULL, 'subMenu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/"> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                        </a>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>  
        </div>
    </div>
</nav>
<?php echo '<script'; ?>
>
    $(function () {
        $(".menuToggle").on('click', function () {

            $('.menu').slideToggle(500, function () {
                if ($(this).css('display') === 'none') {
                    $(this).removeAttr('style');
                }
            });
        });
    });

<?php echo '</script'; ?>
><?php }
}
