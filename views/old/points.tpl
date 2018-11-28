{* щаблон главной странцы*}

<div class="excursionsTwoList">
    {foreach $rsPoints as $item name=points}
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/{$smcountry}/points/the-{$item['name_url']}/">{$item['name']}</a> </h2>
            </div>
            <p>{$item['description_short']} <a href="/{$smcountry}/points/the-{$item['name_url']}/" class="hrefstandart">подробнее...</a> </p>

            <a href="/{$smcountry}/points/the-{$item['name_url']}/" class="buttonAndImage">
                
                            <div class="fpimg">
                                <img src="/images/points/{$smcountry}/{$item['image']}" width="100%"/>
                            </div>
                        
            </a>
        </div>
        {if $smarty.foreach.excursion.iteration mod 2==0}
        </div>
      

        <div class="excursionsTwoList">
        {/if} 
    {/foreach}

</div>
   