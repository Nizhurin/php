<?php 
    $path = 'bd/users.json';
    $content = file_get_contents($path);
    $json = json_decode($content);
    var_dump($json);
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo '';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Достигнута максимальная глубина стека';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Некорректные разряды или несоответствие режимов';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Некорректный управляющий символ';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Синтаксическая ошибка, некорректный JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Некорректные символы UTF-8, возможно неверно закодирован';
        break;
        default:
            echo ' - Неизвестная ошибка';
        break;
    }
?>

Добавить
<form method="POST">
   <input type="text" />
</form>

<ul>
    <?php foreach($json as $item): ?>
        <li><?php echo $item->username ?> <a href="#"> Удалить </a> <a href="#"> Редактировать </a></li>
    <?php endforeach; ?>
</ul>