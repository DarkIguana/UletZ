{* щаблон Редактирования одной экскурсии*}

        {foreach $rsExcursion as $item name=excursion}
<h1>Редактирование  экскурсии {$item['name']} - {$smupCountry} </h1>
            <h3>ID = {$item['id']}  </h3>
            <h2>Не отображать</h2>
                    <div>
                            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
                    </div>
            <h2>Изображение</h2>
                <div>
                    {if $item['image']}
                      <img src="/images/excursions/{$smcountry}/{$item['image']}" width="400"/>
                    {/if}
                          <form action="/{$smcountry}/admin/uploadexc/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="{$item['id']}"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
            
        
 
<h1>Страна</h1>
        <div>
            <select id="itemCatId_{$item['id']}">
               
                     {foreach $countries as $itemCat}
                         <option value="{$itemCat['id']}" {if $item['category_id'] == $itemCat['id'] } selected{/if}> {$itemCat['cat_name']}
                      {/foreach}    
                </select>
        </div>
             
<h1>Название</h1>
        <div><input type="edit" class="longText" id="itemName_{$item['id']}" value="{$item['name']}" />  </div>
        
<h1>URL name</h1>
        <div><input type="edit" class="longText" id="itemNameUrl_{$item['id']}" value="{$item['name_url']}" />  </div>
<h1>Page title</h1>
        <div><input type="edit" class="longText" id="itemPageTitle_{$item['id']}" value="{$item['page_title']}" />  </div>

<h1>Descriptoin Tag</h1>
        <div><input type="edit" class="longText" id="itemDescriptionTag_{$item['id']}" value="{$item['description_tag']}" />  </div>
<h1>Keyword</h1>
        <div><input type="edit" class="longText" id="itemKeywordTag_{$item['id']}" value="{$item['keywords_tag']}" />  </div>
                
<h1>Цена</h1>
        <div><input type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}" /></div>
        
<h1>Описание короткое</h1>
        <div>
             <textarea rows="5"  class="longText" type="edit" id="itemDescShort_{$item['id']}" />{$item['description_short']}
         </textarea>
         </div>
         
<h1>Описание</h1>
          <div><textarea class="ckeditor" id="itemDesc_{$item['id']}">{$item['description']}
                 </textarea>
            </div>
          
   

     {/foreach} 
  </br>
      <h2>Загрузка изображений</h2>
                <div class="uploadimg">
                    
                          <form action="/{$smcountry}/admin/uploadexcdescriptionimg/"  method="post" 
                                                            enctype="multipart/form-data">
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="{$item['id']}"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
 <div>
     </br></br>
                     <input type="button" value="Сохранить" onclick="updateExcursionJs('{$item['id']}');"/>
</div>
