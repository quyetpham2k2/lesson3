<?php

include_once 'main/Employee.php';
include_once 'main/EmployeeManager.php';

$manager = new EmployeeManager();
$dataFile = "employees.json";


if (file_exists($dataFile)) {
    $manager->loadFromFile($dataFile);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Nhân sự</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            padding: 16px;
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 24px;
        }

        form {
            margin-bottom: 32px;
        }

        form div {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            max-width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 16px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Quản lý Nhân sự</h1>

        <!-- Form thêm nhân viên -->
        <form method="POST">
            <div>
                <label for="firstName">Họ:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div>
                <label for="lastName">Tên:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div>
                <label for="dateOfBirth">Ngày sinh:</label>
                <input type="date" id="dateOfBirth" name="dateOfBirth" required>
            </div>
            <div>
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="jobPosition">Chức vụ:</label>
                <input type="text" id="jobPosition" name="jobPosition" required>
            </div>
            <div>
                <label for="salary">Lương:</label>
                <input type="number" id="salary" name="salary" min="0" required>
            </div>
            <button type="submit">Thêm nhân viên</button>
            <button style="padding: 0;">
                <a style="text-decoration: none; color: #fff; padding: 10px 16px; display: block;" href="../">
                    Trang chủ
                </a>
            </button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $address = $_POST['address'];
            $jobPosition = $_POST['jobPosition'];
            $salary = $_POST['salary'];

            try {

                $employee = new Employee($firstName, $lastName, $dateOfBirth, $address, $jobPosition, $salary);
                $manager->addEmployee($employee);


                $manager->saveToFile($dataFile);

                echo "<p style='color: green; font-weight: bold; text-align: center;'>Nhân viên đã được thêm thành công!</p>";
            } catch (Exception $e) {
                echo "<p style='color: red; font-weight: bold; text-align: center;'>Lỗi: " . $e->getMessage() . "</p>";
            }
        } ?>
        <br>
        <!-- Hiển thị danh sách nhân viên -->
        <h2>Danh sách Nhân viên</h2>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ Tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Chức vụ</th>
                    <th>Lương</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $employees = $manager->getEmployees();
                if (count($employees) > 0) {
                    foreach ($employees as $index => $employee) {
                        echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td>" . $employee->getFirstName() . " " . $employee->getLastName() . "</td>
                            <td>" . $employee->getDateOfBirth() . "</td>
                            <td>" . $employee->getAddress() . "</td>
                            <td>" . $employee->getJobPosition() . "</td>
                            <td>" . $employee->getSalary() . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Chưa có nhân viên nào.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>