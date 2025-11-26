<?php
// Bắt đầu session nếu muốn (nếu cần lưu trữ điểm)
session_start();

// Đọc dữ liệu từ file Quiz.txt
$content = file_get_contents("Quiz.txt");

// Tách theo 1 hoặc nhiều dòng trống
$blocks = preg_split("/\r?\n\s*\r?\n/", trim($content));

$questions = [];

foreach ($blocks as $block) {
    // Loại bỏ dòng trống trong block
    $lines = array_values(array_filter(array_map('trim', explode("\n", $block))));

    // Kiểm tra nếu thiếu dòng → bỏ qua block
    if (count($lines) < 6) {
        continue;
    }

    $questionText = $lines[0];
    $options = array_slice($lines, 1, 4);

    // Tìm ANSWER
    $answerLine = $lines[5];
    preg_match("/ANSWER:\s*([A-D])/", $answerLine, $match);

    $correct = $match[1] ?? '';

    // Lưu vào danh sách câu hỏi
    $questions[] = [
        "question" => $questionText,
        "options"  => $options,
        "correct"  => $correct
    ];
}

// Xử lý khi submit form
$score = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, "q") === 0) {
            $index = substr($key, 1);
            $chosen = $_POST["q$index"];
            $correct = $_POST["correct$index"];

            if ($chosen == $correct) {
                $score++;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Bài thi trắc nghiệm</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }

        .question {
            margin-bottom: 25px;
        }

        .q-title {
            font-weight: bold;
        }

        button {
            padding: 8px 15px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <h2>Bài thi trắc nghiệm Android</h2>

    <?php if ($score !== null): ?>
        <h3>Kết quả của bạn: <?= $score ?> điểm</h3>
        <hr>
    <?php endif; ?>

    <form action="" method="post">
        <?php foreach ($questions as $i => $q): ?>
            <div class="question">
                <div class="q-title"><?= ($i + 1) . ". " . $q["question"] ?></div>

                <?php foreach ($q["options"] as $opt): ?>
                    <?php $value = substr($opt, 0, 1); ?>
                    <label>
                        <input type="radio" name="q<?= $i ?>" value="<?= $value ?>">
                        <?= $opt ?>
                    </label><br>
                <?php endforeach; ?>

                <!-- Lưu đáp án đúng -->
                <input type="hidden" name="correct<?= $i ?>" value="<?= $q['correct'] ?>">
            </div>
        <?php endforeach; ?>

        <button type="submit">Nộp bài</button>
    </form>

</body>

</html>