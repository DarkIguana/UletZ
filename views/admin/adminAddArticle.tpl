<h2> Добавить Статью</h2>
<h2>Не отображать</h2>
<div>
    <input type="checkbox" id="newItemStatus" />
</div>
<h2>Страна</h2>
<div>

    <select id="newItemCatId">
        {foreach $countries as $itemCat}
            <option value="{$itemCat['id']}" {if  $smcountry == $itemCat['url_cat_name'] } selected{/if}>{$itemCat['cat_name']}
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
<h2>Краткое Описание</h2>
<div>
    <input type="edit" id="newItemTeaser" value=" " /> 
</div>
<h2>Текст</h2>
<div>
    <textarea id="newItemText"></textarea>
</div>
<h2>Тег</h2>
<div>
    <textarea id="newItemTeg"></textarea>
</div>
<h2>Сохранить</h2>
<div>
    <input type="button" value="Сохранить" onclick="addArticleJs();"/>
</div>