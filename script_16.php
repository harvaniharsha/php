<?php
$str="Hello i am harsha...;";
$vowels=array("a","e","i","o","u");
$count=0;
for(i=0;$i<strlen($str);$i++)
{
    if(in_array(strtolower($str[$i]),$vowels))
    {
        $count++;
    }
}
echo "number of vowels in $str is: $count";
?>