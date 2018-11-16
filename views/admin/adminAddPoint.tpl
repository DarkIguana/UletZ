<h1> Добавить новую Point</h1>
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
        <div><input type="edit" id="itemNameUrl_{$item['id']}" value="{$item['name_url']}" />  </div>
<h1>Descriptoin Tag</h1>
        <div><input type="edit" id="itemDescriptionTag_{$item['id']}" value="{$item['description_tag']}" />  </div>
<h1>Keyword</h1>
        <div><input type="edit" id="itemKeywordTag_{$item['id']}" value="{$item['keyword_tag']}" />  </div>
<h2>Название</h2>
<div>
    <input type="edit" id="newItemName" value=" " />   
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
    <input type="button" value="Сохранить" onclick="addPointJs();"/>
</div>



