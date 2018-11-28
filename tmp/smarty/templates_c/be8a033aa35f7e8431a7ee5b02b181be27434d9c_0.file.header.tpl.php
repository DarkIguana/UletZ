<?php
/* Smarty version 3.1.32, created on 2018-11-28 08:41:25
  from '/home/lizard/www/site.local/views/old/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfe46a5d97d59_84190414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8a033aa35f7e8431a7ee5b02b181be27434d9c' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/header.tpl',
      1 => 1543333581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analyticstracking.tpl' => 1,
    'file:menuBlock.tpl' => 1,
  ),
),false)) {
function content_5bfe46a5d97d59_84190414 (Smarty_Internal_Template $_smarty_tpl) {
?>    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['rsPageTitle']->value;?>
</title>  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
        <link rel="alternate" type="application/rss+xml" title="Улетаем зимовать" href="http://uletaemzimovat.ru/rss/rss.php" />
        <link rel="icon" type="image/png" href="/images/global/favicon.png" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.3.1.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js" ><?php echo '</script'; ?>
>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['smPageDescription']->value;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['smKeywords']->value;?>
" />
     <?php $_smarty_tpl->_subTemplateRender('file:analyticstracking.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  
    </head>
    
    <body>
          
        <div class="wrapper headBlock"> 
            
            <div class="logo"><a href="/"><img src="/images/global/logo.png" class="logoImg" /></a>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:menuBlock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
       
        <div class="wrapper"> 
            <div id="content_Block" class="clearfix">
<?php }
}
