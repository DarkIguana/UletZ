<?php
/* Smarty version 3.1.32, created on 2018-10-26 18:58:27
  from '/home/u487921/uletaemzimovat.ru/views/old/oneArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd339a365b518_45151294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f509adfa2a4c9fa12a334229bdde3c216451dd6e' => 
    array (
      0 => '/home/u487921/uletaemzimovat.ru/views/old/oneArticle.tpl',
      1 => 1540568048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd339a365b518_45151294 (Smarty_Internal_Template $_smarty_tpl) {
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
