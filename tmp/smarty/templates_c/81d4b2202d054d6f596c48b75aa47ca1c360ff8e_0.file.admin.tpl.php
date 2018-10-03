<?php
/* Smarty version 3.1.32, created on 2018-10-03 20:08:16
  from '/home/lizard/www/site.local/views/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb50590903858_22964756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d4b2202d054d6f596c48b75aa47ca1c360ff8e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/admin.tpl',
      1 => 1538590093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb50590903858_22964756 (Smarty_Internal_Template $_smarty_tpl) {
?>Points     
<div class="subMenu menu">
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
