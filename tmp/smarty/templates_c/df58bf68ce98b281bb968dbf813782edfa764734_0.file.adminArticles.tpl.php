<?php
/* Smarty version 3.1.32, created on 2018-11-23 04:46:26
  from '/home/lizard/www/site.local/views/admin/adminArticles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf77812248325_71468346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df58bf68ce98b281bb968dbf813782edfa764734' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminArticles.tpl',
      1 => 1542944781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf77812248325_71468346 (Smarty_Internal_Template $_smarty_tpl) {
?><h1> Редактирование Статей - <?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
 </h1>
<table >
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Не отображать</th>
        <th>Изображение</th>
        <th>Изменить</th>
    </tr>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsHeadArticles']->value, 'item', false, NULL, 'articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
     <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td> 
         
          <td>
              <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
          </td>
          <td> <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                  <img src="/images/articles/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
              <?php }?></td>
          <td>
                       <form method="LINK" action="/<?php echo $_smarty_tpl->tpl_vars['smcountry']->value;?>
/admin/editarticle/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                                    <input type="submit" value="Изменить">
                  </form>
          </td> 
     </tr>  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
</table>
                       
<?php }
}
