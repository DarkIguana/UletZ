<?php
/* Smarty version 3.1.32, created on 2018-11-30 20:34:39
  from '/home/lizard/www/site.local/views/old/onePoint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0190cf0c2b60_77965769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c5e8aed54f613be817a008d9bfb1928a5ab4bc' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/onePoint.tpl',
      1 => 1543606443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0190cf0c2b60_77965769 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPoint']->value, 'item', false, NULL, 'point', array (
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
/points/">
<div id="button_back"> Вернутьcя в раздел Достопримечательности</div>													<!-- button back -->
</a>
</div>

     
        
<?php }
}
