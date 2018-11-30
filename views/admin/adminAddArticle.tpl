<h3> Добавить Статью</h3>
<h4><label class="container">отображать
        <input type="checkbox" id="newItemStatus" />
        <span class="checkmark"></span>
    </label></h4>
<h4>Страна
    <select class="rightbox" id="newItemCatId">
        {foreach $countries as $itemCat}
            <option value="{$itemCat['id']}" {if  $smcountry == $itemCat['url_cat_name'] } selected{/if}>{$itemCat['cat_name']}
            {/foreach} 
    </select>
</h4> 
<h4>URL name</h4>
<div><input class="longText" type="edit" id="newItemNameUrl"/>  </div>
<small>только маленькие буквы, английские, без пробелов, можно исрользовать "-"</small>
<h4>Page title</h4>
<div><input type="edit" class="longText" id="newItemPageTitle"/>  </div>
<h4>Descriptoin Tag</h4>
<div><input class="longText" type="edit" id="newItemDescriptionTag"/>  </div>
<h4>Keyword</h4>
<div><input class="longText" type="edit" id="newItemKeywordTag"/>  </div>
<h4>Тэг для облака</h4>
<div><input class="longText" type="edit" id="newItemTeg"/>  </div>
<h4>Название</h4>
<div>
    <input class="longText" type="edit" id="newItemName" value=" " />   
</div>
<h4>Краткое Описание</h4>
<div>
    <textarea class="longText"  id="newItemTeaser"></textarea> 
</div>
<h4>Текст</h4>
<div>
    <textarea class="longText" id="newItemText"></textarea>
</div>
<div>
    <input  class="save"  type="button" value="Сохранить" onclick="addArticleJs();"/>
</div>