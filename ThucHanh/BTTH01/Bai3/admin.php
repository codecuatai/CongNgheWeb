<?php
// Đường dẫn tới file CSV
$csvFile = '65HTTT_Danh_sach_diem_danh.csv';

// Mảng lưu dữ liệu
$accounts = [];

// Mở file CSV
if (($handle = fopen($csvFile, 'r')) !== false) {
    // Lấy header
    $header = fgetcsv($handle);

    // Đọc từng dòng
    while (($data = fgetcsv($handle)) !== false) {
        $accounts[] = array_combine($header, $data);
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</head>

<body>

    <h2>Danh sách sinh viên</h2>

    <table>
        <tr>
            <?php foreach ($header as $col): ?>
                <th><?= htmlspecialchars($col) ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($accounts as $acc): ?>
            <tr>
                <?php foreach ($header as $col): ?>
                    <td><?= htmlspecialchars($acc[$col]) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>