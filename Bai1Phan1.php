<!-- •	Nhập vào danh sách tên và điểm cho n sinh viên (lấy từ tệp Students.txt)
o	Mỗi sinh viên bao gồm các thông tin sau: Họ và tên, Giới tính, Tuổi, Điểm số
o	Mỗi thông tin trên 1 dòng
o	Theo thứ tự: 
	Họ và tên
	Giới tính
	Tuổi
	Điểm số
 -->

 <?php 

$f = fopen ("Student.txt", "r") or exit ("Không mở được tệp tin này!");


$students = [];
 
While(!feof($f)){

    $student = [];

    $student['hoVaTen'] = fgets($f);
    $student['namSinh'] = fgets($f);
    $student['tuoi'] = fgets($f);
    $student['diem'] = fgets($f);

    $students[] = $student;
    
    }

print_r($students);


?>