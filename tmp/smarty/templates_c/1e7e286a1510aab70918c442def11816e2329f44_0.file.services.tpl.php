<?php
/* Smarty version 3.1.32, created on 2018-10-02 11:09:40
  from '/home/lizard/www/site.local/views/old/services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb335d4eb6e67_53003909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7e286a1510aab70918c442def11816e2329f44' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/services.tpl',
      1 => 1538471378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb335d4eb6e67_53003909 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsServices']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
    <div class="clearfix">
        <div id="descriptionHeaderArticles" >  
                <h2><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
 </h2>
                <p><?php echo $_smarty_tpl->tpl_vars['service']->value['description'];?>
</p>         
        </div>     
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
<?php }
}
