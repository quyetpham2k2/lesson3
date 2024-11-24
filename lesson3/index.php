<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Links</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		a {
			display: block;
			padding-bottom: 16px;
		}

		.container {
			padding: 16px;
			max-width: 500px;
			margin: 100px auto;
			border: 3px solid black;
		}
	</style>
</head>

<body>
	<div class="container">
		<a target="" href="1_lop_hinh_chu_nhat.php">1_lop_hinh_chu_nhat.php: [Thực hành] Lớp hình chữ nhật</a>

		<a target="" href="2_dem_doi_tuong_cua_lop.php">
			2_dem_doi_tuong_cua_lop.php: [Thực hành] Đếm số lượng đối tượng của một lớp
		</a>

		<a target="" href="3_tao_mot_doi_tuong_duy_nhat.php">
			3_tao_mot_doi_tuong_duy_nhat.php: [Thực hành] Tạo một đối tượng duy nhất của lớp
		</a>

		<a target="" href="./4_php-product-manager">
			./4_php-product-manager: [Thực hành] Quản lí sản phẩm
		</a>

		<a target="" href="./5_he_cac_doi_tuong_hinh_hoc">
			./5_he_cac_doi_tuong_hinh_hoc: [Thực hành] Hệ các đối tượng hình học
		</a>

		<a target="" href="./6_QuadraticEquation_phuong_trinh_bac_hai">
			./6_QuadraticEquation_phuong_trinh_bac_hai: [Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)
		</a>

		<a target="" href="./7_StopWatch">
			./7_StopWatch: [Bài tập] Xây dựng lớp StopWatch
		</a>

		<a target="" href="./8_quan_ly_thong_tin_nhan_su">
			./8_quan_ly_thong_tin_nhan_su: [Bài tập] Quản lý Thông tin Nhân sự Cơ bản
		</a>

		<a target="" href="./9_quan_ly_thong_tin_nhan_su_nang_cao">
			./9_quan_ly_thong_tin_nhan_su_nang_cao: [Bài tập] Mở rộng Quản lý Nhân sự nâng cao
		</a>
	</div>
</body>

<!-- NOTE: form code ở đây -->

<!-- 
echo
'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
	try {
	//  display ============================================================================================

	// NOTE: code viết ở đây :)

	// ============================================================================================
	} catch (Error $e) {
	// } catch (Exception $e) {

	echo ' <br />
	<strong>
		Caught exception: ', $e->getMessage(), "
	</strong>
	<br />";

	} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
	echo '<a style="
		display: block;
		text-align: center;
		border: 1px solid black;
		text-decoration: none;
		color: black;
		font-weight: bold;
		margin-top: 16px;
		padding: 8px;
	" href="index.php">
		Trang chủ
	</a>';
	}
	echo '
</div>'; 
-->

</html>