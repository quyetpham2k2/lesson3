<?php
include_once 'StopWatch.php';

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

    // Tạo mảng ngẫu nhiên gồm 10,000 số
    $array = [];
    for ($i = 0; $i < 10000; $i++) {
        $array[] = rand(1, 10000);
    }

    $stopWatch = new StopWatch();
    $stopWatch->start();
    selectionSort($array);
    $stopWatch->stop();
    echo "Elapsed time for selection sort on 10,000 numbers: " . $stopWatch->getElapsedTime() . " milliseconds\n";


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
