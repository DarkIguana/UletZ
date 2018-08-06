<?php
/* Smarty version 3.1.32, created on 2018-07-26 14:45:31
  from '/home/lizard/www/site.local/views/default/menublock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b59c26b24e2b3_71285807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29b1947070206531acae3920675c638dd0600da' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/menublock.tpl',
      1 => 1532609127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b59c26b24e2b3_71285807 (Smarty_Internal_Template $_smarty_tpl) {
?>                
        <div id="menuBlock">
            <div id="countryMenu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCountries']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                   <a href="/?controller=country&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"> 
                       <?php echo $_smarty_tpl->tpl_vars['item']->value['country'];?>

                   </a><br/>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
            <div id="topMenu">
                
                
                                 
            </div>
                   
        </div>
<?php }
}
