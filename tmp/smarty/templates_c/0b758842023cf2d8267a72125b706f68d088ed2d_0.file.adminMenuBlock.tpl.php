<?php
/* Smarty version 3.1.32, created on 2018-08-08 12:32:05
  from '/home/lizard/www/site.local/views/admin/adminMenuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ac6a5da93e5_89731925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b758842023cf2d8267a72125b706f68d088ed2d' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminMenuBlock.tpl',
      1 => 1533724260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ac6a5da93e5_89731925 (Smarty_Internal_Template $_smarty_tpl) {
?>         
<div id="menuBlock">
      
        <div id="countryMenu">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                     <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/admin/"> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                     </a><br/>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </div>
        
        <div id="subMenu">
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/"> Главная</a></br>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/"> Добавить категорию</a></br>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/excursions/"> Редактировать Экскурсии</a> </br>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addexcursion/"> Добавить Экскурсию</a> </br>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/articles/"> Редактировать Статьи</a> </br>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addarticle/"> Добавить Статью</a> </br>
        </div>      
</div>

<?php }
}
