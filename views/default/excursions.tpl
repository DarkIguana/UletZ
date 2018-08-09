{* щаблон главной странцы*}

{foreach $rsExcursions as $item name=excursion}
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        
        
            <a href="/{$smcountry}/excursions/item/{$item['id']}/">{$item['name']}</a>
        
            <div id="shortTxt">{$item['description_short']}</div><br/>
        
            <div id="price">{$item['price']}</div><br/>
        
            <a href="/{$smcountry}/excursions/item/{$item['id']}/">
                <img src="/images/excursions/{$smcountry}/{$item['image']}" width="200" />
            </a><br/>
   
    </div>
    {if $smarty.foreach.excursion.iteration mod 3==0}
        <div style="clear:both;">   </div>
        {/if} 
    {/foreach}
     
     
