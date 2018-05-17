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
    $arr = [1, 3, 2, 4];
    function arrMod($n){
        for($i=0;$i<count($n);$i++){
            echo $n[$i].'<br>';
            for($j=0;$j<$n[$i];$j++){
                $a[]=$n[$i];
            };  
        };
        echo '['.join(',',$a).'] <br>';//так краще видно
//        var_dump($a); //виводить всю структуру з ключами
    };
    arrMod($arr);
    
    //Task 2
    echo '<br><br> Task 2 <br>';
    $temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
    $array = array_unique($temperatures);
    sort($array);//сортує і видаляє старі ключі
    for($t=0;$t<3;$t++){
        $min[]=$array[$t];
        $max[]=$array[(count($array)-(1+$t))];
        $mid[]=$array[count($array)/2+1-$t];
    }
    echo 'мінімальні ['.join(',',$min).'] <br>';
    echo 'середні ['.join(',',$mid).'] <br>';
    echo 'максимальні ['.join(',',$max).'] <br>';
    
    //Task 3
    echo '<br><br> Task 3 <br>';
    $books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];
    //sort by price
    echo 'sort by price <br>';
    $price = array();
    foreach($books as $key=>$arr){
        $price[$key]=$arr['price'];
    };
    $booksTmp = $books;//копіюємо що б не змінювати $books
    array_multisort($price, SORT_NUMERIC,$booksTmp);
    print_r($booksTmp);
//    var_export($booksTmp);
//    var_dump($booksTmp);
    
    //filter by tag
echo '<br><br> filter by tag <br>';
    $booksTmp2 = $books;
    function byTag($arr){
        if($arr['tags']==true){
            if(array_search('php', $arr['tags'])!==false){
                return true;
            };
        }else{
            return false;
        };
    };
    var_dump(array_filter($booksTmp2, "byTag"));
    
    //Bonus Tasks
    //Bonus Task 1
    echo '<br><br> Bonus Task 1 <br>';
    $bonus1 = [20,10,-80,10,10,15,35];
    $bonus2 = [10,-80,10,10,15,35];
    $bonus3 = [1,2,3,4,3,2,1];
    $bonus4 = [1,100,50, -51,1,1];
    function arrSum($array){
        $arr1 = array();
        $arr2 = array();
        for($i=0;$i<count($array);$i++){
            $sumRight=0; // обнуляємо сумму правої половини
            if($i!=0){
                $sumLeft+=$array[$i-1];
            };
            for($j=$i+1;$j<count($array);$j++){
                $sumRight+=$array[$j];
            };
            if($sumLeft==$sumRight){
                return $i;
            };
        };
        return -1;
    };
    echo arrSum($bonus1).'<br>';
    echo arrSum($bonus2).'<br>';
    echo arrSum($bonus3).'<br>';
    echo arrSum($bonus4).'<br>';
    
    //Bonus Task 2
    echo '<br><br> Bonus Task 2 <br>';
    $array1 =[1,1,1,2,1,1];
    $array2 =[0,0,0.55,0,0];
    $array3 =[3,1,5,3,7,4,1,5,7];
    function uniq($arr){
        for($i=0;$i<count($arr);$i++){
            $a = $arr[$i];
            $str = join(',',$arr);
            $pattern = "/$a/";
            $countN = preg_match_all($pattern,$str);
            if($countN==1)echo $a.'<br>';
        }
    }
    uniq($array1);
    uniq($array2);
    uniq($array3);
?>

</body>

</html>
