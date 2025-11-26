<?php
require_once './data.php';
session_start();

if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = [];
}

if (isset($_POST['name']) && isset($_POST['describe'])) {

    $name = trim($_POST['name']);
    $describe = trim($_POST['describe']);
    $imagePath = '';

    // Xử lý file upload
    if (!empty($_FILES['image']['name'])) {
        $filename = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        $imagePath = './images/' . $filename;

        move_uploaded_file($tmp, $imagePath);
    }

    // chỉ thêm nếu name + mô tả + có ảnh
    if ($name !== "" && $describe !== "" && $imagePath !== "") {

        $newFlower = [
            "name" => $name,
            "describe" => $describe,
            "url1" => $imagePath,
            "url2" => '',
        ];

        $_SESSION['flowers'][] = $newFlower;
    }
}

$data_flowers = array_merge($data_flowers, $_SESSION['flowers']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management of flowers</title>
    <style>
        table {
            width: 100%;
        }

        input {
            width: 100%;
        }

        h1 {
            text-align: center;
        }

        .list_flowers table,
        .list_flowers th,
        .list_flowers td {
            border: solid 1px black;
        }

        #submit {
            width: 200px;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="add_flowers">
        <h1>Quản trị những loại hoa</h1>
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th><label>Flower name:</label></th>
                    <th><input type=" text" name="name">
                    </th>
                </tr>
                <tr>
                    <th> <label>Describe of flower:</label></th>
                    <th><input type="text" name="describe"></th>
                </tr>
                <tr>
                    <th><label>Image:</label></th>
                    <th><input type="file" name="image"></th>
                </tr>
            </table>
            <input id="submit" type="submit" value="Lưu hoa">
        </form>
    </div>

    <br><br>

    <div class="list_flowers">
        <table>
            <tr>
                <th>Tên Loài Hoa</th>
                <th style="width:30%">Mô Tả</th>
                <th style="width:510px">Hình Ảnh</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            <?php foreach ($data_flowers as $flower): ?>
                <tr>
                    <td><?php echo $flower['name'] ?></td>
                    <td><?php echo $flower['describe'] ?></td>
                    <td>
                        <img src="<?php echo $flower['url1'] ?>" alt="Hình ảnh" width="250" height="250">
                        <img src="<?php echo $flower['url2'] ?>" alt="Hình ảnh" width="250" height="250">
                    </td>
                    <td><button>Xóa</button></td>
                    <td><button>Sửa</button></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>