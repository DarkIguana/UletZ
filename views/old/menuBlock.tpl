{* menu block *}

<div style="clear: both; padding-top: 20px;"></div>   <!-- zaglushka dl'a div otstupa  -->      
<div id="menuBlock">

    <div id="countryMenu">
        <div style="text-align: center">    
            {foreach $countries as $item }

                <a href="/{$item['url_cat_name']}/" 
                   {if $item['url_cat_name'] == $smcountry } id="selectMenu"
                   {else} id="unSelectMenu"
                   {/if}> 
                    {$item['cat_name']}
                </a>
            {/foreach} 
        </div>
    </div>

    <div id="subMenu">
        {foreach from=$smSubMenu item=item name=subMenu}
            <a href="/{$smcountry}/{$item.url_cat_name}/" 
               id="subMenuButton{$smarty.foreach.subMenu.iteration}"> 
                {$item.cat_name}
            </a>
        {/foreach} 
    </div>  

</div>
<div style="clear: both; padding-bottom: 40px;"></div>   <!-- zaglushka dl'a div otstupa  -->



