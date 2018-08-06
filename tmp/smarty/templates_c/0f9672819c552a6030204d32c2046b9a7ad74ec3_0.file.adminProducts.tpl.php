<?php
/* Smarty version 3.1.32, created on 2018-07-29 18:20:24
  from '/home/lizard/www/site.local/views/admin/adminProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5de948a32dd0_62963262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9672819c552a6030204d32c2046b9a7ad74ec3' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminProducts.tpl',
      1 => 1532881215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5de948a32dd0_62963262 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Экскурсии </h2>
<table >
    <caption> Добавить продукт</caption>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Категория</th>
        <th>Описание</th>
        <th>Сохранить</th>
    </tr>
   
     <tr>
            <td>
                  <input type="edit" id="newItemName" value=" " />               
            </td> 
            <td>
                    <input type="edit" id="newItemPrice" value=" " />    
            </td>      
            <td>       
                    <select id="newItemCatId">
                                    <option value="0">Главная Категория
                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'itemCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
?>
                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
             </td> 
             <td>
                 <textarea id="newItemDesc"></textarea>
             </td>
             <td>
                 <input type="button" value="Сохранить" onclick="addProduct();"/>
             </td> 
      </tr>
</table>
<table >
    <caption> Редактирование</caption>
    <tr>
        <th>№</th>
        <th>ID</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Категория</th>
        <th>Описание</th>
        <th>Удалить</th>
        <th>Изображение</th>
        <th>Сохранить</th>
    </tr>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
     <tr>
          <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td> 
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
          <td>
                <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />               
          </td> 
          <td>
                <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" />               
          </td> 
          <td>
                <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <option value="0">Главная Категория
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'itemCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
?>
                         <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id'] == $_smarty_tpl->tpl_vars['itemCat']->value['id']) {?> selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                </select>
          </td> 
          <td>
                 <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                     <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                 </textarea>
          </td>
          <td>
              <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
          </td>
          <td>
              <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                  <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
              <?php }?>
              <form action="/admin/upload/"  method="post" enctype="multipart/form-data">
                  
                  <input type="file" name="filename"></br>
                  <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></br>
                   <input type="submit" name="загрузить"></br>
                  
              </form>
          </td>
          <td>
                 <input type="button" value="Сохранить" onclick="updateProduct(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
          </td> 
     </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
</table><?php }
}
