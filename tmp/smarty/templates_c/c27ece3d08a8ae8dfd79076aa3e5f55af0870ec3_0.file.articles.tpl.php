<?php
/* Smarty version 3.1.32, created on 2018-08-08 12:37:36
  from '/home/lizard/www/site.local/views/default/articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ac7f0d097f1_82173516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27ece3d08a8ae8dfd79076aa3e5f55af0870ec3' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/articles.tpl',
      1 => 1533724317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ac7f0d097f1_82173516 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'item', false, NULL, 'articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style='padding: 0px 30px 40px 0px;'>
                
        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                                        <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="300" />
        </a>
        
        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>
</a>
           <br/>      
    </div>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
<?php }
}
