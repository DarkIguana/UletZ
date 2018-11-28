<h1> Добавить новую Экскурсию</h1>
<h2>Не отображать</h2>
<div>
    <input type="checkbox" id="newitemStatus" />
</div>        
<h2>Страна</h2>
<div>
    <select id="newItemCatId">                                    
        {foreach $countries as $itemCat}
            <option value="{$itemCat['id']}">{$itemCat['cat_name']}
        {/foreach}
    </select>
</div>
<h1>URL name</h1>
        <div><input type="edit" id="newItemNameUrl"/>  </div>
<small>только маленькие буквы, английские, без пробелов, можно исрользовать "-"</small>
        <h1>Descriptoin Tag</h1>
        <div><input type="edit" id="newItemDescriptionTag"/>  </div>
<h1>Keyword</h1>
        <div><input type="edit" id="newItemKeywordTag"/>  </div>
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

<div>
    <input type="button" value="Сохранить" onclick="addExcursionJs();"/>
</div>



