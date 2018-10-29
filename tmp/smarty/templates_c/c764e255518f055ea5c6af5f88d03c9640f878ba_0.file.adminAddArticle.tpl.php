<?php
/* Smarty version 3.1.32, created on 2018-10-29 11:54:16
  from '/home/u487921/uletaemzimovat.ru/views/admin/adminAddArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6cab80b22e5_09919685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c764e255518f055ea5c6af5f88d03c9640f878ba' => 
    array (
      0 => '/home/u487921/uletaemzimovat.ru/views/admin/adminAddArticle.tpl',
      1 => 1540442470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6cab80b22e5_09919685 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Добавить Статью</h2>
<h2>Не отображать</h2>
<div>
    <input type="checkbox" id="newItemStatus" />
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
" <?php if ($_smarty_tpl->tpl_vars['smcountry']->value == $_smarty_tpl->tpl_vars['itemCat']->value['url_cat_name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['cat_name'];?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<h2>Название</h2>
<div>
    <input type="edit" id="newItemName" value=" " />   
</div>
<h2>Краткое Описание</h2>
<div>
    <input type="edit" id="newItemTeaser" value=" " /> 
</div>
<h2>Текст</h2>
<div>
    <textarea id="newItemText"></textarea>
</div>
<h2>Тег</h2>
<div>
    <textarea id="newItemTeg"></textarea>
</div>
<h2>Сохранить</h2>
<div>
    <input type="button" value="Сохранить" onclick="addArticleJs();"/>
</div><?php }
}
