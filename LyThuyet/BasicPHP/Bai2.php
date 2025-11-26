<?php 

    // echo "we talk about array<br>";
    // $arr = [1,2,3,4,5];
    // print_r($arr);

    // $age = 15;
    // if($age >= 18){
    //     echo "Bạn đã trưởng thành";
    // }else{
    //     echo "Bạn chưa trưởng thảnh";
    // }
    // $date_time = date("H m s");
    // echo $date_time;

    // $name = $_POST['name']?? '';
    // $password = $_POST['password'] ?? '';
    // echo $name;
    // echo $password;

    session_start();
    if(isset($_POST['submit'])){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if($name = 'Tai' && $password='123456'){
            $_SESSION['name'] = $name;
            header('Location: Bai1.php');
        }else{
            echo 'Incorrect password';
        }
    }


    setcookie('name', "Nihao nimen", time() +243600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>", method="POST">
        <label>Your name: <input type="text" name="name" id="name"></label>
        <label>password: <input type="password" name="password" id="password"></label>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>