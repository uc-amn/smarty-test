<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>select</p>
    {html_options name=box options=$sel output=$sel} <br>

    <p>checkboxes:</p>
    {html_checkboxes values=$check output=$check separator="<br>"} <br>

    <p>Radios:</p>
    {html_radios values=$radio output=$radio separator="<br>"}

    <p>lower case :</p>
    {$string1|lower} <br>
    {$string2|lower} <br>
    
    <p>replece:</p>
    {$string1|replace:"ucertify" :"uCertify"} <br>
    {$string2|replace:"ucertify" :"uCertify"}

    <p>Wraps:</p>
    {$string1|wordwrap:30} <br>
    {$string2|wordwrap:30}

    <p>merge:</p>
    {assign var=merge value="{$string1}{$string2}"}
    {$merge}

    <p>escape:</p>
    {$email|escape:'mail'}

    <p>Concat:</p>
    {$var1|cat:$var2}

    <p>table of 5:</p>
    {for $c=1 to 10}
    {math equation="5*$c"} <br>
    {/for}

    <p>counter:</p>
    {counter}
    <p>exmple of cycle:</p>
    <ul>
        <li class="{cycle values ="green,yellow" loop=1}">List </li>
    </ul>

    <p>check if the number is even or odd</p>
    <br>
   {if {$number%2} eq '0'}
   num is even<br>
   {else}
   num is odd <br>
   {/if}
   table:<br>
   {for $new=1 to 10}
   {math equation="$number*$new"}<br>
    {/for}

    <p>Print array in ul list:</p>
    <ul>
    {foreach $our_culture as $culture}
    <li>{print_r($culture)}</li>
    {/foreach}
    </ul>

    <!-- {foreach $data as $newdata}
    {print_r($newdata)}<br>
    {/foreach} -->
</body>
</html>