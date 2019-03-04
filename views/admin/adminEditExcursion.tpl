{* шаблон Редактирования одной экскурсии*}

{foreach $rsExcursion as $item name=excursion}
    <h3>Редактирование  экскурсии {$item['name']} - {$smupCountry} - ID {$item['id']}  </h3>

    <h4><label class="container">отображать
            <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] ==0 }checked="checked"{/if} />
            <span class="checkmark"></span>
        </label></h4>
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
            <img src="/images/excursions/{$smcountry}/{$item['image']}" width="400"/>
        {/if} </br>
        <form action="/{$smcountry}/admin/uploadexc/"  method="post" 
              enctype="multipart/form-data">
            <input type="file" name="filename">
            <input type="hidden" name="itemId" value="{$item['id']}">
            <input class="buttonstand" type="submit" value="загрузить"></br>

        </form>
    </div>


    <h4>URL name</h4>
    <div><input type="edit" class="longText" id="itemNameUrl_{$item['id']}" value="{$item['name_url']}" />  </div>
    <h4>Page title</h4>
    <div><input type="edit" class="longText" id="itemPageTitle_{$item['id']}" value="{$item['page_title']}" />  </div>
    <h4>Descriptoin Tag</h4>
    <div><input type="edit" class="longText" id="itemDescriptionTag_{$item['id']}" value="{$item['description_tag']}" />  </div>
    <h4>Keyword</h4>
    <div><input type="edit" class="longText" id="itemKeywordTag_{$item['id']}" value="{$item['keywords_tag']}" />  </div>
    <h4>Цена</h4>
    <div><input type="edit" class="longText" id="itemPrice_{$item['id']}" value="{$item['price']}" /></div>
    <h4>Название</h4>
    <div><input type="edit" class="longText" id="itemName_{$item['id']}" value="{$item['name']}" />  </div>
    <h4>Описание короткое</h4>
    <div>
        <textarea rows="5"  class="longText" type="edit" id="itemDescShort_{$item['id']}" />{$item['description_short']}
    </textarea>
</div>

<h4>Описание полное</h4>
<div><textarea class="ckeditor" id="itemDesc_{$item['id']}">{$item['description']}
    </textarea>
</div>

{/foreach} 
</br>
<h2>Загрузка изображений</h2>
<div class="uploadimg">

    <form action="/{$smcountry}/admin/uploadexcdescriptionimg/"  method="post" 
          enctype="multipart/form-data">
        <input type="file" name="filename">
        <input type="hidden" name="itemId" value="{$item['id']}">
        <input class="buttonstand"  type="submit" value="загрузить"></br>

    </form>
        </br>
     <a class="buttonstand" href="/browser/index.php" target="_blank"> посмотреть загруженные файлы</a>
</div>
<div>
    </br></br>
    <input class="save" type="button" value="Сохранить" onclick="updateExcursionJs('{$item['id']}');"/>
</div>
