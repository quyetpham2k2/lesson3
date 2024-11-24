<?php
class Application
{
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }


    public function __toString()
    {
        return 'Application name: ' . $this->name;
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

echo "Total objects count: " . Application::$count . "<br/>";
$app1 = new Application('App One');
echo "Total objects count: " . Application::$count . "<br/>";
$app2 = new Application('App Two');
echo "Total objects count: " . Application::$count . "<br/>";
echo $app1 . '<br/>';
echo $app2 . '<br/>';

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
