<?php
/* Smarty version 3.1.32, created on 2018-08-09 08:07:36
  from '/home/lizard/www/site.local/views/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6bda28149610_40339194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d4b2202d054d6f596c48b75aa47ca1c360ff8e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/admin.tpl',
      1 => 1533794852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6bda28149610_40339194 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="mainAdmin">
    <div id="adminMainSL">
        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addexcursion/"> Добавить Экскурсию</a> </br>
    </div>
    <div id="adminMainSR"> 
        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/addarticle/"> Добавить Статью</a> </br>
    </div>
</div>
<?php }
}
