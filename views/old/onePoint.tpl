{* щаблон странцы одного point*}

 {foreach $rsPoint as $item name=point}
    <div >
           <div class="contentBlock">{$item['description']}</div><br/>
    </div>
    
    {/foreach}
    <div class="contentBlock">
	<a href="/{$smcountry}/points/">
<div id="button_back"> Вернутьcя в раздел Points</div>													<!-- button back -->
</a>
</div>

     
        
