<?php
$servername = "localhost:3307";
$username = "root";       // đổi theo MySQL của bạn
$password = "";           // đổi theo MySQL của bạn
$dbname = "congnghewebth";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // Thiết lập PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}



if (isset($_POST['upload'])) {
    if (isset($_FILES['quizfile']) && $_FILES['quizfile']['error'] == 0) {
        $content = file_get_contents($_FILES['quizfile']['tmp_name']);

        $blocks = preg_split("/\r?\n\s*\r?\n/", trim($content));

        foreach ($blocks as $block) {
            $lines = array_values(array_filter(array_map('trim', explode("\n", $block))));
            if (count($lines) < 6) continue;

            $questionText = $lines[0];
            $options = array_slice($lines, 1, 4);
            preg_match("/ANSWER:\s*([A-D])/", $lines[5], $match);
            $correct = $match[1] ?? '';

            // Lưu vào CSDL
            $stmt = $conn->prepare("INSERT INTO question (question, optionA, optionB, optionC, optionD, correct) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$questionText, $options[0], $options[1], $options[2], $options[3], $correct]);
        }

        echo "Upload và lưu dữ liệu vào CSDL thành công!";
    } else {
        echo "Vui lòng chọn file để upload.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="quizfile" accept=".txt">
    <button type="submit" name="upload">Upload Quiz</button>
</form>