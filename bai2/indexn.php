<?php
// echo "Bai2"
//Bien de luu nhung gia tri tam thoi
// $name = "Duc" ;
// echo $name


// $a = 5;
// $b = 6;
// $c = $a +$b;

// echo $c

// $x = 5;
// $y = '5';
// // if: nếu (câu điều kiện)
// if ($x == $y) {
//    echo 'bang nhau';
// }

// $a = true;
// $b = false;

// if ($a) {
//   echo $a;
// } else {
//     echo 'not';
// }
// if($b) {
//     echo $b;
// } echo 'not';

// $x = 6;
// $y = '5';

// if ($x != $y) {     // so sánh kiểu dữ liệu
//   echo 'dung';
// }else {
//     echo'sai';
// }



// if ($x ==5) {
//     echo 'th1';
// } elseif ($x==6) {
//     echo 'th2';
// } elseif ($x==7) {
//     echo 'th3';
// }else {
//     echo 'th4';
// }

// switch ($x) {
//     case 5:
//             echo 'th1';
//             break;
//     case 6:
//             echo 'th2';
//             break;
//      case 7:
//              echo 'th3';
//              break;
//       default:   //default : dùng nếu khong đúng các trường hơp trên
//       echo 'khong tan tai';             
// }



// if ($x ==6 && $y ==5) {
//     echo 'logic';
// }


// if ($x ==6 || $y ==5) {
//     echo 'logic';
// }


// $x = 1;
// while ($x <= 5) {  // while :  vòng lặp đúng  
//     echo ("The number ís:$x <br/> ");
//     $x++;
// }


// $x = 1;
// do{
//     echo ("the number ís :$x <br/>");
//     $x++;
// } while ($x <= 5)


// for ($x = 0; $x <=5 ;$x ++) {
//     echo ("The number ís:$x <br/> ");
// }


// kiểu dữ liệu mảng 

// $arrProducts = array();
$arrProducts = [
    [
        'id'=> 1,
        'name' => 'Samsung',
        'price' => '20',
    ],
    [
        'id'=> 2,
        'name' => 'Xiaomi',
        'price' => '10',
    ],
    [
        'id'=> 3,
        'name' => 'Iphone',
        'price' => '16',
    ],
         
];
// echo '<pre>';
// // duyet qua tung phan tu mang
// foreach ($arrProducts as $item) {
//      print_r($item);
// }




// $arrNumbers = ['a','b','c','d'];

// // echo '<pre>';
// // // echo $arrNumbers;   //echo dùng trên chuỗi ko dùng dc trong mảng 
// // print_r($arrNumbers);  // dùng hiển thị chuỗi mảng hoặc object 
// // var_dump($arrNumbers); //sẽ hiển thị kiểu dữ liệu của biến
// // die;



// // echo 'hello world'
// $car = ["volvo","BMW","toyota"]; //0 ,1, 2
// print_r($car['2']);

// //mang ket hop tu dinh nghia cac chi so cho cac phan tu trong mang

// $age = ["peter"=>"35","ben"=>"37","joe"=>"43"];
// echo '<pre>';
// print_r($age['ben']);
//  ?>






<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>name</th>
    <th>price</th>
  </tr>
  <?php 
          foreach ($arrProducts as $item) {

           
  ?>
  <tr>
    <td><?=$item['id'] ?></td>
    <td><?php echo $item['name']?></td>
    <td><?=$item['price'] ?></td>
  </tr>

 <?php } ?>



 <?php 
          foreach ($arrProducts as $item) :     
  ?>
  <tr>
    <td><?=$item['id'] ?></td>     <!-- <??>-->
    <td><?php echo $item['name']?></td>
    <td><?=$item['price'] ?></td>
  </tr>

 <?php endforeach ?>



 <?php 
          foreach ($arrProducts as $item) :     
  ?>
  <?php if($item['price'] >= 16) : ?>
  <tr>
    <td><?=$item['id'] ?></td>     
    <td><?php echo $item['name']?></td>
    <td><?=$item['price'] ?></td>
  </tr>
 <?php endif; ?>
 <?php endforeach ?>





</table>
</body>
</html>

