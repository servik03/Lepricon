<?php
// Метод Create
if (isset($_POST['NAME']) && ($_POST['Description']) && isset($_POST['Created_at']))
 // Условие когда форма вызывает сама себя
if ($_POST['NAME'] && $_POST['Description'] && $_POST['Created_at'])
    //Проверяем чтобы все значения были заполнены connect to db
    $Connect2DB = new PDO("postgresql:host=localhost; dbname=employses", "postgres", 'postgres', array());


?>

<html>
<!-- Форма добавления данных -->
<head>
    <title> Create to Article </title>
</head>

<body>

<form action="Create.php" method="post" name="Create" autocomplete="on" >

    <h1 style=" font-size: x-large"> Введите данные </h1>

    <p>  <input type="text" name="Name"> Имя </p>

    <p>  <input type="text" name="Description"> Описание </p>

    <p>  <input type="date"  name="Created_at" value="<?php echo date('Y-m-d H:i:s', Time());?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}"/> Дата создания</p>

    <p>
        <input type="submit" value="Сохранить" >

        <input type="reset" value="Очистить">

        <button name="chancel" formaction="Index.php" > Отменить </button>
    </p>

</form>
</body>
</html></html>