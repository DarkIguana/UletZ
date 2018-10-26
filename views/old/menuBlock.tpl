{* menu block *}

<nav>
<!-- <div style="margin: 20px;"> -->
    <div class="menuToggle" style="position: static; display: inline;">
       <div style="margin: 20px;"> <div class="menu-icon" data-behaviour="toggle-menu-icon"><span class="menu-icon__bar"></div></div>
       <h1 class="mobileMenuHeader">Меню</h1></div><a href="/"><img src="/images/global/logo.png" class="mobLogoImg" /></a>


    <div class="menuBlock">
        <ul class="countryMenu menu"> 
            {foreach $countries as $item }
                <li><a href="/{$item['url_cat_name']}/" 
                       {if $item['url_cat_name'] == $smcountry } id="countryMenuActive"
                       {else} id="unSelectMenu"
                       {/if}> 
                        {$item['cat_name']}
                    </a></li>
                {/foreach} 
        </ul>
        <div class="subMenu menu">
            {foreach from=$smSubMenu item=item name=subMenu}                
                    <a href="/{$smcountry}/{$item.url_cat_name}/">                         
                        {$item.cat_name}                    
                    </a>                
            {/foreach} 
        </div>  
    </div>
        
         <div class="menuBlockMob">
        <ul class="countryMenu menu"> 
            {foreach $countries as $country }
                <li><a href="/{$country['url_cat_name']}/" 
                       {if $country['url_cat_name'] == $smcountry } id="countryMenuActive"
                       {else} id="unSelectMenu"
                       {/if}> 
                        {$country['cat_name']}
                    </a></li>
                        <div class="subMenu menu">
                                 {foreach from=$smSubMenu item=item name=subMenu}                
                                        <a href="/{$country['url_cat_name']}/{$item.url_cat_name}/">                         
                                             {$item.cat_name}                    
                                        </a>                
                                 {/foreach} 
                         </div>  
            {/foreach} 
        </ul>
        
    </div>
</nav>