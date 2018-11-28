<h1>  Редактирование Points  - {$smupCountry} </h1>
<table >
     <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Не отображать</th>
        <th>Изображение</th>
        <th>Изменить</th>
    </tr>
                     {foreach $rsPointsHead as $item name=products}
     <tr>
          <td>{$item['id']}</td>
          <td>{$item['name']}</td> 
           <td>
              <input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0 } checked="checked"{/if} />
          </td>
          <td> {if $item['image']}
                  <img src="/images/points/{$smcountry}/{$item['image']}" width="100"/>
              {/if}</td>
          <td>
                       <form method="LINK" action="/{$smcountry}/admin/editpoint/{$item['id']}/">
                                    <input type="submit" value="Изменить">
                  </form>
          </td> 
     </tr>  
                    {/foreach}
          
</table>
                       
