<?php 
	
	$mang = [12,14,19,100,200,500,800,12,12,900];

	$so_lan = 0;

	foreach ($mang as $key => $value) {
			if($value == 12){
				$so_lan++;
			}
	}

	//echo 'Số 12 xuất hiện: ' . $so_lan .' lần';

	// EM có nhìn thấy câu lệnh về foreach bên trên
	// Nó sẽ duyệt cả key và mọi phần tử của mảng
	// VÌ mảng này ban đầu mình ko truyền key cho nó nên mặc định key sẽ là số thứ tự của mảng tức là 	từ 0 đến 8. vì mảng này 9 phần tử
	// value chính là giá trị của mảng, value sẽ nhận từ 12, 14.... 900

	// Mình sẽ có lệnh IF là kiểm tra. tức là nếu cái value đấy bằng số 12 thì mình cộng số lần lên 1. và cứ thế duyệt cả mảng
	// ++ tức là lệnh tăng 1 số lên 1



	$chuoi = "CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM";

	$mang = explode(" ", $chuoi); 

	// lệnh explode sẽ gồm 2 phần, phần đầu  tiên là điều kiện tách, ở dây mình tách theo dấu cách, nên đề là " ", tức là cứ gặp dấu cách nó sẽ hiểu là 1 phần tử... Phần tử 2 của lệnh explode là tên của chuỗi 

	//print_r($mang); // print_r là lệnh in ra mảng thôi;

	echo $mang[2];  // vì key nó tính từ 0 nên là vị trí thứ 3 chính là key số 2

	// tương tự là hàm implode thì ngược lại, nó chuyển mảng thành chuỗi. cũng qua 2 phần, phần đầu tiên là kí tự phân chác mỗi từ của chuỗi, phần 2 là tên mảng cầu chuyển . ví dụ :

	echo '<br/>';

	$mang2 =["TÔI", "ĐANG", "ĐI", "CHƠI"]; // mảng này gồm 4 phần tử. giờ mình muốn ghép lại thành 1 chuỗi thì làm như sau 

	$chuoi2 = implode(" ", $mang2);

	echo $chuoi2;

	// bây giờ mình ko muốn cái chuỗi mới sinh ra cách nhau bằng đấu cách, mà muốn cách nhau bằng dấu - thì pải làm sao. đơn giản thôi, mình thay đổi cái thành phần truyền vào . làm như sau 

	echo '<br/>';

	$chuoi3 = implode("--", $mang2);

	echo $chuoi3;
?>