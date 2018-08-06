<?php
/* Smarty version 3.1.32, created on 2018-07-31 18:20:39
  from '/home/lizard/www/site.local/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b608c57cf3862_47251543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8311e7361a69ec76efd3633a6a4375239ad326ae' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/index.tpl',
      1 => 1533054034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b608c57cf3862_47251543 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursions']->value, 'item', false, NULL, 'excursion', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration']++;
?>
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/excursion/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
        </a><br/>
        <a href="/excursions/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration'] : null) % 3 == 0) {?>
        <div style="clear:both;">   </div>
        <?php }?> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
        
<?php }
}
