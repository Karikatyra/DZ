<?php
function getDirectoryContents($dir) {
    $contents = [];
    if (is_dir($dir)) {
        $items = scandir($dir);
        foreach ($items as $item) {
            if ($item !== '.' && $item !== '..') {
                $path = $dir . DIRECTORY_SEPARATOR . $item;
                $contents[] = [
                    'name' => $item,
                    'size' => is_file($path) ? filesize($path) : 0,
                    'is_dir' => is_dir($path)
                ];
            }
        }
    }
    return $contents;
}

function deleteFile($filePath) {
    if (file_exists($filePath)) {
        unlink($filePath);
    }
}

function renameFile($oldName, $newName) {
    if (file_exists($oldName)) {
        rename($oldName, dirname($oldName) . DIRECTORY_SEPARATOR . $newName);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        deleteFile($_POST['delete']);
    }
    if (isset($_POST['rename']) && !empty($_POST['new_name'])) {
        renameFile($_POST['old_name'], $_POST['new_name']);
    }
}

$currentDir = __DIR__;
$files = getDirectoryContents($currentDir);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Содержимое папки</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Содержимое папки: <?= htmlspecialchars($currentDir) ?></h1>

<table>
    <thead>
        <tr>
            <th>Наименование файла</th>
            <th>Размер (байты)</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($files as $file): ?>
            <tr>
                <td>
                    <?php if ($file['is_dir']): ?>
                        <strong><?= htmlspecialchars($file['name']) ?></strong>
                    <?php else: ?>
                        <span class="file-name"><?= htmlspecialchars($file['name']) ?></span>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="old_name" value="<?= htmlspecialchars($file['name']) ?>">
                            <input type="text" name="new_name" placeholder="Новое имя">
                            <button type="submit" name="rename">Переименовать</button>
                        </form>
                    <?php endif; ?>
                </td>
                <td><?= $file['size'] ?></td>
                <td>
                    <?php if (!$file['is_dir']): ?>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="delete" value="<?= htmlspecialchars($file['name']) ?>">
                            <button type="submit">Удалить</button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>