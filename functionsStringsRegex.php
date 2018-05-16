<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php 

    //Task 1
    echo 'Task 1 <br>';
    $str = 'var_test_text';
    $arr = explode('_',$str);
    $str ='';
    for($i=0;$i<count($arr);$i++){
        if($i==0){
            $str .=$arr[$i];
        }else{
            $str .=ucfirst($arr[$i]);
        };
    };
    echo $str;
    
    //Task 2
    echo '<br><br> Task 2 <br>';
    $strT2 = 'ФЫВА олдж';
    $arrT2 =explode(' ',$strT2);
//    $arrT2 =mb_split(' ',$strT2);
    
    //strrev в UTF-8 не працює коректно
    // або ця функція або писати в Windows cp-1251
    //функція з гугла
    function utf8_strrev($str){  
        preg_match_all('/./us', $str, $ar);
        return implode(array_reverse($ar[0]));
    };
    
    $arrT2[0] = utf8_strrev($arrT2[0]);
    $arrT2[1] = utf8_strrev($arrT2[1]);
    echo join(' ',$arrT2);
    
    //Task 3
    echo '<br><br> Task 3 <br>';
    $a = [342, 55, 33, 123, 66, 63, 9];
    for($i=0;$i<count($a);$i++){
        if(strpos($a[$i],'3')!==false){ //==true глючить бо перетворює 0 в false
            echo $a[$i].'<br>';
        };
    };
    
    //Task 3
    echo '<br><br> Task 4 <br>';
    $b = [342, 55, 33, 123, 66, 63, 9];
    $string1 = join('',$b);
    $pattern = "/3/";
    echo preg_match_all($pattern,$string1);
    
    //Bonus Tasks
    //Bonus Task 1
    echo '<br><br> Bonus Task 1 <br>';
    $name1 = 'dolphin';
    $name2 = 'alaska';
    $name3 = 'europe';
    function newName($string){
        if($string[0]===$string[strlen($string)-1]){
            $string = ucfirst($string).substr($string,1);
        }else{
            $string = 'The '.ucfirst($string);
        }
        echo $string.'<br>';
    }
    newName($name1);
    newName($name2);
    newName($name3);
    
    //Bonus Task 2
    echo '<br><br> Bonus Task 2 <br>';
    function mapping($map){
        $strB2='';
        for($i =0;$i<strlen($map);$i++){
            switch($map[$i]){
                case 'A': 
                    $strB2.='T'; 
                    break;
                case 'T': 
                    $strB2.='A'; 
                    break;
                case 'C': 
                    $strB2.='G'; 
                    break;
                case 'G': 
                    $strB2.='C'; 
                    break;
            };
        };
    echo $strB2.'<br>';
    };
    mapping('ATTGC');
    mapping('GTAT');
?>

</body>

</html>
