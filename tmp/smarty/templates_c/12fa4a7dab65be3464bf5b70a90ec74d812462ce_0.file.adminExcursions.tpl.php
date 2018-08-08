<?php
/* Smarty version 3.1.32, created on 2018-08-08 12:32:10
  from '/home/lizard/www/site.local/views/admin/adminExcursions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ac6aa17c661_92933741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12fa4a7dab65be3464bf5b70a90ec74d812462ce' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminExcursions.tpl',
      1 => 1533724260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ac6aa17c661_92933741 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Экскурсии </h2>

<table >
    <caption> Редактирование Экскурсий <?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
</caption>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Удалить</th>
        <th>Изображение</th>
        <th>Изменить</th>
    </tr>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursions']->value, 'item', false, NULL, 'products', array (
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
