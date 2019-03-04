<?php
/* Smarty version 3.1.32, created on 2019-02-28 08:43:09
  from '/home/lizard/www/site.local/views/old/oneExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c77910d44eba9_24208313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d874d7c992c0567a0550915f872716c7dd051a' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/oneExcursion.tpl',
      1 => 1543607616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c77910d44eba9_24208313 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursion']->value, 'item', false, NULL, 'excursion', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div >
        <div class="contentBlock"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div><br/>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="bottom_article_exc">
    <h3>Заказать экскурсию:</h3>
    <p>
        Viber, WhatsApp: +7 916 678-73-27 <br>
        e-mail: <a href="mailto:annagross.com@gmail.com" > annagross.com@gmail.com </a>
    </p>

    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/excursions/">
        <div id="button_back"> Вернутьcя в раздел Экскурсии</div>													<!-- button back -->
    </a>
</div>


<?php }
}
