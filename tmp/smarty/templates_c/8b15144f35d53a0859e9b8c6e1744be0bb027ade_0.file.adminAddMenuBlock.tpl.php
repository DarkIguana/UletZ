<?php
/* Smarty version 3.1.32, created on 2018-11-23 06:57:32
  from '/home/lizard/www/site.local/views/admin/adminAddMenuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf796cc67fc41_76434208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b15144f35d53a0859e9b8c6e1744be0bb027ade' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddMenuBlock.tpl',
      1 => 1542952649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf796cc67fc41_76434208 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menuBlock">
    <ul class="countryMenu menu"> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/admin/" 
                   <?php if ($_smarty_tpl->tpl_vars['item']->value['url_cat_name'] == $_smarty_tpl->tpl_vars['smcountry']->value) {?> id="countryMenuActive"
                   <?php } else { ?> id="unSelectMenu"
                   <?php }?>> 
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                </a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </ul>
            <h2 > <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/" class="editButtonPassive"> Редактировать</a> &nbsp; &nbsp; &nbsp; &nbsp;<a class="addButtonActive" href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/add/">  Добавить </a></h2>
  
        
</div>
<?php }
}
