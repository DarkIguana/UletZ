{* щаблон  странцы servicees*}

{foreach $rsServices as $service}
    <div class="clearfix">
        <div id="descriptionHeaderArticles" >  
                <h2>{$service['name']} </h2>
                <p>{$service['description']}</p>         
        </div>     
    </div>
{/foreach}    
