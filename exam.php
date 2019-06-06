<?php require_once 'QuadraticEquation.php' ;?>
<?php
$phuongtrinh = new QuadraticEquation(0,2,3);
$a = $phuongtrinh->getA();
if ($a != 0) {
    if ($phuongtrinh->getDelta() > 0) {
        $root1 = $phuongtrinh->getRoot1();
        $root2 = $phuongtrinh->getRoot2();
        echo "Nghiem 1 la " . $root1 . "<br/>";
        echo "Nghiem 2 la " . $root2;
    } else if ($phuongtrinh->getDelta() == 0) {
        $root1 = $phuongtrinh->getExprience();
        echo "Nghiem duy nhat la: " . $root1;
    } else if ($phuongtrinh->getDelta() < 0) {
        echo "Phuong trinh vo nghiem";
    }
} else {
    echo " Ko phai la phuong trinh bac 2";
}
?>