{* щаблон  странцы статей *}
<h1>Статьи</h1>
{foreach $rsArticles as $item name=articles}
    <div class="clearfix">
        <div id="imgHeaderArticles" >        
            <a href="/{$smcountry}/articles/about-{$item['name_url']}/">
                <img src="/images/articles/{$smcountry}/{$item['image']}" class="imgConteinerArticleHead" />
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/{$smcountry}/articles/about-{$item['name_url']}/">
                <h2>{$item['name']} </h2>
                <p>{$item['teaser']} <span class="hrefstandart">&nbsp;Читать&nbsp;далее...</span></p>
            </a>
        </div>     
    </div>
    {/foreach}    
