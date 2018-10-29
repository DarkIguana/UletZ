<?php
/* Smarty version 3.1.32, created on 2018-10-26 07:52:48
  from '/home/u487921/uletaemzimovat.ru/views/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd29da0e61757_85922788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c05deaf2e275be55a6c2921a4807d9a8562201' => 
    array (
      0 => '/home/u487921/uletaemzimovat.ru/views/admin/admin.tpl',
      1 => 1540442475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd29da0e61757_85922788 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="subMenu menu">
    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addexcursion/"> Добавить Экскурсию</a>         
</div>  
<div class="subMenu menu">
    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addarticle/"> Добавить Статью</a>   
</div>  
<div class="subMenu menu">
    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addpoint/"> Добавить Point</a>   
</div>  

<?php }
}
