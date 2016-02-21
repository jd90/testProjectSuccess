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

$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


        try{
            $st = $conn-> query('SELECT * FROM [B&B]');

            foreach($st->fetchAll() as $row) {

                $newhtml =
                    <<<NEWHTML

<article>
    <p><strong>ID: </strong></p>
    <p >{$row[bbid]}</p>
    <p><strong>Name: </strong></p>
    <p >{$row[bbname]}</p>
    <p><strong>Address: </strong></p>
    <p >{$row[address]}</p>
    <p></p>
    <p></p>
    <p></p>
</article>


NEWHTML;
                print($newhtml);

            }


        }

        catch(PDOException $e)
        {print"$e";}



        ?>

    </div>

    <footer id="Footer">
        <p>designed by TeamD, 2016</p>
    </footer>


</section>


</body>
</html>