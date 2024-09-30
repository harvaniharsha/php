<?php
$num=121;
$p=$num;
$revnum=0;
while($num!=0)
{
    $revnum=$revnum*10+$num%10;
    $num=($num/10);
}
if($revnum==$p)
{
    echo "$p is palindrome number";
}
else
{
    echo "$p is not palindrome number";
}
?>