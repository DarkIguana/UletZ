<?php
/* Smarty version 3.1.32, created on 2018-10-26 07:52:48
  from '/home/u487921/uletaemzimovat.ru/views/admin/adminMenuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd29da0e46826_53487464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739c1fc7d677d09578b534f99d50a49a6a9ec7d6' => 
    array (
      0 => '/home/u487921/uletaemzimovat.ru/views/admin/adminMenuBlock.tpl',
      1 => 1540442466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd29da0e46826_53487464 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menuBlock">
    <ul class="countryMenu menu"> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/admin/" 
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
    <h2> Редактировать </h2>
    <div class="subMenu menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smSubMenu']->value, 'item', false, NULL, 'subMenu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/"   > 
                <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </div>  
     <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/points/"> <div class="subMenuTwo">Points</div>  </a>
    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/"> <div class="addButton">  Добавить</div>  </a>
</div>
<?php }
}
