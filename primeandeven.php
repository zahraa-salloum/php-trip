<?php

$year = $_POST['year'];
$age = 2023 - $year;
function isPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
   function isEven($n){
    if($n % 2 ==0 )
        {
            return 0;
        }
        return 1;
   }
$prime = isPrime($age);
$even = isEven($age);
if ($prime == 1 & $even == 0)
echo 'Your age is prime and even.....'."\n";
else
echo 'Your age is not prime or not even......'."\n";
?>