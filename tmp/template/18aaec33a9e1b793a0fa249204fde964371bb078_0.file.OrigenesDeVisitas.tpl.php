<?php /* Smarty version 3.1.27, created on 2018-01-18 23:16:23
         compiled from "Z:\VICERCAVI\IIAP\Proyectos\Github\framework_mvc_php_multidioma\modules\visita\views\index\OrigenesDeVisitas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7991488075a6146e73e1061_21364877%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18aaec33a9e1b793a0fa249204fde964371bb078' => 
    array (
      0 => 'Z:\\VICERCAVI\\IIAP\\Proyectos\\Github\\framework_mvc_php_multidioma\\modules\\visita\\views\\index\\OrigenesDeVisitas.tpl',
      1 => 1466606606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7991488075a6146e73e1061_21364877',
  'variables' => 
  array (
    'OrigenesDeVisitas' => 0,
    'b' => 0,
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6146e745cda8_12039677',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6146e745cda8_12039677')) {
function content_5a6146e745cda8_12039677 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7991488075a6146e73e1061_21364877';
?>
<?php echo '<script'; ?>
 type="text/javascript">
    var cat_OrigenesDeVisitas = [
    <?php
$_from = $_smarty_tpl->tpl_vars['OrigenesDeVisitas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['b']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$foreach_b_Sav = $_smarty_tpl->tpl_vars['b'];
?>'<?php echo $_smarty_tpl->tpl_vars['b']->value['descripcion'];?>
',<?php
$_smarty_tpl->tpl_vars['b'] = $foreach_b_Sav;
}
?>
    ];
    var dat_OrigenesDeVisitas = [
    <?php
$_from = $_smarty_tpl->tpl_vars['OrigenesDeVisitas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['b']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$foreach_b_Sav = $_smarty_tpl->tpl_vars['b'];
echo $_smarty_tpl->tpl_vars['b']->value['N'];?>
,<?php
$_smarty_tpl->tpl_vars['b'] = $foreach_b_Sav;
}
?>
    ];
    var titulo = '<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
';
    fun_OrigenesDeVisitas(cat_OrigenesDeVisitas, dat_OrigenesDeVisitas, titulo);
<?php echo '</script'; ?>
><?php }
}
?>