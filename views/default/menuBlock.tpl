        {* menu block *}
        
<div id="menuBlock">
        
        <div id="countryMenu">
                 {foreach $countries as $item }
                     <a href="/{$item['url_cat_name']}/" {if $item['url_cat_name'] == $smcountry } id="selectMenu"{/if}> 
                            {$item['cat_name']}
                     </a><br/>
                 {/foreach} 
                 
                 </div>
        
        <div id="subMenu">
                    
                 
                    {foreach $smSubMenu as $item }
                            
                                      <a href="/{$smcountry}/{$item['url_cat_name']}/" 
 {if $item['cat_name'] == $smcountry } id="selectMenu"{/if}  > 
                                       {$item['cat_name']}
                                                
                                  </a><br/>
                    {/foreach} 
        </div>  
        
</div>

