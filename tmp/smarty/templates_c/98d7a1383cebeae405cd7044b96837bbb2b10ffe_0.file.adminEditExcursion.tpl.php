<?php
/* Smarty version 3.1.32, created on 2018-11-30 18:22:42
  from '/home/lizard/www/site.local/views/admin/adminEditExcursion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0171e2f411e4_03595574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d7a1383cebeae405cd7044b96837bbb2b10ffe' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminEditExcursion.tpl',
      1 => 1543598559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0171e2f411e4_03595574 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsExcursion']->value, 'item', false, NULL, 'excursion', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<h3>Редактирование  экскурсии <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['smupCountry']->value;?>
 - ID <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
  </h3>
         
<h4><label class="container">отображать
  <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked="checked"<?php }?> />
  <span class="checkmark"></span>
</label></h4>
<h4>Страна
        <select class="rightbox" id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'itemCat');
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
        </h4>      
                
            <h4>Изображение</h4>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                      <img src="/images/excursions/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="400"/>
                    <?php }?> </br>
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadexc/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename">
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <input class="buttonstand" type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
               
       
<h4>URL name</h4>
        <div><input type="edit" class="longText" id="itemNameUrl_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
" />  </div>
<h4>Page title</h4>
        <div><input type="edit" class="longText" id="itemPageTitle_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['page_title'];?>
" />  </div>
<h4>Descriptoin Tag</h4>
        <div><input type="edit" class="longText" id="itemDescriptionTag_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description_tag'];?>
" />  </div>
<h4>Keyword</h4>
        <div><input type="edit" class="longText" id="itemKeywordTag_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['keywords_tag'];?>
" />  </div>
<h4>Цена</h4>
        <div><input type="edit" class="longText" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" /></div>
<h4>Название</h4>
        <div><input type="edit" class="longText" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />  </div>
 <h4>Описание короткое</h4>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemDescShort_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>

         </textarea>
         </div>
         
<h4>Описание полное</h4>
          <div><textarea class="ckeditor" id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                 </textarea>
            </div>
         
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
  </br>
      <h2>Загрузка изображений</h2>
                <div class="uploadimg">
                    
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadexcdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename">
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <input class="buttonstand"  type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input class="save" type="button" value="Сохранить" onclick="updateExcursionJs('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
</div>
<?php }
}
