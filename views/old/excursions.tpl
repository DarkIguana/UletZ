{* щаблон главной странцы*}

<div class="excursionsTwoList">
    {foreach $rsExcursions as $item name=excursion}
        <div class="excursionsListItemBox">

            <h2 ><a href="/{$smcountry}/excursions/item/{$item['id']}/">{$item['name']}</a> </h2>

            <p>{$item['description_short']}</p>

            <a href="/{$smcountry}/excursions/item/{$item['id']}/" class="buttonAndImage">
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

