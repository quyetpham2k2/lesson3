<?php
include_once 'Shape/Circle.php';
include_once 'Shape/Cylinder.php';
include_once 'Shape/Rectangle.php';
include_once 'Shape/Square.php';

use Shape\Circle;
use Shape\Cylinder;
use Shape\Rectangle;
use Shape\Square;

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

    $circle = new Circle('Circle 01', 3);
    // Tính và hiển thị diện tích của hình tròn. Diện tích hình tròn = π * r^2
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    // Tính và hiển thị chu vi của hình tròn. Chu vi hình tròn = 2 * π * r
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

    $cylinder = new Cylinder('Cylinder 01', 3, 4);
    // Tính và hiển thị diện tích bề mặt của hình trụ. Diện tích bề mặt = 2 * π * r^2 + 2 * π * r * h
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    // Tính và hiển thị chu vi của hình trụ. (Chu vi có thể tính theo cách khác hoặc không cần thiết)
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

    $rectangle = new Rectangle('Rectangle 01', 3, 4);
    // Tính và hiển thị diện tích của hình chữ nhật. Diện tích hình chữ nhật = chiều dài * chiều rộng
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    // Tính và hiển thị chu vi của hình chữ nhật. Chu vi hình chữ nhật = 2 * (chiều dài + chiều rộng)
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

    $square = new Square('Square 01', 4, 4, 4);
    // Tính và hiển thị diện tích của hình vuông. Diện tích hình vuông = cạnh * cạnh
    echo 'Square area: ' . $square->calculateArea() . '<br />';
    // Tính và hiển thị chu vi của hình vuông. Chu vi hình vuông = 4 * cạnh
    echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';

    // ============================================================================================
} catch (Throwable $e) {
    // Bắt tất cả lỗi và ngoại lệ (Error và Exception)

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
	" href="../">
		Trang chủ
	</a>';
}
echo '
</div>';
