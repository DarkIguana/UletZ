<?php
/* Smarty version 3.1.32, created on 2018-11-30 17:51:41
  from '/home/lizard/www/site.local/views/old/excursions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c016a9ddacec5_38698927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137ee7ce6d803580ff76edcce785aee2cce4dbf4' => 
    array (
      0 => '/home/lizard/www/site.local/views/old/excursions.tpl',
      1 => 1543494310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c016a9ddacec5_38698927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="excursionsTwoList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursions']->value, 'item', false, NULL, 'excursion', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_excursion']->value['iteration']++;
?>
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/excursions/to-<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a> </h2>
            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>
 <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/excursions/to-<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
/" class="hrefstandart">&nbsp;Узнать&nbsp;подробнее...</a></p>

            <a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/excursions/to-<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
/" class="buttonAndImage">
                <table class="button_podrobno" >
                    <tr valign="bottom">
                        <td colspan="2" ><img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100%"/></td>
                    </tr>
                    <tr>
                        <td class="button_podrobno_price" >
                             <strong>Цена:</strong> от <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
&nbsp;бат
                        </td>
                        <td class="button_podrobno_podrobno_inner"><strong>Подрoбнee</strong></td> 					
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
    <p class="toPoints"><a href="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/points/" class="hrefstandart"> Другие экскурсии и список достопримечателтностей...</a> </p>


<?php }
}
