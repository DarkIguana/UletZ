<?php
/* Smarty version 3.1.32, created on 2018-11-23 06:19:48
  from '/home/lizard/www/site.local/views/admin/adminAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf78df4d65760_28560430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef6b384e56b88014f65738c523ddfa1be367169' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAdd.tpl',
      1 => 1540806522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf78df4d65760_28560430 (Smarty_Internal_Template $_smarty_tpl) {
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
