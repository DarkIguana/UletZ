<?php
/* Smarty version 3.1.32, created on 2018-11-25 11:54:25
  from '/home/lizard/www/site.local/views/admin/adminAddArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa7f61863b22_54452864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0c9a468c8f6a31777441dedf28f32a5d9dfb00' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddArticle.tpl',
      1 => 1542966569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7f61863b22_54452864 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>URL name</h1>
        <div><input type="edit" id="itemNameUrl_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
" />  </div>
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
