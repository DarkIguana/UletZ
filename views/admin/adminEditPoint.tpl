{* щаблон Редактирования одной экскурсии*}

<h1>{$smcountry}</h1>
        {foreach $rsPoint as $item name=excursion}
            <h3>ID = {$item['id']}  </h3>
            <h2>Не отображать</h2>
                    <div>
                            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
                    </div>
            <h2>Изображение</h2>
                <div>
                    {if $item['image']}
                      <img src="/images/points/{$smcountry}/{$item['image']}" width="400"/>
                    {/if}
                          <form action="/{$smcountry}/admin/uploadPointImg/"  method="post" 
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
            
<h1>Описание короткое</h1>
         <div>
        <input type="edit" id="itemDescShort_{$item['id']}" value="{$item['description_short']}" /> 
         </div>
         
<h1>Описание</h1>
          <div><textarea class="ckeditor" id="itemDesc_{$item['id']}">
                     {$item['description']}
                 </textarea>
            </div>
          
   

     {/foreach} 
 <div>
                     <input type="button" value="Сохранить" onclick="updatePointJs('{$item['id']}');"/>
</div>
