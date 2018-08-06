

<table >
    <caption> Редактирование Статей</caption>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Удалить</th>
        <th>Изображение</th>
        <th>Изменить</th>
    </tr>
                     {foreach $rsArticles as $item name=articles}
     <tr>
          <td>{$item['id']}</td>
          <td>{$item['name']}</td> 
          <td>{$item['cat_name']}</td> 
          <td>
              <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
          </td>
          <td> {if $item['image']}
                  <img src="/images/{$country}/articles/{$item['image']}" width="100"/>
              {/if}</td>
          <td>
                       <form method="LINK" action="/{$country}/admin/editarticle/{$item['id']}/">
                                    <input type="submit" value="Изменить">
                  </form>
          </td> 
     </tr>  
                    {/foreach}
          
</table>
                       
