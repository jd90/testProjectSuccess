<!DOCTYPE html>
<html>
<head>
    <title>Team D's B'n'B Hub!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section>

    <header id="header">

        <h1 class="title"><strong>Welcome To Team D's B&B Heaven</strong></h1>

        <h5>"Where B&Bs come to die"</h5>

    </header>
    <p></p>

    <div class="nav">
        <h3><strong>MENU</strong></h3>
        <a href="index.html"><h5>Home</h5></a>
        <a id="find" href="find.php"><h5 class="currentPage" >Search</h5></a>
        <a id="owner" href="add.html"><h5>Owners Page</h5></a>
    </div>

    <div class="main">
        <h3 class="pagetitle" >Let's Find You A B&B...</h3>

        <button id="button1">Display</button>

        <?php

        $mysql = new PDO(
            'mysql:host=bbsqldb.database.windows.net;port=1433;dbname=SQL_BB',
            'teamdsqldb',
            'Sql20022016*'
        );

        if ($mysql->connect_errno) {
            die("Connection failed: [`.$db->connect_error.`]");
        }
        else{
            die("ya dancer!");

        }


        ?>

    </div>

    <footer id="Footer">
        <p>designed by TeamD, 2016</p>
    </footer>


</section>


</body>
</html>