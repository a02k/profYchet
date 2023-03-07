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
            <h1>Вопрос - Ответ</h1>
            <table class='table-application' style="border-bottom:1px solid #00664dbd;">
                <tr>
                    <td><b>Номер заявки</b></td>
                    <td><b>Имя</b></td>
                    <td><b>E-mail</b></td>
                    <td><b>Вопрос</b></td>
                    <td><b>Статус</b></td>
                </tr>
            </table>

            <?php
            $conn = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
            $sql = "SELECT * FROM contacts_users";
            if ($result = $conn->query($sql)) {
                foreach ($result as $row) {
                    echo "<table class='table-application' cellspacing='0' cellpadding='0'>";
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["question"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                }
            }
            $conn->exec($sql);
            ?>
        </div>

    </main>
    <footer>
        <?php include_once('layouts/footer.php') ?>
    </footer>

</body>

</html>