<?php
/* Smarty version 3.1.32, created on 2018-11-29 06:57:40
  from '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff7fd4b15e83_42910566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02e1e9668a540fc0d7dc47c2e7c2ba08f81583e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminEditArticle.tpl',
      1 => 1543471056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff7fd4b15e83_42910566 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticle']->value, 'item', false, NULL, 'article', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<h3>Редактирование  статьи - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['smupCountry']->value;?>
 - ID <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
  </h3>
  <br/>          
<br/>     
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
                      <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="400"/>
                <?php }?>
                </br>
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadart/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename">
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                               
                                <input class="buttonstand" type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
         

             
<h4>Название</h4>
        <div><input type="edit" class="longText" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />  </div>
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
        <div><input type="edit" class="longText"  id="itemKeywordTag_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['keywords_tag'];?>
" />  </div>
            
<h4>Teg</h4>
         <div>
        <input type="edit" class="longText" id="itemTeg_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['teg'];?>
" /> 
         </div>
            
<h4>Дата</h4>
        <div><input class="longText" type="edit" id="itemDate_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
" />           </div>
        
<h4>Описание короткое</h4>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemTeaser_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['teaser'];?>

         </textarea>
        </div>
<h4>Описание</h4>
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
      <h4>Загрузка изображений</h4>
                <div class="uploadimg">
                    
                          <form action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/uploadarticlesdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input  type="file" name="filename">
                                <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <input class="buttonstand" type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input class="save" type="button" value="Сохранить" onclick="updateArticleJs('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                  
                     
</div><?php }
}
