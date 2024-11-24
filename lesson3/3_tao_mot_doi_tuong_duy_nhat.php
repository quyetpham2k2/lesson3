<?php
class Application
{
    private static $instance;
    private static $call_time = 1;
    private static $create_time = 1;

    private function __construct()
    {
        echo 'Create ' . self::$create_time++ . ' time<br/>';
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }

        echo "Call " . self::$call_time++ . " time<br/>";
        return self::$instance;
    }
}
echo
    '<div class="container" style="

        padding: 16px;
        max-width: 700px;
        margin: 100px auto;
        border: 3px solid black;
    ">';
try {
    // NOTE: display ============================================================================================

    $app1 = Application::getInstance();
    $app2 = Application::getInstance();
    $app3 = new Application(); //Error

    // ============================================================================================
} catch (Error $e) {
    // } catch (Exception $e) {

    echo '  <br/>
    <strong>
        Caught exception: ', $e->getMessage(), "
    </strong>
    <br/>";

} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
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
</a>';
}
echo '</div>';