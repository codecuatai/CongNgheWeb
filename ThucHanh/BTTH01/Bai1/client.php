<?php
require_once './data.php';
session_start();

// Nếu trong session có hoa thì gộp thêm vào danh sách
if (isset($_SESSION['flowers'])) {
    $data_flowers = array_merge($data_flowers, $_SESSION['flowers']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Những loài hoa</title>
</head>

<body>
    <h1>Các loài hoa đẹp</h1>
    <ul>
        <?php
        $count = 0;
        foreach ($data_flowers as $flower): ?>
            <li>
                <h3>
                    <?php
                    $count++;
                    echo $count . '. ' . $flower['name'];
                    ?>
                </h3>

                <p><?php echo $flower['describe']; ?></p>

                <img src="<?php echo $flower['url1']; ?>" alt="Hình ảnh hoa" width="250">

                <?php if (!empty($flower['url2'])): ?>
                    <img src="<?php echo $flower['url2']; ?>" alt="Hình ảnh hoa" width="250">
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>