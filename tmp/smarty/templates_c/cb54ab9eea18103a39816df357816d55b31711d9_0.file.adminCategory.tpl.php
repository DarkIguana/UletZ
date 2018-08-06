<?php
/* Smarty version 3.1.32, created on 2018-07-30 18:53:01
  from '/home/lizard/www/site.local/views/admin/adminCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5f426d44aa48_65227014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb54ab9eea18103a39816df357816d55b31711d9' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/adminCategory.tpl',
      1 => 1532969572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5f426d44aa48_65227014 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Категории </h2>
<table >
    <tr>
        <th>№</th>
        <th>ID</th>
        <th>Название</th>
        <th>Родительская категория</th>
        <th>Действие</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'item', false, NULL, 'Menu', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_Menu']->value['iteration']++;
?>
        <tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_Menu']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_Menu']->value['iteration'] : null);?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td> 
            <td>
                <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />               
            </td> 
            <td>
                <select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <option value="0">Главная Категория
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainMenu']->value, 'mainItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == $_smarty_tpl->tpl_vars['mainItem']->value['id']) {?> selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
             </td> 
             <td>
                 <input type="button" value="Сохранить" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
             </td> 
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
