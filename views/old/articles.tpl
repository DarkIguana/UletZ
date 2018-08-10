{* щаблон  странцы статей *}

{foreach $rsArticles as $item name=articles}
    <div style='padding: 0px 30px 40px 0px;'>
        <div id="imgHeaderArticles" >        
            <a href="/{$smcountry}/articles/item/{$item['id']}/">
                <img src="/images/articles/{$smcountry}/{$item['image']}" width="300" />
            </a>
        </div>
        <div id="descriptionHeaderArticles" >  
            <a href="/{$smcountry}/articles/item/{$item['id']}/">{$item['name']}</a>  <br/> 
            <a href="/{$smcountry}/articles/item/{$item['id']}/">{$item['teaser']}</a>
        </div>     
    </div>
    <div style="clear: both;"></div>   <!-- zaglushka dla div otstupa  -->
{/foreach}    
