{* щаблон странцы одной экскурсии*}

 {foreach $rsExcursion as $item name=excursion}
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/excursion/{$item['id']}/">
            <img src="/images/excursions/{$smcountry}/{$item['image']}" width="200" />
        </a><br/>
        <div id="shortTxt">{$item['description_short']}</div><br/>
       
        <div id="shortTxt">{$item['description']}</div><br/>
    </div>
  
    {/foreach}
     
        
