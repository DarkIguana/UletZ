<?php
/* Smarty version 3.1.32, created on 2018-08-17 09:58:31
  from '/home/lizard/www/site.local/views/admin/adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7680271dbdd6_44187022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b4177ac2044ad947eec5d079dfd2427f46612b3' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminHeader.tpl',
      1 => 1534492707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminMenuBlock.tpl' => 1,
  ),
),false)) {
function content_5b7680271dbdd6_44187022 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.3.1.js"> <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/admin.js" ><?php echo '</script'; ?>
>  
        <?php echo '<script'; ?>
 src="/editor/ckeditor.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="logo">
            <h1>Админка Улетаем зимовать </h1>
        </div>
        
        <?php $_smarty_tpl->_subTemplateRender('file:adminMenuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              
           <div id="contentBlock">
<?php }
}
