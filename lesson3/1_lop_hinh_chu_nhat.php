<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    //tinh dien tich
    public function getArea()
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
echo
    '<div class="container" style="

        padding: 16px;
        max-width: 500px;
        margin: 100px auto;
        border: 3px solid black;
    ">';

// NOTE: display ============================================================================================
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;// 0utput: 10
echo "<br>", $rectangle->height;// 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;
echo "<br>", $rectangle->height;// 0utput: 30
echo "<br>", $rectangle->width;// 0utput: 20
echo "<br>", $rectangle->getPerimeter();// Output: 100
echo "<br>", $rectangle->getArea();// Output: 600
echo "<br>", ("<strong>Your Rectangle</strong>: " . $rectangle->display());

// ============================================================================================
echo '<a 
    style="
        display: block;
        text-align: center;
        border: 1px solid black;
        text-decoration: none;
        color: black;
        font-weight: bold;
        margin-top: 16px;
        padding: 8px;
    " 
    href="index.php">
    Trang chủ
</a>

</div>';

