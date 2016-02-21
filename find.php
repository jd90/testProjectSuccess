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

    <p>Search a B&B to find its address</p>
        <form action="results.php" method="POST" ">

            <table border="0" cellPadding="5" cellSpacing="5">
                <tr>
                    <td>
                        <label for="name">B&B Name</label>
                    </td>
                    <td>
                        <select id="name" name="name">

                            <?php
                            $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
                            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                            try{
                            $st = $conn-> query("SELECT * FROM [B&B]");
                            foreach($st->fetchAll() as $row) {
                            $newhtml =
<<<NEWHTML
                            <option value="{$row[bbname]}">{$row[bbname]}</option>
NEWHTML;
                            print($newhtml);
                            }

                            }

                            catch(PDOException $e)
                            {print"$e";}

                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><button>Submit</button></td>
                </tr>
            </table>


        </form>

    </div>

    <footer id="Footer">
        <p>designed by TeamD, 2016</p>
    </footer>


</section>


</body>
</html>