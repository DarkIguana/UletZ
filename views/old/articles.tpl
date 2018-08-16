{* щаблон  странцы статей *}

{foreach $rsArticles as $item name=articles}
    <div class="clearfix">
        <div id="imgHeaderArticles" >        
            <a href="/{$smcountry}/articles/item/{$item['id']}/">
                <img src="/images/articles/{$smcountry}/{$item['image']}" width="300" />
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/{$smcountry}/articles/item/{$item['id']}/">
                <h2>{$item['name']} </h2>
                <p>{$item['teaser']}</p>
            </a>
        </div>     
    </div>
    {/foreach}    
