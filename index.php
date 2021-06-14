 <?php
echo 'Xin chào bích mập';
$hoten = 'Ngan';
$hoclop = 'back end';

echo 'ten cua ban la: <b> <br>' . $hoten . '</br></b>';
echo "ban hoc lop:<b>$hoclop</b>";


$ten = 'Ngân';
$ho ='nguyễn';
$hokhau='35948';

echo '<ul>';
echo '<li> Tên của bạn là:' . $ten . '</li>';
echo "<li> họ của bạn là: $ho </li>";
echo "<li> hộ khẩu của bạn là: $hokhau </li>";
echo '</ul>'; 


$khachhangRow = array(
    'kh_ten' => 'Kim Ngân',
    'kh_ho' => '36/17',
    'kh_hokhau' => 'Ngân'
);
$khachhangRow1 = [
    'kh_ten' => 'Kim Ngân',
    'kh_ho' => '36/17',
    'kh_hokhau' => 'Ngân'
];
$khachhangRow2 = [
    'kh_ten' => 'Kim Ngân',
    'kh_ho' => '36/17',
    'kh_hokhau' => 'Ngân'
];
$khachhangRow3 = [
    'kh_ten' => 'Kim Ngân',
    'kh_ho' => '36/17',
    'kh_hokhau' => 'Ngân'
];

//Jagged array
// 1 mảng lớn bao gồm 3 mảng con
$mangdanhsach = [
    $khachhangRow1,
    $khachhangRow2,
    $khachhangRow3
];


?>

<div>
    <table border="1">
        <tr style="background: red; color: #fff;">
            <th>Tên</th>
            <th> Số nhà</th>
            <th>liên hệ</th>
        </tr>
        <?php foreach($mangdanhsach as $kh): ?>
        <tr>
            <td><?php echo $kh['kh_ten'] ?></td> 
            <td> <?= $kh['kh_ho'] ?></td>
            <td> <?= $kh['kh_hokhau'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>