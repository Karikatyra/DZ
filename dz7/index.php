<?php
require_once("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    
    $sql = "INSERT INTO first_work (value) VALUES ('$name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Запись добавлена";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM first_work WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Запись удалена";
    } else {
        echo "Ошибка: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM first_work ORDER BY action_date DESC");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>

<h2>Введите свое имя и фамилию</h2>
<form method="post" action="">
    <input type="text" name="name" required placeholder="Имя и Фамилия">
    <input type="submit" name="submit" value="Отправить">
</form>

<h2>Список записей</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>ФИО</th>
        <th>Дата и время</th>
        <th>Действия</th>
    </tr>
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <form method="post" action="edit.php">
                        <input type="text" name="value" value="<?php echo $row['value']; ?>" required>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="Редактировать">
                    </form>
                </td>
                <td><?php echo $row['action_date']; ?></td>
                <td><a href="?delete=<?php echo $row['id']; ?>">Удалить</a></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="4">Нет записей.</td></tr>
    <?php endif; ?>
</table>

</body>
</html>

<?php
$conn->close();
?>