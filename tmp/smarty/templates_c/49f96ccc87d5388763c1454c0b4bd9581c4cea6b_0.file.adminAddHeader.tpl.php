<?php
/* Smarty version 3.1.32, created on 2018-11-23 06:53:19
  from '/home/lizard/www/site.local/views/admin/adminAddHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf795cf6bbda5_38992823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f96ccc87d5388763c1454c0b4bd9581c4cea6b' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddHeader.tpl',
      1 => 1542952078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminAddMenuBlock.tpl' => 1,
  ),
),false)) {
function content_5bf795cf6bbda5_38992823 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.3.1.js"><?php echo '</script'; ?>
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
        <div class="wrapper headBlock"> 

            <div class="logo"><a href="/"><img src="/images/global/logo.png" class="logoImg" /></a>
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:adminAddMenuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="wrapper"> 
            <div id="content_Block" class="clearfix">
<?php }
}