<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text ='This is a Sample Text.';
if (preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else {
    echo "tidak ada huruf kecil!";
}

$pattern = '/[0-9]/'; //cocokkan satu atau lebih digit
$text ='There are 123 apples.';
if (preg_match($pattern, $text, $matches)){
    echo "<br>";
    echo "Cocokkan: ". $matches[0];
} else {
    echo "tidak ada yang cocok";
    
}

$pattern ='/apple/';
$replacement = 'banana';
echo "<br>";
$text ='I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; //Output: "I like banana pie."

$patern ='/go*d/'; //Cocokkan "god", "good", "goooood", dll
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)){
    
    echo "Cocokkan: ". $matches[0];
    
}else{
    echo "Tidak ada yang cocok!";
}
?>