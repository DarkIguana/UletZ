{* щаблон Редактирования одной экскурсии*}

<h1>edit Экскурсии </h1>
        {foreach $rsExcursion as $item name=excursion}
                 <h3>ID = {$item['id']}  </h3>
                 <h2>Изображение</h2>
            <div>
                {if $item['image']}
                      <img src="/images/{$country}/excursions/{$item['image']}" width="400"/>
                {/if}
                          <form action="/{$country}/admin/uploadexc/"  method="post" enctype="multipart/form-data">
                  
                                <input type="file" name="filename"></br>
                                <input type="hidden" name="itemId" value="{$item['id']}"></br>
                                <input type="submit" value="загрузить"></br>
                       
                        </form>
             </div>
            
        
 
<h1>Категория</h1>
        <div>
            <select id="itemCatId_{$item['id']}">
                <option value="0">Главная Категория
                     {foreach $rsMenu as $itemCat}
                         <option value="{$itemCat['id']}" {if $item['category_id'] == $itemCat['id'] } selected{/if}> {$itemCat['cat_name']}
                      {/foreach}    
                </select>
        </div>
             
<h1>Название</h1>
        <div><input type="edit" id="itemName_{$item['id']}" value="{$item['name']}" />  </div>
        
<h1>Цена</h1>
        <div><input type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}" />           </div>
        
<h1>Описание короткое</h1>
         <div>
        <input type="edit" id="itemDescShort_{$item['id']}" value="{$item['description_short']}" /> 
         </div>
         
<h1>Описание</h1>
          <div><textarea id="itemDesc_{$item['id']}">
                     {$item['description']}
                 </textarea>
            </div>
                 
   
<h2>Не отображать</h2>
        <div>
            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
        </div>
     {/foreach} 
 <div>
                     <input type="button" value="Сохранить" onclick="updateExcursion('{$item['id']}');"/>
</div>
   