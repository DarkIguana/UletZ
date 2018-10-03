{* menu block *}
<div class="menuBlock">
    <ul class="countryMenu menu"> 
        {foreach $countries as $item }
            <li><a href="/{$item['url_cat_name']}/admin/" 
                   {if $item['url_cat_name'] == $smcountry } id="countryMenuActive"
                   {else} id="unSelectMenu"
                   {/if}> 
                    {$item['cat_name']}
                </a></li>
            {/foreach} 
    </ul>
    <h2> Редактировать </h2>
    <div class="subMenu menu">
        {foreach from=$smSubMenu item=item name=subMenu}
            <a href="/{$smcountry}/admin/{$item.url_cat_name}/"   > 
                {$item.cat_name}
            </a>
        {/foreach} 
    </div>  
     <a href="/{$smcountry}/admin/"> <div class="subMenuTwo">Points</div>  </a>
    <a href="/{$smcountry}/admin/"> <div class="addButton">  Добавить</div>  </a>
</div>
