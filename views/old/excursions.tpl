{* шаблон главной странцы*}
<div class="excursionsTwoList">
    {foreach $rsExcursions as $item name=excursion}
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/{$smcountry}/excursions/to-{$item['name_url']}/">{$item['name']}</a> </h2>
            </div>
            <p>{$item['description_short']} <a href="/{$smcountry}/excursions/to-{$item['name_url']}/" class="hrefstandart">Узнать подробнее...</a></p>

            <a href="/{$smcountry}/excursions/to-{$item['name_url']}/" class="buttonAndImage">
                <table class="button_podrobno" >
                    <tr valign="bottom">
                        <td colspan="2" ><img src="/images/excursions/{$smcountry}/{$item['image']}" width="100%"/></td>
                    </tr>
                    <tr>
                        <td class="button_podrobno_price" >
                             <strong>Цена:</strong> от {$item['price']}&nbsp;бат
                        </td>
                        <td class="button_podrobno_podrobno_inner"><strong>Подрoбнee</strong></td> 					
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
    <p class="toPoints"><a href="/{$smcountry}/points/" class="hrefstandart"> Другие экскурсии и список достопримечателтностей...</a> </p>


