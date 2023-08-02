<?php
/* Smarty version 4.3.1, created on 2023-08-02 10:36:31
  from 'C:\wamp64\www\smarty-test\Template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca31af2caec6_82116155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c735da9d2222905005fc5200429c6def50b3b10b' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-test\\Template\\index.tpl',
      1 => 1690972589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca31af2caec6_82116155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),2=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),3=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),5=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),6=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),7=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),8=>array('file'=>'C:\\wamp64\\www\\smarty-test\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>select</p>
    <?php echo smarty_function_html_options(array('name'=>'box','options'=>$_smarty_tpl->tpl_vars['sel']->value,'output'=>$_smarty_tpl->tpl_vars['sel']->value),$_smarty_tpl);?>
 <br>

    <p>checkboxes:</p>
    <?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['check']->value,'output'=>$_smarty_tpl->tpl_vars['check']->value,'separator'=>"<br>"),$_smarty_tpl);?>
 <br>

    <p>Radios:</p>
    <?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['radio']->value,'output'=>$_smarty_tpl->tpl_vars['radio']->value,'separator'=>"<br>"),$_smarty_tpl);?>


    <p>lower case :</p>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['string1']->value, 'UTF-8');?>
 <br>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['string2']->value, 'UTF-8');?>
 <br>
    
    <p>replece:</p>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string1']->value,"ucertify","uCertify");?>
 <br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string2']->value,"ucertify","uCertify");?>


    <p>Wraps:</p>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string1']->value,30,"\n",false);?>
 <br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string2']->value,30,"\n",false);?>


    <p>merge:</p>
    <?php $_smarty_tpl->_assignInScope('merge', ((string)$_smarty_tpl->tpl_vars['string1']->value).((string)$_smarty_tpl->tpl_vars['string2']->value));?>
    <?php echo $_smarty_tpl->tpl_vars['merge']->value;?>


    <p>escape:</p>
    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>


    <p>Concat:</p>
    <?php echo ($_smarty_tpl->tpl_vars['var1']->value).($_smarty_tpl->tpl_vars['var2']->value);?>


    <p>table of 5:</p>
    <?php
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['c']->step = 1;$_smarty_tpl->tpl_vars['c']->total = (int) ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0) {
for ($_smarty_tpl->tpl_vars['c']->value = 1, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++) {
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration === 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration === $_smarty_tpl->tpl_vars['c']->total;?>
    <?php echo smarty_function_math(array('equation'=>"5*".((string)$_smarty_tpl->tpl_vars['c']->value)),$_smarty_tpl);?>
 <br>
    <?php }
}
?>

    <p>counter:</p>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <p>exmple of cycle:</p>
    <ul>
        <li class="<?php echo smarty_function_cycle(array('values'=>"green,yellow",'loop'=>1),$_smarty_tpl);?>
">List </li>
    </ul>

    <p>check if the number is even or odd</p>
    <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['number']->value)."%2"),$_smarty_tpl);?>
<br>
   <?php ob_start();
echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['number']->value)."%2"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?>
   num is even<br>
   <?php } else { ?>
   num is odd <br>
   <?php }?>
   table:<br>
   <?php
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['new']->step = 1;$_smarty_tpl->tpl_vars['new']->total = (int) ceil(($_smarty_tpl->tpl_vars['new']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['new']->step));
if ($_smarty_tpl->tpl_vars['new']->total > 0) {
for ($_smarty_tpl->tpl_vars['new']->value = 1, $_smarty_tpl->tpl_vars['new']->iteration = 1;$_smarty_tpl->tpl_vars['new']->iteration <= $_smarty_tpl->tpl_vars['new']->total;$_smarty_tpl->tpl_vars['new']->value += $_smarty_tpl->tpl_vars['new']->step, $_smarty_tpl->tpl_vars['new']->iteration++) {
$_smarty_tpl->tpl_vars['new']->first = $_smarty_tpl->tpl_vars['new']->iteration === 1;$_smarty_tpl->tpl_vars['new']->last = $_smarty_tpl->tpl_vars['new']->iteration === $_smarty_tpl->tpl_vars['new']->total;?>
   <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['number']->value)."*".((string)$_smarty_tpl->tpl_vars['new']->value)),$_smarty_tpl);?>
<br>
    <?php }
}
?>

    <p>Print array in ul list:</p>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
?>
    <li><?php echo print_r($_smarty_tpl->tpl_vars['culture']->value);?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html><?php }
}
