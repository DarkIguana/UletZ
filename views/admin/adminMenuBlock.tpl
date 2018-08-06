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
                    <a href="/{$country}/admin/"> Главная</a></br>
                    <a href="/{$country}/admin/"> Добавить категорию</a></br>
                    <a href="/{$country}/admin/excursions/"> Редактировать Экскурсии</a> </br>
                    <a href="/{$country}/admin/addexcursion/"> Добавить Экскурсию</a> </br>
                    <a href="/{$country}/admin/articles/"> Редактировать Статьи</a> </br>
                    <a href="/{$country}/admin/addarticle/"> Добавить Статью</a> </br>
        </div>      
</div>

