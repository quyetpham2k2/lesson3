<?php
include 'QuadraticEquation.php';

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



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int) $_POST['a'];
        $b = (int) $_POST['b'];
        $c = (int) $_POST['c'];

        $equation = new QuadraticEquation($a, $b, $c);
        $delta = $equation->getDiscriminant();

        // Kiểm tra và in ra nghiệm
        if ($delta > 0) {
            echo "The equation has two roots:<br>";
            echo "Root 1: " . $equation->getRoot1() . "<br>";
            echo "Root 2: " . $equation->getRoot2() . "<br>";
        } elseif ($delta == 0) {
            echo "The equation has one root:<br>";
            echo "Root: " . $equation->getRoot1() . "<br>";
        } else {
            echo "The equation has no roots<br>";
        }

        echo '<a style="display: block;text-align: center;border: 1px solid black;text-decoration: none;color: black;font-weight: bold;margin-top: 16px;padding:" href="index.php">Reset</a>';
    } else {
        echo '
            <form method="POST">
                <label for="a">Enter a: </label>
                <input type="number" id="a" name="a" required><br><br>
                <label for="b">Enter b: </label>
                <input type="number" id="b" name="b" required><br><br>
                <label for="c">Enter c: </label>
                <input type="number" id="c" name="c" required><br><br>
                <input type="submit" value="Submit" style="display: block;text-align: center;border: 1px solid black;text-decoration: none;color: black;font-weight: bold;margin-top: 16px;padding: 8px;">
            </form>
        ';
    }

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
    " href="../">
        Trang chủ
    </a>';
}
echo '
</div>';