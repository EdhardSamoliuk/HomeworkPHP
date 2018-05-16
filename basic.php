<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php 
    //Main Tasks

    //Task 1
    echo 'Task 1 <br>';
    $text1 = 'Hello';
    $text2 = 'World';
    echo $text1.' '.$text2; // або пробіл в змінних після Hello або перед World

    //Task 2
    echo '<br><br> Task 2 <br>';
    $var = 'hello';
    echo $var[0],$var[1],$var[strlen($var)-1];
    
    //Task3
    echo '<br><br> Task 3 <br>';
    $a = 0;
    echo ($a>0&&$a<5)?'Вірно':'Невірно'; // умова?true:false
    
    //Task 4
    echo '<br><br> Task 4 <br>';
    $min = 59;
    if($min<0||$min>59){ //менше 0 або більше 59
        echo '$min повинна бути в межах від 0 до 59';
    }else if($min<15){
        echo 'перша';
    }else if($min<30&&$min>=15){
        echo 'друга';
    }else if($min<45&&$min>=30){
        echo 'третя';
    }else if($min<60&&$min>=45){
        echo 'четверта';
    };
    
    //Task 5
    echo '<br><br> Task 5 <br>';
    $year = 2005;
    if(($year%4==0&&$year%100!=0)||$year%400==0){
        echo 'Високосний';
    }else{
        echo 'Не є високосним';
    };
    
    //Task 6
    echo '<br><br> Task 6 <br>';
    $str = '11111111';
    //if(strlen($str)%2==0){ //перевірка чи кількість цифр парна // можна забрати
        for($i=0;$i<strlen($str)/2;$i++){ //для більшої універсальності
            $sum1+=$str[$i];//сумма першої половини
            $sum2+=$str[strlen($str)-($i+1)];  //сумма другої половини  
        }
        echo $sum1==$sum2?'так':'ні';
    //}else{
    //    echo 'Кількість цифр повинна бути парною';
    //};
    
    //Bonus Task
    echo '<br><br> Bonus Task <br>';
    //$string1 = 'null'; то просто строка 'NULL'
    //$string1 = null; тоді $string1='';
    $string1 = 'AD'; 
    $string2 = 'BC';
    $pattern = "/^[A-Z]+$/";//одна або більше латинська буква
    $string1 =  strtoupper($string1);
    $string2 =  strtoupper($string2);
    $string1 = preg_match_all($pattern,$string1)?$string1:'';
    $string2 = preg_match_all($pattern,$string2)?$string2:'';
    for($i=0;$i<strlen($string1);$i++){
        $str1Sum+=ord($string1[$i]);
    };
    for($i=0;$i<strlen($string2);$i++){
        $str2Sum+=ord($string2[$i]);
    };
    echo $str1Sum==$str2Sum?'equel':'not equal';
?>

</body>
</html>
