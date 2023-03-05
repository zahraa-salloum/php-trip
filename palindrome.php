
<?php 

function Palindrome($string) {
    $i = 0;
    $j = strlen($string) - 1;
    $palindrome = 0;
  
    while($i > $j){
      if ($string[$j] != $string[$i]){
        $palindrome = 1;
        break;
      }
      $i++;
      $j--;
    }
  
    if ($palindrome == 0){
      echo $string." is a Palindrome string.\n";
    } else {
      echo $string." is not a Palindrome string.\n";
    }
  }
  Palindrome($_GET['string']);

?>