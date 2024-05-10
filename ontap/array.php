<?php
echo "<pre>";

// ArrayChunk
// Bien mảng lớn thanh mang nho
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9,10];
$arrayChunk = array_chunk($array, 5);
//  print_r($arrayChunk);

 // ArrayColumn
 // Lấy dữ liệu thành dòng
 $a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
$firstName= array_column($a, 'first_name' , 'id');
// print_r($firstName);

$fname = array("Peter", "Ben", "Joe");
$age = array("35", "47", "43");
$c = array_combine($fname, $age);
// print_r($c);


// ArrayDiff
// Trả về phần tử khác nhau của mảng $a với mảng $b
$a= [1, 2, 3, 4];
$b= [3, 4, 5];
$diff = array_diff($a, $b);
// print_r($diff);


// ArrayFilter
// Lọc dữ liệu theo giá trị mảng
$d = [
    [
        'id' => 1,
        'name' => 'ahihi 1',
        'price' => 2000
    ],
    [
        'id' => 2,
        'name' => 'ahihi 2',
        'price' => 3000
    ],
    [
        'id' => 3,
        'name' => 'ahihi 3',
        'price' => 4000
    ]
];
$e = array_filter($d, function($item){
    return $item['price'] >= 3000;
});
// print_r($e);

// ArrayMap
// Thêm dữ liệu vào mảng mà không thay đổi dữ liệu ban đầu
$f = array_map(function($item){
    $item['currency'] = 'USD';
    return $item;
}, $d);
// print_r($f);

// ArrayMerge
// Key xác định mới ghi đè lên
$a = [1, 2, 'a'=> 'QKA'];
$b = [1, 2, 'a' => 'JQK', 5];
// 3 cách ghi đè mảng
$merge1 = array_merge($a, $b);
print_r($merge1);

$merge2 = [...$a, ...$b];
print_r($merge2);

$merge3 = $a + $b;
print_r($merge3);

// ArrayPush
// Tham chiếu đến mảng $a
$a = [];
array_push($a, ['a' => 'hahaha']);
array_push($a, 'QKA');
print_r($a);

// ArrayKeys
// Trả về giả trị nhỏ
$a = ['a' => 'A', 'b' => 'B', 'c' => 'B'];
$keys = array_keys($a);
print_r($keys);

// ArrayValues
// Trả về giá trị lớn
$values = array_values($a);
print_r($values);

// ArrayUnique
// Loại bỏ đi giá trị trùng nhau
$valueUnique = array_unique($values);
print_r($valueUnique);

//InArray
//Kiểm tra biến có mảng mình cần và trả về giá trị Yes / No
if (in_array('B', $values)) {
    echo "Yes";
} else{
    echo "No";
}