{* щаблон  странцы статей *}

{foreach $rsArticles as $item name=articles}
    <div style='padding: 0px 30px 40px 0px;'>
                
        <a href="/{$smcountry}/articles/item/{$item['id']}/">
                                                        <img src="/images/articles/{$smcountry}/{$item['image']}" width="300" />
        </a>
        
        <a href="/{$smcountry}/articles/item/{$item['id']}/">{$item['name']}</a>
        <a href="/{$smcountry}/articles/item/{$item['id']}/">{$item['teaser']}</a>
           <br/>      
    </div>
 {/foreach}    
