<?php
/* Smarty version 3.1.32, created on 2018-11-22 15:45:02
  from '/home/lizard/www/site.local/views/admin/adminEditPoint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6c0ee1b9ce3_48769103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a881ba0218404aa3938e684a9eaee494ada87e17' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminEditPoint.tpl',
      1 => 1542897898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6c0ee1b9ce3_48769103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPoint']->value, 'item', false, NULL, 'excursion', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <h3>ID = <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
  </h3>
            <h2>Не отображать</h2>
                    <div>
                            <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
                    </div>
            <h2>Изображение</h2>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                      <img src="/images/points/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="400"/>
                    <?php }?>
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadpointimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
            
        
 
<h1>Страна</h1>
        <div>
            <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
        </div>
             
<h1>Название</h1>
        <div><input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />  </div>
<h1>URL name</h1>
        <div><input type="edit" id="itemNameUrl_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name_url'];?>
" />  </div>
<h1>Descriptoin Tag</h1>
        <div><input type="edit" class="longText" id="itemDescriptionTag_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description_tag'];?>
" />  </div>
<h1>Keyword</h1>
        <div><input type="edit" class="longText"  id="itemKeywordTag_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['keywords_tag'];?>
" />  </div>
                    
<h1>Описание короткое</h1>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemDescShort_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['description_short'];?>

         </textarea>
       </div>
         
<h1>Описание</h1>
          <div><textarea class="ckeditor" id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                     <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                 </textarea>
            </div>
          
   

     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
     </br>
      <h2>Загрузка изображений</h2>
                <div>
                    
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadpointdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input type="button" value="Сохранить" onclick="updatepointJs('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
</div>

                     <?php }
}