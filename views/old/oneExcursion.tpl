{* щаблон странцы одной экскурсии*}

 {foreach $rsExcursion as $item name=excursion}
    <div >
          <div id="name">
            <h1>{$item['name']}</h1>
        </div><br/>
        
        <div class="contentBlock">{$item['description']}</div><br/>
    </div>
    
    {/foreach}
    <div class="contentBlock">
	<h3>Заказать экскурсию:</h3>
		<p>
			Viber, WhatsApp: +7 916 678-73-27 <br>
			e-mail: <a href="mailto:annagross.com@gmail.com" > annagross.com@gmail.com </a>
		</p>
<a href="/{$smcountry}/excursions/">
<div id="button_back"> Вернутьcя в раздел Экскурсии</div>													<!-- button back -->
</a>
</div>
     
        
