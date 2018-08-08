<?php
/* Smarty version 3.1.32, created on 2018-08-08 16:52:23
  from '/home/lizard/www/site.local/views/default/oneArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6b03a7e66d91_25647710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbfae6020b4b9e9e967e1b9bb229afa6936f2d6f' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/oneArticle.tpl',
      1 => 1533739941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6b03a7e66d91_25647710 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticle']->value, 'item', false, NULL, 'article', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="200" />
        </a><br/>
        <div id="shortTxt"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div><br/>
       
        <div id="shortTxt"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div><br/>
    </div>
  
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
        
<?php }
}
