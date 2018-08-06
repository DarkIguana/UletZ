{* щаблон странцы одной экскурсии*}

 {foreach $rsArticle as $item name=article}
    <div style='float:left; padding: 0px 30px 40px 0px;'>
        <a href="/article/{$item['id']}/">
            <img src="/images/articles/{$item['image']}" width="200" />
        </a><br/>
        <div id="shortTxt">{$item['name']}</div><br/>
       
        <div id="shortTxt">{$item['text']}</div><br/>
    </div>
  
    {/foreach}
     
        
