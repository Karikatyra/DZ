<? 
require_once("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $uploadDir = 'complaint/';
        $uploadFile = $uploadDir . basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
            header("Location: index.php");
        } else {
            echo "Ошибка.";
        }
    }
} 

$img = $_FILES['img']['name'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$description = $_POST['description'];

$sql = "INSERT INTO `appeals` (img, tel, name, email, description) VALUES ('$img', '$tel', '$name', '$email' , '$description')";

$conn->query($sql);
header("Location: index.php");
?>