<?php
/* Smarty version 3.1.32, created on 2018-08-06 05:35:48
  from '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67c214102d89_01016665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02e1e9668a540fc0d7dc47c2e7c2ba08f81583e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl',
      1 => 1533526543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67c214102d89_01016665 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>edit Экскурсии </h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticle']->value, 'item', false, NULL, 'article', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                 <h3>ID = <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
  </h3>
                 <h2>Изображение</h2>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                      <img src="/images/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
/articles/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="400"/>
                <?php }?>
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
/admin/upload/"  method="post" enctype="multipart/form-data">
                  
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
            
        
 
<h1>Категория</h1>
        <div>
            <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <option value="0">Главная Категория
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'itemCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
?>
                         <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id'] == $_smarty_tpl->tpl_vars['itemCat']->value['id']) {?> selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['cat_name'];?>

                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                </select>
        </div>
             
<h1>Название</h1>
        <div><input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />  </div>
        
<h1>Дата</h1>
        <div><input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
" />           </div>
        
<h1>Описание короткое</h1>
         <div>
        <input type="edit" id="itemDescShort_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>
" /> 
         </div>
         
<h1>Описание</h1>
          <div><textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                     <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

                 </textarea>
            </div>
                 
   
<h2>Не отображать</h2>
        <div>
            <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
        </div>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
 <div>
                     <input type="button" value="Сохранить" onclick="updateExcursion('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
</div>
   <?php }
}
