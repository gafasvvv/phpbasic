<?php
/* Smarty version 3.1.33, created on 2019-03-16 16:28:45
  from '/Users/ryousuke/develop/phpbasic/chapter7/templates/smarty_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8d243d056312_90697798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8081418cbf0ed77896b02995dc2a7456ce88e83' => 
    array (
      0 => '/Users/ryousuke/develop/phpbasic/chapter7/templates/smarty_basic.tpl',
      1 => 1552753723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8d243d056312_90697798 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Smarty</title>
    </head>
    <body>
        <p><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    </body>
    </html><?php }
}
