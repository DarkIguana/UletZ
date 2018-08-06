<h2> Добавить Экскурсию</h2>

<h2>Не отображать</h2>
        <div>
            <input type="checkbox" id="itemStatus" />
        </div>
        
<h2>Категория</h2>
         <div>
                <select id="newItemCatId">
                                    <option value="0">Главная Категория
                                             {foreach $rsMenu as $itemCat}
                                                 <option value="{$itemCat['id']}">{$itemCat['cat_name']}
                                             {/foreach}
                 </select>
         </div>

<h2>Название</h2>
    <div>
              <input type="edit" id="newItemName" value=" " />   
    </div>

<h2>Цена</h2>
         <div>
               <input type="edit" id="newItemPrice" value=" " /> 
         </div>

<h2>Краткое Описание</h2>
         <div>
                    <textarea id="newItemDescShort"></textarea>
         </div>

<h2>Описание</h2>
         <div>
                    <textarea id="newItemDesc"></textarea>
          </div>

<h2>Сохранить</h2>
        <div>
                <input type="button" value="Сохранить" onclick="addProduct();"/>
        </div>
        

       
 