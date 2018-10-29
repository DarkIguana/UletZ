<?php
/* Smarty version 3.1.32, created on 2018-10-29 12:04:22
  from '/home/u487921/uletaemzimovat.ru/views/old/points.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6cd1668a562_58658495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '781d24faf39333d7c2ac9f8c0efa3ef4f1caebbd' => 
    array (
      0 => '/home/u487921/uletaemzimovat.ru/views/old/points.tpl',
      1 => 1540801707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6cd1668a562_58658495 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="excursionsTwoList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPoints']->value, 'item', false, NULL, 'points', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/points/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a> </h2>
            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>
</p>

            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/points/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="buttonAndImage">
                <table class="button_podrobno">
                    <tr>
                        <td class="button_podrobno_price" >
                            <table class="button_podrobno_price_inner">
                                <tr>
                                    <td style="padding: 10px 05px;"> </td>
                                </tr>
                            </table>
                        </td>
                        <td class="button_podrobno_podrobno_inner">Подрoбнee</td> 					
                    </tr>
                    <tr>
                        <td colspan="2">

                            <div class="fpimg">
                                <img src="/images/points/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100%"/>
                            </div>
                        </td>
                    </tr>
                </table>
            </a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration'] : null) % 2 == 0) {?>
        </div>
      

        <div class="excursionsTwoList">
        <?php }?> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
   <?php }
}
