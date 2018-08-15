{* menu block *}


<div class="menuBlock">
    <div class="wrapper">
        <ul class="countryMenu"> 
            {foreach $countries as $item }
                <li><a href="/{$item['url_cat_name']}/" 
                       {if $item['url_cat_name'] == $smcountry } id="countryMenuActive"
                       {else} id="unSelectMenu"
                       {/if}> 
                        {$item['cat_name']}
                    </a></li>
                {/foreach} 
        </ul>

        <div class="subMenu">
            {foreach from=$smSubMenu item=item name=subMenu}
                <div>
                    <a href="/{$smcountry}/{$item.url_cat_name}/" 
                       > 
                        {$item.cat_name}
                    </a>
                </div>
            {/foreach} 
        </div>  
    </div>
</div>