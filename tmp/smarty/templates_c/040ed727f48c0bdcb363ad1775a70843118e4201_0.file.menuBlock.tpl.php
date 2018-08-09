<?php
/* Smarty version 3.1.32, created on 2018-08-09 08:21:37
  from '/home/lizard/www/site.local/views/default/menuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6bdd719d05b6_38013992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040ed727f48c0bdcb363ad1775a70843118e4201' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/menuBlock.tpl',
      1 => 1533794227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6bdd719d05b6_38013992 (Smarty_Internal_Template $_smarty_tpl) {
?>                
<div id="menuBlock">
        
        <div id="countryMenu">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                     <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/"> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                     </a><br/>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                 
                 </div>
                
        <div id="subMenu">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/excursions/">  Экскурсии </a><br/>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/"> Статьи </a><br/>
        </div>
    
</div>
<?php }
}
