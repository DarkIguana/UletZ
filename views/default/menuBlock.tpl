        {* menu block *}
        
<div id="menuBlock">
        
        <div id="countryMenu">
                 {foreach $countries as $item }
                     <a href="/{$item['url_cat_name']}/"> 
                            {$item['cat_name']}
                     </a><br/>
                 {/foreach} 
                 
                 </div>
                
        <div id="subMenu">
                <a href="/{$smcountry}/excursions/">  Экскурсии </a><br/>
                <a href="/{$smcountry}/articles/"> Статьи </a><br/>
        </div>
    
</div>
