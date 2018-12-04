<html>
<body>
    <?php
        require_once "Connection.php";
        $db = new Connection('mysql:host=berlin.iut.local;dbname=dblarossi', 'larossi', 'achanger');
        $query = 'SELECT * FROM User WHERE Username=:name AND Password=:pwd';
        $query2 = 'INSERT into User values(:username,:password,:name,:surname,:mail)';
        $res = $db->getResults($query, array(
                ':name' => array('larossi', PDO::PARAM_STR),
                ':pwd' => array('larossi', PDO::PARAM_STR)
        ));
        $res2 = $db->executeQuery($query2, array(
            ':username' => array('madatin', PDO::PARAM_STR),
            ':password' => array('madatin', PDO::PARAM_STR),
            ':name' => array('Datin', PDO::PARAM_STR),
            ':surname' => array('Maxime', PDO::PARAM_STR),
            ':mail' => array('madatin@etu.fr', PDO::PARAM_STR)
        ));

        foreach($res as $row) {
            var_dump($row);
            foreach($row as $val) {
                print($val);
                print('<br>');
            }
            print('<br>');
        }
        var_dump($res2);

    ?>
</body>
</html>