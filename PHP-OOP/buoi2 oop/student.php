<?php
// $array =[
//     'name' => 'Ahihi',
//     'age' => 18,
//     'mark' => 75,
// ];


namespace buoi2;

class Student
{
    // Hàm Construct
    public function __construct(
        public string $name,
        public int $age = 0,
        public int $mark = 0
    ) {
    }
    public function pay()
    {
        echo "Nộp tiền học phí" . PHP_EOL;
    }
    public function thamGiaHoatDongNgoaiKhoa($tenHoatDong)
    {
        echo "Tham gia hđ: " . $tenHoatDong . PHP_EOL;
    }
    public function showName()
    {
        echo 'Name là: ' . $this->name . PHP_EOL;
    }
    // Hàm destruct
    public function __destruct(){
        echo "Destructed" . PHP_EOL;
    }
}
$student = new Student("kaka", 25, 100);
echo "<pre>";
print_r($student);
$student->showName();

unset($student);

$student2 = new Student("Student 2");
echo "<pre>";
print_r($student2);
$student2->showName();

unset($student2);


