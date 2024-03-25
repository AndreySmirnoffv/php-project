<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Примерный проект</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #666;
        }
        .knowledge {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать на мой сайт!</h1>
        
        <p>Приветствую всех посетителей моего сайта!</p>

        <?php
        $author_greeting = "Добро пожаловать на мой сайт!";
        $name = "Иван";
        $surname = "Петров";
        $age = 25;
        $city = "Москва";
        ?>

        <h2>Данные о пользователе:</h2>
        <ul>
            <li>Имя: <?php echo $name; ?></li>
            <li>Фамилия: <?php echo $surname; ?></li>
            <li>Возраст: <?php echo $age; ?></li>
            <li>Город: <?php echo $city; ?></li>
        </ul>

        <div class="knowledge">
            <h2>Мои знания:</h2>
            <p>Различные типы переменных: <?php echo gettype($name), ', ', gettype($age); ?></p>
            <p>Операции и способы вывода кода: <?php echo "Операции в PHP: арифметические, сравнения, логические и др."; ?></p>
            <p>Результаты в браузере: <?php echo "Пример вывода в браузер: ", $author_greeting; ?></p>
        </div>
    </div>
</body>
</html>
