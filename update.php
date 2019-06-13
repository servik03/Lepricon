<?php
// Update
if (isset($_GET['id'])) {
    echo $_GET['id']; //Test

   $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $stmt = $ConnectDB->prepare("SELECT * FROM article WHERE id=:USER");
   $stmt->bindValue(':USER', $_GET['id']);
   $stmt->execute();
   $Result = $stmt->fetchAll();

}
?>
<?php
// Метод Create
if (isset($_POST['Name']) && ($_POST['Description']) && isset($_POST['Created_at'])) {
    // Условие когда форма вызывает сама себя
    if ($_POST['Name'] && $_POST['Description'] && $_POST['Created_at']) {
        //Проверяем чтобы все значения были заполнены connect to db
        $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $Create2DB = $Connect2DB -> prepare ( "UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id");
        $Create2DB -> bindParam(':name', $_POST['Name']);
        $Create2DB -> bindParam(':id', $_GET['id']);
        $Create2DB -> bindParam(':description', $_POST['Description']);
        $Create2DB -> bindParam(':created_at', $_POST['Created_at']);
        $Result = $Create2DB -> execute( );

    }
    header ("Location: index.php");

}
?>

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