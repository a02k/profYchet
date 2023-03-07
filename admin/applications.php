<?php include_once('session.php') ?>

<?php
if (guest()) {
    echo 'Ошибка 403 <br>';
    echo 'У вас нет доступа к этой странице';
    die;
}

require_once('../src/db/Connection.php');

use \Src\Db\Connection;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $title = 'Заявки';
    include_once('layouts/head.php')
    ?>
</head>

<body>
    <header class="application-header">
        <a href="admin.php">Выйти</a>
    </header>

    <main class="main-application">
        <?php include_once('layouts/leftMenu.php') ?>
        <div class="table-application">
            <h1>Все заявки</h1>
            <table class='table-application' style="border-bottom:1px solid #00664dbd;">
                <tr>
                    <td><b>Номер заявки</b></td>
                    <td><b>Имя</b></td>
                    <td><b>Телефон</b></td>
                    <td><b>Дата</b></td>
                    <td><b>Статус</b></td>
                </tr>
            </table>

            <?php
            $result = Connection::getResult(
                "SELECT * FROM free_bell"
            );
            foreach ($result as $row) {
                echo "<table class='table-application' cellspacing='0' cellpadding='0'>";
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
            ?>
        </div>

    </main>
    <footer>
        <?php include_once('layouts/footer.php') ?>
    </footer>

</body>

</html>