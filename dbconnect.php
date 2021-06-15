<?php
$conn = mysqli_connect('localhost', 'root', '', 'salomon')
or die('khong het nối được database.');


// tùy chỉnh kết nối
// set charset utf8 đối với kết nối này. dùng để gõ tiếng việt, nhật ,thái trung quốc
// lưu ý: gõ với bộ unikey, bằng mã unicode
$conn->query("SET NAMES 'utf8'");
$conn->query("SETCHARACTER SET UTF8");
$conn->query("SET SESSION collation_connection = 'utf8_general_ci'");
?>