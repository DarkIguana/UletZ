<?php
/* Smarty version 3.1.32, created on 2018-11-28 10:42:55
  from '/home/lizard/www/site.local/views/admin/adminAddPoint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfe631f087368_48314878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a34f88fef6b4ee2881e5f5bf07cbe8aa4adfb5' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddPoint.tpl',
      1 => 1543398154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfe631f087368_48314878 (Smarty_Internal_Template $_smarty_tpl) {
?><h1> Добавить новую Point</h1>
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
        <div><input type="edit" id="newItemNameUrl"/>  </div>
<small>только маленькие буквы, английские, без пробелов, можно исрользовать "-"</small>
        <h1>Descriptoin Tag</h1>
        <div><input type="edit" id="newItemDescriptionTag"/>  </div>
<h1>Keyword</h1>
        <div><input type="edit" id="newItemKeywordTag"/>  </div>
<h2>Название</h2>
<div>
    <input type="edit" id="newItemName" value=" " />   
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
    <input type="button" value="Сохранить" onclick="addPointJs();"/>
</div>



<?php }
}
