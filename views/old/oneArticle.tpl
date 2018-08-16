{* щаблон странцы одной экскурсии*}

{foreach $rsArticle as $item name=article}
    <div>
        <h1>{$item['name']}</h1>
        <p>{$item['text']}</p>
    </div>

{/foreach}
<div id="contentBlock111">    
    <a href="/{$smcountry}/articles/">
        <div id="button_back"> Вернутьcя в раздел Статьи</div>													<!-- button back -->
    </a>   
</div>


