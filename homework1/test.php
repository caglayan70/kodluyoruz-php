<?php


function test($number){
    
    if($number==null){
       echo "lütfen bir sayı giriniz.";
    }else{
        if($number%3==0){
            echo "Girdiğiniz sayı 3'e bölünebilir.";
        }else{
            while (true){
                $number++;
                if($number%3==0){
                    echo "Girdiğiniz sayı 3'e bölünmez."."Bölünebilecek ilk sayı"." ".$number."'dır.";
                    break;
                }
            }
            
        }
    }
    
}
$number=$_POST['number1'];
test($number);
?>