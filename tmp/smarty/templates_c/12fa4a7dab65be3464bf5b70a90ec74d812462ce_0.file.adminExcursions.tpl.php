<?php
/* Smarty version 3.1.32, created on 2018-11-28 22:06:11
  from '/home/lizard/www/site.local/views/admin/adminExcursions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff0343339ab0_23533045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12fa4a7dab65be3464bf5b70a90ec74d812462ce' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminExcursions.tpl',
      1 => 1543439098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff0343339ab0_23533045 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>  Редактирование Экскурсий  - <?php echo $_smarty_tpl->tpl_vars['smupCountry']->value;?>
 </h1>
<table >
     <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Не отображать</th>
        <th>Изображение</th>
        <th>Изменить</th>
    </tr>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursionsHead']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
     <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td> 
           <td>
              <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
          </td>
          <td> <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                  <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
              <?php }?></td>
          <td>
                       <form method="LINK" action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/editexcursion/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                    <input type="submit" value="Изменить">
                  </form>
          </td> 
     </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
</table>
                       
<?php }
}
