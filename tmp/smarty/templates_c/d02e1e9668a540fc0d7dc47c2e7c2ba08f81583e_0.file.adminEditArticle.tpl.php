<?php
/* Smarty version 3.1.32, created on 2018-11-28 11:36:10
  from '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfe6f9ad54ca1_53591661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02e1e9668a540fc0d7dc47c2e7c2ba08f81583e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl',
      1 => 1543401361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfe6f9ad54ca1_53591661 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticle']->value, 'item', false, NULL, 'article', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<h1>Редактирование  экскурсии <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
 </h1>
        <h3>ID = <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
  </h3>
        <h2>Не отображать</h2>
                <div>                                   
                        <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked="checked"<?php }?> />
                </div>
                 <h2>Изображение</h2>
           <div>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                      <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="400"/>
                <?php }?>
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadart/"  method="post" 
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
            
<h1>Teg</h1>
         <div>
        <input type="edit" class="longText" id="itemTeg_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['teg'];?>
" /> 
         </div>
            
<h1>Дата</h1>
        <div><input type="edit" id="itemDate_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
" />           </div>
        
<h1>Описание короткое</h1>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemTeaser_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>

         </textarea>
        </div>
<h1>Описание</h1>
          <div><textarea class="ckeditor" name="edit" id="itemText_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                     <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

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
/admin/uploadarticlesdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input type="button" value="Сохранить" onclick="updateArticleJs('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                  
                     
</div><?php }
}
