<?php
session_start();
include 'config/Controller.php';
error_log(0);
error_reporting(0);
$covid = new Covid();
$table = 'users';
$cek_field = $_POST['nama'];
$field = array(
    'nama' => $covid->validateHtml($cek_field)
);
$redirect = 'master/pageUsers.php';
if (isset($_POST['next'])) {
    if ($cek_field == "") {
        echo  "<script>alert('Silahkan isi field terlebih dahulu!');
    document.location.href='index.php'</script>";
    } else {
        $covid->insert($table, $field, $redirect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background-color: deepskyblue;
            background-size: cover;
        }

        .position {

            margin-top: 210px;
            position: fixed;
            margin-left: 523px;
        }

        .position2 {
            margin-top: 180px;
            position: fixed;
            margin-left: 518px;
        }

        input[type="submit"] {
            border-radius: 50px;
            outline: none;
            border: none;
            margin: 270px 0 0 567px;
            padding: 10px;
            width: 200px;
            position: absolute;
            background-color: #2fe5a8;
            cursor: pointer;
            transition: 0.5s;
        }

        em {
            font-size: 40px;
            margin-left: 510px;
            margin-top: 120px;
            top: 0;
            position: absolute;
        }

        .section1 {
            height: 100%;
            width: 665px;
            background-color: white;
            position: absolute;
        }

        .em2 {
            margin-left: 670px;
        }

        .font {
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        input[type="text"] {
            border: none;
            outline: none;
            background: transparent;
            border-bottom: 4px solid red;
            padding: 15px;
            width: 300px;
            font-family: century;
            font-size: 15px;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #a8e490;
        }

        @media only screen and (max-width: 1020px) {
            .container {
                margin-left: -450px;
            }
        }

        @media only screen and (max-width: 720px) {
            .container {
                margin-left: -450px;
            }
        }

        @media only screen and (max-width: 1020px) {
            .container {
                margin-left: -450px;
            }
        }

        @media only screen and (max-width: 1080px) {
            .container {
                margin-left: -450px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section1"></div>
            <em style="color: deepskyblue;" class="resp">&#8592; Covid</em> <em style="color: white;" class="em2">Survey &#8594;</em>
                <form method="post">
                    <div class="font position2">Masukan Nama Untuk Melanjutkan : </div>
                        <input type="text" class="position" name="nama" placeholder="your name..." autocomplete="off" autofocus>
                <input type="submit" name="next" value="Next">
            </form>
        </div>
    </body>
</html>