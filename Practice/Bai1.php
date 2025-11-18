
<?php 
$currentYear = date("Y"); // Lấy năm hiện tại
$years = range(1990, $currentYear); 
$products = [
   ['name' => 'Sản phẩm 1', 'price' => 1000],
   ['name' => 'Sản phẩm 2', 'price' => 2000],
   ['name' => 'Sản phẩm 3', 'price' => 3000]
];
class Student{
   public $name;
    public $scope;
   function hello(){
       echo "Xin chào mn";
   }
}
$student1 = new Student();
$student1->hello();
$student1->name = "Tài";
echo $student1->name;


 class Person {
 private $name;
 private $hobbies;
 public function __construct($name) {
 $this->name = $name;
 $this->hobbies = array();
 }
 public function addHobby($hobby) {
 $this->hobbies[] = $hobby;
 }
 public function getHobbies() {
 return $this->hobbies;
 }
 }

 $person = new Person("Alice");
 $person->addHobby("Reading");
 $person->addHobby("Cycling");
 print_r($person->getHobbies()); // In ra mảng sở thíc
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Chọn Năm</title>
</head>
<body>
   <h1>Chọn Năm</h1>
   <form action="">
       <label for="year">Năm:</label>
       <select name="year" id="year">
<?php foreach ($years as $year): ?>
               <option value="<?= $year ?>"><?= $year ?></option>
<?php endforeach; ?>
       </select>
       <input type="submit" value="Submit">
   </form>
   <table border="1">
       <tr>
           <th>Tên Sản Phẩm</th>
           <th>Giá</th>
       </tr>
       
<?php foreach ($products as $product): ?>
           <tr>
               <td><?= htmlspecialchars($product['name']) ?></td>
               <td><?= htmlspecialchars($product['price']) ?> VND</td>
           </tr>
<?php endforeach; ?>
   </table>
</body>
</html>


