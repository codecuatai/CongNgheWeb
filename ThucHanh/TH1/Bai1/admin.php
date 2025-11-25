<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management of flowers</title>
    <style>
        .list_flowers table {
            width: 100%;
        }

        table,
        th,
        td {
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="add_flowers">
        <h1>Store Flowers</h1>
        <form action="admin.php">
            <label>Flower name:
                <input type="text" name="name">
            </label>
            <br>
            <label>Describe of flower:
                <input type="text" name="name">
            </label>
            <br>
            <label>Tên loài hoa:
                <input type="file" name="name">
            </label>
        </form>
    </div>
    <div class="list_flowers">
        <table>
            <tr>
                <th>Tên Loài Hoa</th>
                <th>Mô Tả</th>
                <th>Hình Ảnh</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </table>
    </div>
</body>

</html>