<?php
/* Smarty version 3.1.32, created on 2018-08-05 18:14:08
  from '/home/lizard/www/site.local/views/default/excursions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b672250d11095_36456076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '247a219a0b5c2a3db60f5f2a5d0d85d352852c15' => 
    array (
      0 => '/home/lizard/www/site.local/views/default/excursions.tpl',
      1 => 1533485645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b672250d11095_36456076 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['countryId']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursions']->value, 'item', false, NULL, 'excursion', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration']++;
?>
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/excursions/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="200" />
        </a><br/>
        <div id="shortTxt"><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>
</div><br/>
        <a href="/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
/excursions/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
