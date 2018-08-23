{* щаблон Редактирования одной экскурсии*}

<h1>edit статьи {$smcountry}</h1>
        {foreach $rsArticle as $item name=article}
        <h3>ID = {$item['id']}  </h3>
        <h2>Не отображать</h2>
                <div>                                   
                        <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] ==0 }checked="checked"{/if} />
                </div>
                 <h2>Изображение</h2>
           <div>
                {if $item['image']}
                      <img src="/images/articles/{$smcountry}/{$item['image']}" width="400"/>
                {/if}
                          <form action="/{$smcountry}/admin/uploadart/"  method="post" 
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
        <div><input type="edit" id="itemName_{$item['id']}" value="{$item['name']}" />  </div>

<h1>Teg</h1>
         <div>
        <input type="edit" id="itemTeg_{$item['id']}" value="{$item['teaser']}" /> 
         </div>
        
<h1>Дата</h1>
        <div><input type="edit" id="itemDate_{$item['id']}" value="{$item['date']}" />           </div>
        
<h1>Описание короткое</h1>
         <div>
        <input type="edit" id="itemTeaser_{$item['id']}" value="{$item['teaser']}" /> 
         </div>
         
<h1>Описание</h1>
          <div><textarea class="ckeditor" name="edit" id="itemText_{$item['id']}" >
                     {$item['text']}
                 </textarea>
            </div>   
     {/foreach} 
    
 <div>
                     <input type="button" value="Сохранить" onclick="updateArticleJs('{$item['id']}');"/>
                  
                     
</div>
   
            