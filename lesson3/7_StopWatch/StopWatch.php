<?php

class StopWatch
{
    // Các thuộc tính private
    private $startTime;
    private $endTime;

    // Phương thức khởi tạo không tham số
    public function __construct()
    {
        $this->startTime = microtime(true);  // Khởi tạo startTime bằng thời gian hiện tại (tính bằng giây)
    }

    // Phương thức getter cho startTime
    public function getStartTime()
    {
        return $this->startTime;
    }

    // Phương thức getter cho endTime
    public function getEndTime()
    {
        return $this->endTime;
    }

    // Phương thức start() để reset startTime về thời gian hiện tại
    public function start()
    {
        $this->startTime = microtime(true);
    }

    // Phương thức stop() để thiết đặt endTime
    public function stop()
    {
        $this->endTime = microtime(true);
    }

    // Phương thức getElapsedTime() trả về thời gian đã trôi qua trong millisecond
    public function getElapsedTime()
    {
        return ($this->endTime - $this->startTime) * 1000; // Tính toán thời gian trôi qua tính bằng milisecond
    }
}

// Hàm sắp xếp chọn (Selection Sort)
function selectionSort(&$arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Hoán đổi giá trị
        $temp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $temp;
    }
}
?>