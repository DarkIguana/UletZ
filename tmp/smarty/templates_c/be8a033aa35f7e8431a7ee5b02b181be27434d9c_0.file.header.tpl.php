<?php
/* Smarty version 3.1.32, created on 2018-09-03 18:40:07
  from '/home/lizard/www/site.local/views/old/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8d63e73b0345_79882170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8a033aa35f7e8431a7ee5b02b181be27434d9c' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/header.tpl',
      1 => 1535992803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menuBlock.tpl' => 1,
  ),
),false)) {
function content_5b8d63e73b0345_79882170 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
         <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.3.1.js"> <?php echo '</script'; ?>
>
        </head>
    <body>
        <div class="wrapper"> 
            <div class="logo"> 
                <img src="/images/global/logo.png" class="logoImg" />
            </div>
                <?php $_smarty_tpl->_subTemplateRender('file:menuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="wrapper"> 
        <div id="content_Block" class="clearfix">
<?php }
}
