<?php
/* Smarty version 3.1.32, created on 2018-10-26 06:32:58
  from '/home/lizard/www/site.local/views/old/menuBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd298fae279a5_42269580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e72d01f154c2e2d30022fe46d2cd7c1e8f3833' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/menuBlock.tpl',
      1 => 1540528002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd298fae279a5_42269580 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
<!-- <div style="margin: 20px;"> -->
    <div class="menuToggle" style="position: static; display: inline;">
       <div style="margin: 20px;"> <div class="menu-icon" data-behaviour="toggle-menu-icon"><span class="menu-icon__bar"></div></div>
       <h1 class="mobileMenuHeader">Меню</h1></div><a href="/"><img src="/images/global/logo.png" class="mobLogoImg" /></a>


    <div class="menuBlock">
        <ul class="countryMenu menu"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/" 
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
        <div class="subMenu menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smSubMenu']->value, 'item', false, NULL, 'subMenu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>                
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/">                         
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
                    
                    </a>                
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </div>  
    </div>
        
         <div class="menuBlockMob">
        <ul class="countryMenu menu"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['country']->value['url_cat_name'];?>
/" 
                       <?php if ($_smarty_tpl->tpl_vars['country']->value['url_cat_name'] == $_smarty_tpl->tpl_vars['smcountry']->value) {?> id="countryMenuActive"
                       <?php } else { ?> id="unSelectMenu"
                       <?php }?>> 
                        <?php echo $_smarty_tpl->tpl_vars['country']->value['cat_name'];?>

                    </a></li>
                        <div class="subMenu menu">
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smSubMenu']->value, 'item', false, NULL, 'subMenu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>                
                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['country']->value['url_cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url_cat_name'];?>
/">                         
                                             <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
                    
                                        </a>                
                                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                         </div>  
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </ul>
        
    </div>
</nav><?php }
}
