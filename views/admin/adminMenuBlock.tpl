 {* menu block *}
        
<div id="menuBlock">
      
        <div id="countryMenu">
                 {foreach $countries as $item }
                     <a href="/{$item['url_cat_name']}/admin/" 
                                  {if $item['url_cat_name'] == $smcountry } id="selectMenu"{/if}  > 
                            {$item['cat_name']}
                                                    
                     </a><br/>
                {/foreach} 
        </div>
        
               <a href="/{$smcountry}/admin/"> Добавить</a></br> 
                     <p>  </p>
               <p> Редактировать </p>
        
        <div id="subMenu">
                    
                 
                    {foreach $smSubMenu as $item }
                            
                                      <a href="/{$smcountry}/admin/{$item['url_cat_name']}/" 
 {if $item['cat_name'] == $smcountry } id="selectMenu"{/if}  > 
                                       {$item['cat_name']}
                                                
                                  </a><br/>
                    {/foreach} 
        </div>  
        
</div>
