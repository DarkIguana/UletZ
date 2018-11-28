{* щаблон Редактирования одной Статьи*}

        {foreach $rsArticle as $item name=article}
<h3>Редактирование  статьи - {$item['name']} - {$smupCountry} - ID {$item['id']}  </h3>
          
        <h4  >Не отображать
                                      
            <input class="rightbox" type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] ==0 }checked="checked"{/if} />
                </h4>
                <h4>Страна
        <select class="rightbox" id="itemCatId_{$item['id']}">
                     {foreach $countries as $itemCat}
                         <option value="{$itemCat['id']}" {if $item['category_id'] == $itemCat['id'] } selected{/if}> {$itemCat['cat_name']}
                      {/foreach}    
                </select>
        </h4>
        <h4>Изображение</h4>
           <div>
                {if $item['image']}
                      <img src="/images/articles/{$smcountry}/{$item['image']}" width="400"/>
                {/if}
                </br>
                          <form action="/{$smcountry}/admin/uploadart/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename">
                                <input type="hidden" name="itemId" value="{$item['id']}">
                               
                                <input class="buttonstand" type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
         

             
<h4>Название</h4>
        <div><input type="edit" class="longText" id="itemName_{$item['id']}" value="{$item['name']}" />  </div>
<h4>URL name</h4>
        <div><input type="edit" class="longText" id="itemNameUrl_{$item['id']}" value="{$item['name_url']}" />  </div>
<h4>Descriptoin Tag</h4>
        <div><input type="edit" class="longText" id="itemDescriptionTag_{$item['id']}" value="{$item['description_tag']}" />  </div>
<h4>Keyword</h4>
        <div><input type="edit" class="longText"  id="itemKeywordTag_{$item['id']}" value="{$item['keywords_tag']}" />  </div>
            
<h4>Teg</h4>
         <div>
        <input type="edit" class="longText" id="itemTeg_{$item['id']}" value="{$item['teg']}" /> 
         </div>
            
<h4>Дата</h4>
        <div><input class="longText" type="edit" id="itemDate_{$item['id']}" value="{$item['date']}" />           </div>
        
<h4>Описание короткое</h4>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemTeaser_{$item['id']}" />{$item['teaser']}
         </textarea>
        </div>
<h4>Описание</h4>
          <div><textarea class="ckeditor" name="edit" id="itemText_{$item['id']}" >
                     {$item['text']}
                 </textarea>
            </div>   
     {/foreach} 
      </br>
      <h4>Загрузка изображений</h4>
                <div class="uploadimg">
                    
                          <form action="/{$smcountry}/admin/uploadarticlesdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input  type="file" name="filename">
                                <input type="hidden" name="itemId" value="{$item['id']}">
                                <input class="buttonstand" type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input class="save" type="button" value="Сохранить" onclick="updateArticleJs('{$item['id']}');"/>
                  
                     
</div>