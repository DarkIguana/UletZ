<?php
/* Smarty version 3.1.32, created on 2018-08-04 08:35:10
  from '/home/lizard/www/site.local/views/default/oneExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b65491e3de777_60070399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1e0a808baa19738c5f5921f6e2d861f793f2b4' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/oneExcursion.tpl',
      1 => 1533364232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b65491e3de777_60070399 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursion']->value, 'item', false, NULL, 'excursion', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/excursion/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="200" />
        </a><br/>
        <div id="shortTxt"><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>
</div><br/>
       
        <div id="shortTxt"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div><br/>
    </div>
  
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
        
<?php }
}
