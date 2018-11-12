<?php
/* Smarty version 3.1.32, created on 2018-11-09 10:18:04
  from '/home/lizard/www/site.local/views/old/articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be550cceeb1b0_08354472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc1e3c18805a3c3243428b8524cc7d7858758b9' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/articles.tpl',
      1 => 1540806513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be550cceeb1b0_08354472 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Статьи</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'item', false, NULL, 'articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="clearfix">
        <div id="imgHeaderArticles" >        
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" class="imgConteinerArticleHead" />
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 </h2>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>
</p>
            </a>
        </div>     
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
<?php }
}
