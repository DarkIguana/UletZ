{* щаблон странцы одной экскурсии*}
<div class="wrapperArticle">
{foreach $rsArticle as $item name=article}
    <div>
        <h1 class="articleHeader">{$item['name']}</h1>
        <p>{$item['text']}</p>
    </div>

{/foreach}
      <a href="/{$smcountry}/articles/">
        <div id="button_back"> Вернутьcя в раздел Статьи</div>													<!-- button back -->
    </a>   
</div>