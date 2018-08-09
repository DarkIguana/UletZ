 {* menu block *}
        
<div id="menuBlock">
      
        <div id="countryMenu">
                 {foreach $countries as $item }
                     <a href="/{$item['url_cat_name']}/admin/"> 
                            {$item['cat_name']}
                     </a><br/>
                {/foreach} 
        </div>
        
        <div id="subMenu">
                    <a href="/{$smcountry}/admin/"> Главная</a></br>
                   <!-- <a href="/{$smcountry}/admin/"> Добавить категорию</a></br> -->
                    <a href="/{$smcountry}/admin/excursions/"> Редактировать Экскурсии</a> </br>
                  <!--<a href="/{$smcountry}/admin/addexcursion/"> Добавить Экскурсию</a> </br> -->
                    <a href="/{$smcountry}/admin/articles/"> Редактировать Статьи</a> </br>
                  <!-- <a href="/{$smcountry}/admin/addarticle/"> Добавить Статью</a> </br> -->
        </div>      
</div>

