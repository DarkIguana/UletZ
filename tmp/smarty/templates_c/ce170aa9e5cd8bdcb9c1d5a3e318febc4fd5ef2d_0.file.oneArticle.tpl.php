<?php
/* Smarty version 3.1.32, created on 2018-10-03 10:22:59
  from '/home/lizard/www/site.local/views/old/oneArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb47c636aaf17_64451985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce170aa9e5cd8bdcb9c1d5a3e318febc4fd5ef2d' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/oneArticle.tpl',
      1 => 1538554976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb47c636aaf17_64451985 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapperArticle">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticle']->value, 'item', false, NULL, 'article', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div>
        <h1 class="articleHeader"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</p>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/articles/">
        <div id="button_back"> Вернутьcя в раздел Статьи</div>													<!-- button back -->
    </a>   
</div><?php }
}
