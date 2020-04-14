<?php

$host = 'localhost';
$username = 'root';
$password = "";
$db = 'db_covid';

//Konek To Database
$con = mysqli_connect($host, $username, $password, $db) or die('Database Not Found!');

class Covid
{

    function insert($table, array $field, $redirect)
    {
        global $con;
        $sql = "INSERT INTO $table SET "; //space juga ngaruh

        foreach ($field as $key => $value) {
            $sql .= " $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $jalan = mysqli_query($con, $sql);
        if ($jalan) {
            echo "<script>alert('Selamat Datang:)');
                document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Data Gagal Disimpan!');
                document.location.href='index.php'</script>";
        }
    }

    public function validateHtml($field)
    {
        $field = htmlspecialchars($field);
        return $field;
    }
}

?>