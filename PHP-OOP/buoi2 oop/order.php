<?php

class Order
{

    public function __construct(
        public int $id,
        public int $date,
        public string $name,
        public array $product = [],
    ) {
    }

    // Sản Phẩm
    // 'name' = 'tên sp'
    // 'price' = 'giá sp'
    // 'qty' = 'số lượng'
    public function showName()
    {
        echo 'Name là: ' . $this->name . PHP_EOL;
    }

    public function addProduct(array $sanpham)
    {
        $this->product[] = $sanpham;
    }

    public function getTotalPrice()
    {
        $sum = 0;
        foreach ($this->product as $sanpham) {
            $sum += $sanpham['price'] * $sanpham['qty'];
        }
        return $sum;
    }

    public function getOrderInfo()
    {
        echo 'Chi tiết đơn hàng: ' . $this->id . PHP_EOL;
        echo 'Ngày đặt hàng: ' . $this->date . PHP_EOL;
        echo 'Tên khách hàng: ' . $this->name . PHP_EOL;

        echo '<ul>';
        foreach ($this->product as $sanpham) {
            echo "<li>{$sanpham['name']} - {$sanpham['price']} - {$sanpham['qty']} </li>";
        }
    }

    public function __destruct()
    {
        echo "Destructed";
    }
}

echo "<pre>";
$Order1 = new Order(
    1,
    2024,
    'Lam',
    [
        [
        'name' => 'Sản Phẩm 1',
        'price' => 50000,
        'qty' => 10,
        ]
    ]
);
$Order1->addProduct([
    'name' => 'Sản Phẩm 2',
    'price' => 10000,
    'qty' => 5,
]);
print_r($Order1);
echo "TOTAL PRICE: " . $Order1->getTotalPrice() . PHP_EOL;
$Order1->getOrderInfo();
