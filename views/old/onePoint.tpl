{* щаблон странцы одного point*}
test
 {foreach $rsPoint as $item name=point}
    <div >
           <div class="contentBlock">{$item['description']}</div><br/>
    </div>
    
    {/foreach}
    <div class="contentBlock">
	<h3>Заказать экскурсию:</h3>
		<p>
			Viber, WhatsApp: +7 916 678-73-27 <br>
			e-mail: <a href="mailto:annagross.com@gmail.com" > annagross.com@gmail.com </a>
		</p>
<a href="/{$smcountry}/points/">
<div id="button_back"> Вернутьcя в раздел Points</div>													<!-- button back -->
</a>
</div>
     
        
