{* щаблон  странцы статей *}

{foreach $rsArticles as $item name=articles}
    <div style='padding: 0px 30px 40px 0px;'>
                
        <a href="/{$country}/articles/item/{$item['id']}/">
                                                        <img src="/images/articles/{$item['image']}" width="300" />
        </a>
        
        <a href="/{$country}/articles/item/{$item['id']}/">{$item['name']}</a>
        <a href="/{$country}/articles/item/{$item['id']}/">{$item['teaser']}</a>
           <br/>      
    </div>
 {/foreach}    
