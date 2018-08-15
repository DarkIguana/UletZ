{* щаблон главной странцы*}

<div class="excursionsTwoList">
{foreach $rsExcursions as $item name=excursion}
    <div style='
        display: flex;
        flex-direction: column;
         
         margin: 1%;
         width: 48%;'>
        
        
        <h2 >    <a href="/{$smcountry}/excursions/item/{$item['id']}/">{$item['name']}</a> </h2>
        
            <div id="shortTxt">{$item['description_short']}</div><br/>
        
            
            <!-- button Podrobney and Price -->		
         <a href="/{$smcountry}/excursions/item/{$item['id']}/">
            <table class="button_podrobno" >
                <tr>
                    <td class="button_podrobno_price" >
                        <table class="button_podrobno_price_inner">
                            <tr>
                                <td style="padding: 10px 05px;"> <strong>Цена:</strong> {$item['price']}&nbsp;бат</td>
                            </tr>
                        </table>
                    </td>
                    <td class="button_podrobno_podrobno_inner">Подрoбнee</td> 					
                </tr>
                <tr>
                    <td colspan="2">
                        <!-- button Podrobney and Price -->
            <div class="fpimg">
                           <img src="/images/excursions/{$smcountry}/{$item['image']}" width="100%"/>
           </div>
                    </td>
                </tr>
            </table>		
            
            </a>
   
    </div>
    {if $smarty.foreach.excursion.iteration mod 2==0}
        </div>
        
        <div style="clear:both;">   </div>
        
        <div class="excursionsTwoList">
        {/if} 
    {/foreach}
     
    </div>
     
