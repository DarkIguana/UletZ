<?php
/* Smarty version 3.1.32, created on 2018-11-30 20:04:51
  from '/home/lizard/www/site.local/views/admin/adminAddExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0189d3dc7397_03418522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b7a73516719afaa8cd4f1bece5bb7e2d7a071a' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddExcursion.tpl',
      1 => 1543603427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0189d3dc7397_03418522 (Smarty_Internal_Template $_smarty_tpl) {
?><h3> Добавить новую Экскурсию</h3>
<h4><label class="container">отображать
        <input type="checkbox" id="newItemStatus" />
        <span class="checkmark"></span>
    </label></h4>
<h4>Страна
    <select class="rightbox" id="newItemCatId">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'itemCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['smcountry']->value == $_smarty_tpl->tpl_vars['itemCat']->value['url_cat_name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['cat_name'];?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </select>
</h4> 
<h4>URL name</h4>
<div><input class="longText" type="edit" id="newItemNameUrl"/>  </div>
<small>только маленькие буквы, английские, без пробелов, можно исрользовать "-"</small>
<h4>Page title</h4>
<div><input type="edit" class="longText" id="newItemPageTitle"/>  </div>
<h4>Descriptoin Tag</h4>
<div><input class="longText" type="edit" id="newItemDescriptionTag"/>  </div>
<h4>Keyword</h4>
<div><input class="longText" type="edit" id="newItemKeywordTag"/>  </div>
<h4>Цена</h4>
<div><input class="longText" type="edit" id="newItemPrice"/>  </div>
<h4>Название</h4>
<div>
    <input class="longText" type="edit" id="newItemName" value=" " />   
</div>
<h4>Краткое Описание</h4>
<div>
    <textarea class="longText"  id="newItemDescShort"></textarea>
</div>

<h4>Описание полное</h4>
<div>
    <textarea class="longText" id="newItemDesc"></textarea>
</div>

<div>
    <input class="save" type="button" value="Сохранить" onclick="addExcursionJs();"/>
</div>



<?php }
}
