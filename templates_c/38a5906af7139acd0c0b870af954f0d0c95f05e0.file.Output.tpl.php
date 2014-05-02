<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 15:11:53
         compiled from ".\templates\Output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12757536364d1ae50d1-55355910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a5906af7139acd0c0b870af954f0d0c95f05e0' => 
    array (
      0 => '.\\templates\\Output.tpl',
      1 => 1399036274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12757536364d1ae50d1-55355910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536364d1be2f84_95144492',
  'variables' => 
  array (
    'name' => 0,
    'surname' => 0,
    'CF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536364d1be2f84_95144492')) {function content_536364d1be2f84_95144492($_smarty_tpl) {?><html>
<title>Codice Fiscale - Output</title>
<body>
<br>
<tr>
<td>Ciao <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</b>, il tuo codice fiscale &eacute;: <?php echo $_smarty_tpl->tpl_vars['CF']->value;?>
</td>
</tr>
</body>
</html><?php }} ?>
