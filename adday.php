<?php
function add_ay($string){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $consonants = '';
    $i = 0;
    while ($i < strlen($string) && !in_array($string[$i], $vowels)){
        $consonants .= $string[$i];
        $i++;
    }
    if ($i == 0) {
        $reversed_string = $string . 'ay';
    } else {
        $reversed_string = substr($string, $i) . $consonants . 'ay';
    }
    return $reversed_string;
}
    
$response["consonant"]=add_ay($_POST['string']) ;
echo json_encode($response);
?>