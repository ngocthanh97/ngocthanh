
<?php 
$mang1 = [1,2,3,4,5,6,7,8,9,10];
  $mang2 = [1,2,3,4,5,6,12,44,99,100];
function tron_2_mang($mang1, $mang2){

    $mang_moi = $mang1;
    foreach ($mang2 as $key => $value) {
        if(!in_array($value, $mang1)){ // kiểm tra phần tử đã nằm trong mảng 1 chưa. chưa thì push
            array_push($mang_moi, $value); // push phần tử vào cuối mảng
        }
    }

    return $mang_moi;
}

print_r(tron_2_mang($mang1, $mang2));

?>

