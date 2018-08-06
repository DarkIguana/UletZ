<?php
/* Smarty version 3.1.32, created on 2018-08-05 06:23:00
  from '/home/lizard/www/site.local/views/admin/adminAddArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b667ba4d4c536_35465178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0c9a468c8f6a31777441dedf28f32a5d9dfb00' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminAddArticle.tpl',
      1 => 1533438698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b667ba4d4c536_35465178 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Добавить Экскурсию</h2>

<h2>Не отображать</h2>
        <div>
            <input type="checkbox" id="itemStatus" />
        </div>
        
<h2>Категория</h2>
         <div>
                <select id="newItemCatId">
                                    <option value="0">Главная Категория
                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'itemCat');
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

<h2>Сохранить</h2>
        <div>
                <input type="button" value="Сохранить" onclick="addProduct();"/>
        </div>
        

       
 <?php }
}
