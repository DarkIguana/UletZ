<?php
/* Smarty version 3.1.32, created on 2018-08-06 05:22:07
  from '/home/lizard/www/site.local/views/admin/adminArticles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67bedfa7f140_27476105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df58bf68ce98b281bb968dbf813782edfa764734' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminArticles.tpl',
      1 => 1533525720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67bedfa7f140_27476105 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'item', false, NULL, 'articles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
     <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td> 
          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</td> 
          <td>
              <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?> />
          </td>
          <td> <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                  <img src="/images/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
/articles/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
              <?php }?></td>
          <td>
                       <form method="LINK" action="/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
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
