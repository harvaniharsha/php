<?php
$num=['num'];
if(is_numeric($num) && $num>0)
{
    $isprime=true;
    if($num<=1)
    {
        $isprime=false;
    }
    else{
        for($i=2;$i<=sqrt($num);$i++)
        {
            if($num % $i==0)
            {
                $isprime=false;
                break;
            }
        }
    }
    if($isprime)
    {
        echo "$num is prime";
    }
    else
    {
        echo "$num is not prime";
    }
}


?>