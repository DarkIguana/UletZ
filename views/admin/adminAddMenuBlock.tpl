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
    <h2 > <a href="/{$smcountry}/admin/" class="editButtonPassive"> Редактировать</a> &nbsp; &nbsp; &nbsp; &nbsp;<a class="addButtonActive" href="/{$smcountry}/admin/add/">  Добавить </a></h2>

    {* <a href="/{$smcountry}/admin/points/"> <div class="subMenuTwo">Points</div>  </a> *}

</div>
