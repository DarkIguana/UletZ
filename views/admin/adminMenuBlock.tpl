{* menu block *}
<form class="clearfix" action="/{$smcountry}/admin/updaterss/" >
     <input class="buttonRSS clearfix" type="submit" value="Обновить RSS">
</form>
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
    <h2 > <a href="/{$smcountry}/admin/" class="editButtonActive"> Редактировать</a> &nbsp; &nbsp; &nbsp; &nbsp;<a class="addButtonPassive" href="/{$smcountry}/admin/add/">  Добавить </a></h2>
    <div class="subMenu menu">
        {foreach from=$smSubMenu item=item name=subMenu}
            <a href="/{$smcountry}/admin/{$item.url_cat_name}/"   > 
                {$item.cat_name}
            </a>
        {/foreach} 
    </div>  
    {* <a href="/{$smcountry}/admin/points/"> <div class="subMenuTwo">Points</div>  </a> *}

</div>
