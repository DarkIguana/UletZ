<?php
/* Smarty version 3.1.32, created on 2018-08-10 14:11:41
  from '/home/lizard/www/site.local/views/old/oneExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6d80fd6842f2_16523676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d874d7c992c0567a0550915f872716c7dd051a' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/oneExcursion.tpl',
      1 => 1533903089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d80fd6842f2_16523676 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursion']->value, 'item', false, NULL, 'excursion', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style='float:left; padding: 0px 30px 40px 0px;'>
          <div id="name">
            <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h1>
        </div><br/>
        
        <div id="contentBlock"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div><br/>
    </div>
    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div id="contentBlock">
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
