

<?php 
		// Đây là hàm tính tổng 3 số bất kì 
		// Mỗi hàm mình viết đều sẽ có return nghĩa là điều kiện trả về của hàm đó .
		function phep_cong($a, $b, $c){

			return $a + $b + $c;
		}

		// mình tương tự thế có thể nghĩ ra hàm khác như phep_nhan. phep_chia

		// Giờ anh sẽ để em viết 2 hàm phép nhân và phép trừ để tập thử nhé 

		//Em viết 2 hàm kia đi

		function phep_tru($a, $b){
			return $a - $b;

		}

		function phep_nhan($a, $b){
			return $a * $b;

		}

		// Tiến hành gọi hàm và test thử 

		echo 'Kết quả phép cộng 10 + 15 +20 là : ';
		echo phep_cong(10,15,20);
		

		// Ở đây thỉnh thoảng mình dùng <br/> để nó xuống dòng
		echo '<br/>';
		echo 'Kết quả phép cộng 100 + 115 + 500 là : ';
		echo phep_cong(100,115,500);
		// Ở đây mình gọi tên hàm là phep_cong và truyển vào 3 số bất kì .

		echo '<br/>';
		echo 'Kết quả phép trừ 500 - 115 là : ';
		echo phep_tru(500,115);

		


		echo '<br/>';
		echo 'Kết quả phép trừ 100 - 600 là : ';
		echo phep_tru(100,600);


		echo '<br/>';
		echo 'Kết quả phép nhân 10 * 55 là : ';
		echo phep_nhan(10,55);


		echo '<br/>';
		echo 'Kết quả phép nhân -3 * 115 là : ';
		echo phep_nhan(-3,115);


?>