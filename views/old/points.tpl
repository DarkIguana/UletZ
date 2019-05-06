{* щаблон странцы Достопримечательности*}
    <h1>Достопримечательности</h1>  
     {foreach $rsPoints as $item name=points}
    <div class="clearfix">
        <div id="imgHeaderArticles" >        
            <a href="/{$smcountry}/points/the-{$item['name_url']}/">
                <img src="/images/points/{$smcountry}/{$item['image']}" class="imgConteinerArticleHead"/>
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/{$smcountry}/points/the-{$item['name_url']}/">
                <h2>{$item['name']} </h2>
                <p>{$item['description_short']}  <span class="hrefstandart">&nbsp;Читать&nbsp;далее...</span></p>
            </a>
        </div>     
    </div>
    {/foreach}    
