<?php
/* Smarty version 4.3.0, created on 2023-02-03 08:41:26
  from 'C:\xampp\htdocs\smarty\Learning\template\Suryafileclone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dcbaa6a9f482_84750322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d16214ba607c17b0793097e94a1b61bbdfc5c04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\template\\Suryafileclone.tpl',
      1 => 1675410084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dcbaa6a9f482_84750322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mybooks' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Learning\\templates_c\\1d16214ba607c17b0793097e94a1b61bbdfc5c04_0.file.Suryafileclone.tpl.cache.php',
    'uid' => '1d16214ba607c17b0793097e94a1b61bbdfc5c04',
    'call_name' => 'smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
$_smarty_tpl->compiled->nocache_hash = '10180666463dcbaa68cf4f7_73135854';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Learning</title>
</head>

<body>

    
        <div class="info">
        <li>User_Name: <?php echo $_smarty_tpl->tpl_vars['arr1']->value['name'];?>
</li>
        <li>Email Id: <?php echo $_smarty_tpl->tpl_vars['arr1']->value['email id'];?>
</li>
        <li>Mobile Numbers: <?php echo $_smarty_tpl->tpl_vars['arr1']->value['mobile number']['mn1'];?>
, <?php echo $_smarty_tpl->tpl_vars['arr1']->value['mobile number']['mn2'];?>
</li>
    </div>


        </br>
    <h2>Accessing the data of array in one go</h2></br>
    <div class="info"><?php echo json_encode($_smarty_tpl->tpl_vars['arr1']->value);?>
</div>


        </br>
    <h2>Accessing Array using indexing</h2></br>

    <div class="info">
        <li>User Name: <?php echo $_smarty_tpl->tpl_vars['arr2']->value[0];?>
</li>
        <li>Email Id: <?php echo $_smarty_tpl->tpl_vars['arr2']->value[1];?>
</li>
        <li>Phone Number 1: <?php echo $_smarty_tpl->tpl_vars['arr2']->value[2][0];?>
</li>
        <li>Phone Number 2: <?php echo $_smarty_tpl->tpl_vars['arr2']->value[2][1];?>
</li>
    </div>

    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/foo.conf', null, 0);
?>


    
    
    <h2>Functions in Smarty</h2>
        <div class="info">
        <p>Substring</p>

        
        <?php $_smarty_tpl->_assignInScope('foo', substr($_smarty_tpl->tpl_vars['name']->value,0,7));?>
        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <br>

        <h2>String length</h2>
        <?php $_smarty_tpl->_assignInScope('foo', strlen($_smarty_tpl->tpl_vars['name']->value));?>         <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <br>

    </div>

    <h2>Counter Variable</h2>

    
    <div class="info">
        <?php echo smarty_function_counter(array('start'=>10,'skip'=>20),$_smarty_tpl);?>
</br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 </br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 </br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 </br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 </br>
    </div>

    <h2>We are now playing with funcitons</h2>

        

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mybooks', array(), false);?>


        <div class="info">
        <button onclick="p()">click me</button>
    </div>

    <h2>Variable Modifier</h2>
    <div class="info">
        <h3>Capitalization</h3>
        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['book1']->value);?>
</br>
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['book1']->value,true);?>
</br>
    </div>

    <h2>Lower Case</h2>
    <div class="info">
        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
        <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['book1']->value, 'UTF-8');?>

    </div>

    <h2>Printing the current time</h2>
    <div class="info">
        <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

    </div>

    <h2>UPPER</h2>
    <div class="info">
        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
        <?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['book1']->value ?? '', 'UTF-8');?>

    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

    </div>

    <h2>String Concatination</h2>
    <div class="info">
        <?php echo ($_smarty_tpl->tpl_vars['book1']->value).(" is my favourite book for operating system");?>

    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
        <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['book1']->value, $tmp);?>
</br>
        <?php echo mb_strlen((string) $_smarty_tpl->tpl_vars['book1']->value, 'UTF-8');?>
</br>
    </div>

    <h3>Count Words</h3>
    <div class="info">
        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
        <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['book1']->value, $tmp);?>
</br>
        <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['book1']->value, $tmp);?>
</br>
    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        <?php echo preg_match_all('/[^\s]/u',time(), $tmp);?>
</br>
        <?php echo mb_strlen((string) time(), 'UTF-8');?>
</br>
    </div>

    <h3>Count Paragraph</h3>
    <?php echo $_smarty_tpl->tpl_vars['passage']->value;?>

    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['passage']->value, $tmp)+1);?>
</br>
    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['passage']->value, $tmp)+1);?>
</br>

    <h3>Count Sentences</h3>
    <?php echo $_smarty_tpl->tpl_vars['passage']->value;?>

    <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['passage']->value, $tmp);?>
</br>
    <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['passage']->value, $tmp);?>
</br>

    <h3>Count Paragraph</h3>
    <?php echo $_smarty_tpl->tpl_vars['passage']->value;?>

    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['passage']->value, $tmp)+1);?>
</br>
    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['passage']->value, $tmp)+1);?>
</br>

    <?php echo (($tmp = $_smarty_tpl->tpl_vars['passage']->value ?? null)===null||$tmp==='' ? "Not Available" ?? null : $tmp);?>
</br>
    <p>Employee Id: <?php echo (($tmp = $_smarty_tpl->tpl_vars['employeeID']->value ?? null)===null||$tmp==='' ? "Will update soon" ?? null : $tmp);?>
</p>

    <h3>Replace</h3>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['passage']->value,"deeksha","Deeksha");?>


    <h3>Escape</h3>
        <a herf="mailto: <?php echo $_smarty_tpl->tpl_vars['emailaddress']->value;?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['emailaddress']->value, 'mail');?>
</a>

    <h3>Spacify</h3>
    <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</br>
    <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['book1']->value);?>
</br>
    <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['book1']->value,"$"."$");?>
</br>

    
        <h3>Truncate</h3>
    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['passage']->value,100);?>
</br>

    <h3>Combining Modifiers</h3>
    <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', smarty_modifier_spacify(mb_strtoupper((string) $_smarty_tpl->tpl_vars['book2']->value ?? '', 'UTF-8'),"&&"), $tmp);?>
</br>

    <h3>Word Wrap</h3>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['passage']->value,100,"<br/>",true);?>
 
    <h1 style="Text-align:Center;">Built In Function</h1>
    <div class="info">
        <h3>Appending the element to the array</h3>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['arr1']) ? $_smarty_tpl->tpl_vars['arr1']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["address"] = "meerut";
$_smarty_tpl->_assignInScope('arr1', $_tmp_array);?>
        <p>Array1 has been updated</p>
        <?php echo json_encode($_smarty_tpl->tpl_vars['arr1']->value);?>
</br>

        <h3>Data has been replaced with the new value</h3>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['arr1']) ? $_smarty_tpl->tpl_vars['arr1']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["address"] = "Noida";
$_smarty_tpl->_assignInScope('arr1', $_tmp_array);?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['arr1']->value);?>


         

                <table>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

        
        <?php $_smarty_tpl->_assignInScope('name', 2);?>
        <?php if ($_smarty_tpl->tpl_vars['name']->value == 1) {?>
            Smarty is a good language.
        <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 2) {?>
            smarty is an average language.
        <?php } else { ?>
            smarty is a bad language.
        <?php }?>

    </div>

        <h3>For Loop</h3>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = $_smarty_tpl->tpl_vars['step']->value;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
    <?php }
}
?>

    <?php $_smarty_tpl->_assignInScope('start', 10);?>
    <?php $_smarty_tpl->_assignInScope('to', 5);?>
    <?php $_smarty_tpl->_assignInScope('step', -1);?>

    <h3>Forelse Loop</h3>
    <ul>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = $_smarty_tpl->tpl_vars['step']->value;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
        <?php }} else { ?>
            no iteration
        <?php }
?>
    </ul>


</body>

<?php echo '<script'; ?>
>
    function p() {
        alert("You have clicked the button");
    }
<?php echo '</script'; ?>
>

</html><?php }
/* smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854 */
if (!function_exists('smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854')) {
function smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

        <ul class="info">
            <li><?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['book2']->value;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['book3']->value;?>
</li>
        </ul>
    <?php
}}
/*/ smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854 */
}
