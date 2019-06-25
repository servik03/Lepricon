
<html>
<!-- Форма добавления данных -->
<head>
    <title> Create to Article </title>
</head>

<body>

<form method="post" name="Create" autocomplete="on" >

    <h1 style=" font-size: x-large"> Введите данные </h1>

    <p>  <input type="text" value="<?php echo $Result[0]['name']?>" name="Name"> Имя </p>

    <p>  <input type="text" value="<?php echo $Result[0]['description']?>" name="Description"> Описание </p>

    <p>  <input type="date" value="<?php echo $Result[0]['created_at']?>" name="Created_at" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}"/> Дата создания</p>

    <p>
        <input type="submit" value="Сохранить" >

        <input type="reset" value="Очистить">

        <button name="chancel" formaction="Index.php" > Отменить </button>
    </p>

</form>
</body>
</html></html>