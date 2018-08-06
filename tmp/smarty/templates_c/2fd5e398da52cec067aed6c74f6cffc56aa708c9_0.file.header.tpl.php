<?php
/* Smarty version 3.1.32, created on 2018-07-27 09:10:06
  from '/home/lizard/www/site.local/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5ac54e464288_66058170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd5e398da52cec067aed6c74f6cffc56aa708c9' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/header.tpl',
      1 => 1532675387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menuBlock.tpl' => 1,
  ),
),false)) {
function content_5b5ac54e464288_66058170 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    </head>
    <body>
        <div id="logo">
            <h1>Улетаем зимовать </h1>
        </div>
        
        <?php $_smarty_tpl->_subTemplateRender('file:menuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              
           <div id="contentBlock">
           
<?php }
}
