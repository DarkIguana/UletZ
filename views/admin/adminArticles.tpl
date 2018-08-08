

<table >
    <caption> Редактирование Статей {$smcountry} </caption>
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
         
          <td>
              <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
          </td>
          <td> {if $item['image']}
                  <img src="/images/articles/{$smcountry}/{$item['image']}" width="100"/>
              {/if}</td>
          <td>
                       <form method="LINK" action="/{$smcountry}/admin/editarticle/{$item['id']}/">
                                    <input type="submit" value="Изменить">
                  </form>
          </td> 
     </tr>  
                    {/foreach}
          
</table>
                       
