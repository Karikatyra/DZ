<!DOCTYPE html>
<html>
<head>
<title>Домашнее задание</title>
</head>
<body>

<h1>Домашнее задание</h1>

<form method="post" action="">
  <label for="start_date">Дата начала:</label>
  <input type="date" id="start_date" name="start_date"><br><br>
  <label for="end_date">Дата окончания:</label>
  <input type="date" id="end_date" name="end_date"><br><br>
  <input type="submit" value="Готово">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $start_date = $_POST["start_date"];
  $end_date = $_POST["end_date"];

  $start_timestamp = strtotime(date("Y-m-d", strtotime($start_date)));
  $end_timestamp = strtotime(date("Y-m-d", strtotime($end_date)));

  $days = ($end_timestamp - $start_timestamp) / (60 * 60 * 24);
  $minutes = ($end_timestamp - $start_timestamp) / (60 * 60) * 60;

  echo "Количество дней между выбранными датами: " . round($days) . "; Количество минут между выбранными датами: " . round($minutes);
  }
?>

</body>
</html>