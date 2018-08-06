<?php
/* Smarty version 3.1.32, created on 2018-08-01 06:58:11
  from '/home/lizard/www/site.local/views/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b613de329fc09_67948396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d4b2202d054d6f596c48b75aa47ca1c360ff8e' => 
    array (
      0 => '/home/lizard/www/site.local/views/admin/admin.tpl',
      1 => 1533099487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b613de329fc09_67948396 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockNewCategory">
    Новая категория :
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    </br>
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0"> Главная категория
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMenu']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" > <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </br>
    <input type="button" onclick="newCategory();" value="Добавить категорию"/>
</div>
<?php }
}
