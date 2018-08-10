<?php
/* Smarty version 3.1.32, created on 2018-08-10 09:36:05
  from '/home/lizard/www/site.local/views/old/menuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6d406529a2e9_32274377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e72d01f154c2e2d30022fe46d2cd7c1e8f3833' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/menuBlock.tpl',
      1 => 1533886444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d406529a2e9_32274377 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="clear: both; padding-top: 20px;"></div>   <!-- zaglushka dl'a div otstupa  -->      
<div id="menuBlock">

    <div id="countryMenu">
        <div style="text-align: center">    
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/" 
                   <?php if ($_smarty_tpl->tpl_vars['item']->value['url_cat_name'] == $_smarty_tpl->tpl_vars['smcountry']->value) {?> id="selectMenu"
                   <?php } else { ?> id="unSelectMenu"
                   <?php }?>> 
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </div>
    </div>

    <div id="subMenu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smSubMenu']->value, 'item', false, NULL, 'subMenu', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_subMenu']->value['iteration']++;
?>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/" 
               id="subMenuButton<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_subMenu']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_subMenu']->value['iteration'] : null);?>
"> 
                <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </div>  

</div>
<div style="clear: both; padding-bottom: 40px;"></div>   <!-- zaglushka dl'a div otstupa  -->



<?php }
}
