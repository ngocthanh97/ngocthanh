<?php

	// tra ve so chu cua cau

	function tong_chu($cau){

		$arr = explode(" ", $cau);

		return count($arr);
	}

	// anh phân tích từng hàm nhé. 
	// cái lệnh strlen đưa ra độ dài của chuỗi, tính từ đầu đến cuối chứ nó ko đếm dc chữ.
	// ở đây mình phân tích đơn giản thôi. đó là câu thì ko thể biết bao nhiêu phần tử. nhưng mảng thì có . vì vậy mình chuyển câu đó về mảng, và đếm phần tử của mảng là ok 

	// Lệnh count là đếm số lượng phẩn tử của mảng. chỉ có mảng và list mới có phần tử để đếm thôi. còn chuỗi thì ko đếm dc kiểu đó

	

	// kiem tra xem Xuan co nam trong mang khong

	// Vừa nãy anh quên mất là mình ko truyền từ xuân như kia mà phải truyền biến vào hàm. đó là mình truyền biến $str và gán luốn bằng xuấn

	// Ở bên dưới gọi mình có thể truyền từ khác, ko nhất thiết là xuân

	function check($str="xuân",$cau){
		
		$check = "Không"; // đây là kiểu boolean hôm qua anh dạy. là kiểu dữ liệu đúng sai. Nó đưa ra chỉ 2 giá trị đúng hoặc sai
		
		// ở đây có nhiều cách giải quyết nhưng đơn giản là mình chuyển câu thành mảng, và kiểm ra trong mảng có phần tử nào bằng "XUÂN" không như bài trước anh làm với cố 12 ấy . làm nhưu sau 

		$arr = explode(" ", $cau); // chuyển câu về mảng 

		// Cách 1 ; dùng foreach duyệt hết mảng và so sánh từng phần tử vs "xuân". có tức là return " TRUE"	
		
		foreach ($arr as $key => $value) {
			if($value == $str){
				$check = "Có";
			}		
		}

		// Cách 2 :

		// if(in_array("xuân", $arr)){

		// 	$check = "Có";
		// }

		// Ở dây còn cash 2 nữa. đó là ko cần duyệt từng phần tử trong mảng. mà PHP cung cấp lệnh kiểm trả xem 1 phần tử có nằm trong mảng bất kì hay ko. đó là lệnh in_array

		return $check;

		// mình chỉ cần kiểm tra nó có bằng xuân hay không, còn nếu ko có thằng nào là xuân thì mặc định bên trên mình đã gán check = không rồi	
	}

	

	// dem so lan xuat hien cua tu xuan 

	// Hàm này em viết tư tưởng đúng rồi nhưng mà em phải nhớ là chỉ có mảng vs foreach dc phần tử, câu là chuỗi thì ko thể foreach dc. và lại sau if luôn luôn phải viết {}

	function xuathien($str="xuân",$cau){
		$arr = explode(" ", $cau); // chuyển câu về mảng 
		$so_lan = 0;
		foreach ($arr as $key => $value) {
			if(strtolower($value) == $str){
				$so_lan++;
			}
		}

		return $so_lan;

	}

	// Anh quên mất là lúc gọi hàm mình lại truyền từ xuân mà bên trong câu lệnh mình vẫn chỉ so sanh vs từ xuân chứ ko phải từ được truyền vòa 

// Bây giờ anh chạy thử bài này 

	$cau = "Xuân đã đến bên em Dáng xuân tuyệt vời Xuân đã đến bên người, Xin người cùng em vui xuân. Xin người cùng em yêu xuân. Mang hạnh phúc cho đời Gió xuân tuyệt vời Mang say đắm cho người Ôi từng nụ hôn yêu thương. Còn nhớ phút giây gặp gỡ Mùa xuân muôn hoa sắc hồng Chiều xuống gió xuân nồng cháy Để cho môi em ngỡ ngàng Người đến Cho tình em chợt mở Đêm thôi lạnh giá Mang hạnh phúc cho người Nhớ không anh yêu Ta say đắm bao ngày Đường về Đừng quên nghe anh. Mang say đắm cho đời Gió xuân tuyệt vời Xuân hãy đến bên người Xin người cùng em yêu xuân ";

	echo $cau;
	echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';

	echo 'Tổng chữ của câu: '.tong_chu($cau);
	echo '</br>';

	echo 'Từ Xuân có xuất hiện hay không ? (Có/không):'.check($str="xuân",$cau);
	echo '</br>';

	echo 'Từ Xuân xuất hiện : '.xuathien("xuân",$cau) .'lần';
	echo '</br>';

		echo 'Từ em có xuất hiện hay không ? (Có/không):'.check($str="em",$cau);
	echo '</br>';

	echo 'Từ em xuất hiện : '.xuathien("em",$cau) .'lần';
	echo '</br>';


		echo 'Từ mùa có xuất hiện hay không ? (Có/không): '.check($str="mùa",$cau);
	echo '</br>';

	echo 'Từ mùa xuất hiện : '.xuathien("mùa",$cau) .' lần';
	echo '</br>';
	// EM làm đi nhé   ok a

	// ở đây đang có lỗi. nó cứ hiện 6 lần, mình sẽ debug và kiểm tra xem đang bị sai ở đâu

	// Ở đây có nhiều hơn 6 từ xuân, nhưng nó chỉ biết so sánh đúng giá trị là từ xuân ko dc viết hoa thôi

	// Giờ mình muốn tính cả những từ dc viết hoa thì làm sao

	// Hàm strtolower là hàm chuyển từ chữ hoa sang chữ thường. 

	// Ví dụ : strtolower(Cộng Hòa) ---> thì nó sẽ chuyển thành cộng hòa 

	// Kết quả thay đổi. vừa nãy không có từ mùa viết thường nào nhưng giờ nó ko phân biệt hoa thường nên có 1 .



?>