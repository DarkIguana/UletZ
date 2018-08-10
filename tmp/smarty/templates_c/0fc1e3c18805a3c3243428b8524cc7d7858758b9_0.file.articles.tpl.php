<?php
/* Smarty version 3.1.32, created on 2018-08-10 16:15:22
  from '/home/lizard/www/site.local/views/old/articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6d9dfa14dae0_07132892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc1e3c18805a3c3243428b8524cc7d7858758b9' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/articles.tpl',
      1 => 1533910519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d9dfa14dae0_07132892 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'item', false, NULL, 'articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style='padding: 0px 30px 40px 0px;'>
        <div id="imgHeaderArticles" >        
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="300" />
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>  <br/> 
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>
</a>
        </div>     
    </div>
    <div style="clear: both;"></div>   <!-- zaglushka dla div otstupa  -->
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
<?php }
}
