<?php
/* Smarty version 3.1.32, created on 2018-11-23 07:06:08
  from '/home/lizard/www/site.local/views/admin/adminAddExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf798d0b68ed3_78292954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b7a73516719afaa8cd4f1bece5bb7e2d7a071a' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddExcursion.tpl',
      1 => 1542383619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf798d0b68ed3_78292954 (Smarty_Internal_Template $_smarty_tpl) {
?><h1> Добавить новую Экскурсию</h1>
<h2>Не отображать</h2>
<div>
    <input type="checkbox" id="newitemStatus" />
</div>        
<h2>Страна</h2>
<div>
    <select id="newItemCatId">                                    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'itemCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['cat_name'];?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<h1>URL name</h1>
        <div><input type="edit" id="itemNameUrl_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
" />  </div>
<h2>Название</h2>
<div>
    <input type="edit" id="newItemName" value=" " />   
</div>

<h2>Цена</h2>
<div>
    <input type="edit" id="newItemPrice" value=" " /> 
</div>

<h2>Краткое Описание</h2>
<div>
    <textarea id="newItemDescShort"></textarea>
</div>

<h2>Описание</h2>
<div>
    <textarea id="newItemDesc"></textarea>
</div>

<div>
    <input type="button" value="Сохранить" onclick="addExcursionJs();"/>
</div>



<?php }
}
