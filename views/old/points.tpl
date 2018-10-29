{* щаблон главной странцы*}

<div class="excursionsTwoList">
    {foreach $rsPoints as $item name=points}
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/{$smcountry}/points/item/{$item['id']}/">{$item['name']}</a> </h2>
            </div>
            <p>{$item['description_short']}</p>

            <a href="/{$smcountry}/points/item/{$item['id']}/" class="buttonAndImage">
                <table class="button_podrobno">
                    <tr>
                        <td class="button_podrobno_price" >
                            <table class="button_podrobno_price_inner">
                                <tr>
                                    <td style="padding: 10px 05px;"> </td>
                                </tr>
                            </table>
                        </td>
                        <td class="button_podrobno_podrobno_inner">Подрoбнee</td> 					
                    </tr>
                    <tr>
                        <td colspan="2">

                            <div class="fpimg">
                                <img src="/images/points/{$smcountry}/{$item['image']}" width="100%"/>
                            </div>
                        </td>
                    </tr>
                </table>
            </a>
        </div>
        {if $smarty.foreach.excursion.iteration mod 2==0}
        </div>
      

        <div class="excursionsTwoList">
        {/if} 
    {/foreach}

</div>
   