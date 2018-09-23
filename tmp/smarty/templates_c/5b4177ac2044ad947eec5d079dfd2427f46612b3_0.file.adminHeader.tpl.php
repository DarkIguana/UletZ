<?php
/* Smarty version 3.1.32, created on 2018-09-23 19:16:37
  from '/home/lizard/www/site.local/views/admin/adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba7ca7525ad30_15706088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b4177ac2044ad947eec5d079dfd2427f46612b3' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminHeader.tpl',
      1 => 1537722994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminMenuBlock.tpl' => 1,
  ),
),false)) {
function content_5ba7ca7525ad30_15706088 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender('file:adminMenuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="wrapper"> 
            <div id="content_Block" class="clearfix">
<?php }
}
