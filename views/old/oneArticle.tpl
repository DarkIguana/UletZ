{* щаблон странцы одной экскурсии*}

 {foreach $rsArticle as $item name=article}
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <div id="name">
            <h1>{$item['name']}</h1>
        </div><br/>
       
        <div id="contentBlock">{$item['text']}</div><br/>
    </div>
  
    {/foreach}
<div id="contentBlock">    
 <a href="/{$smcountry}/articles/">
<div id="button_back"> Вернутьcя в раздел Статьи</div>													<!-- button back -->
</a>   
</div>
        
