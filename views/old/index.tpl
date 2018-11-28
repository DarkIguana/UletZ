{* щаблон главной странцы*}

<div class="subHead">    
    <div class="introBox collomnMinWidh collomnWidh">
        <h1>{$smIntro[1].name}</h1>
        <p>{$smIntro[1].description}</p>
    </div>
        <div class="phoneBox collomnWidh">
            <div class="phoneBoxImgPhone collomnMinWidh">
                <div><img src="/images/global/messengers-icons.png" class="iconmessengers"/></div>
                <div class="phoneNum"><h2> {$smIntro[0].description} </h2></div>
            </div>
         </div>
</div>

<div class="excursionsTwoList">
    {foreach $rsExcursions as $item name=excursion}
        <div class="excursionsListItemBox collomnMinWidh collomnWidh">
            <div>
            <h2 ><a href="/{$smcountry}/excursions/to-{$item['name_url']}/">{$item['name']}</a> </h2>
            </div>
            <p>{$item['description_short']}</p>

            <a href="/{$smcountry}/excursions/to-{$item['name_url']}/" class="buttonAndImage">
                <table class="button_podrobno" >
                  <tr>
                        <td colspan="2">
                                <img src="/images/excursions/{$smcountry}/{$item['image']}" width="100%"/>
                         </td>
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
