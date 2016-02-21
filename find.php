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
                    //Steps 1&2: Connect to database server and the database

        $db = new mysqli(
                        'localhost',    //localhost
                        'studentid',    //username
                        'studentid',    //password
                        'dbUSERNAME_db' //database
                    );

                    if ($db->connect_errno) {
        die('Connection failed:'.connect_error);
        }

        //Step 3: Execute the SQL query

        //if ($categoryset) {
        $sql = "SELECT * FROM `B&B`";
       // } else {
        $sql = "SELECT * FROM `B&B`";
      //  }
        $result = $db->query($sql);

        //Step 4: Process a set of results

        while ($row = $result->fetch_array()) {

        //Step 5: Process an individual (row) result

        $newhtml =

<<<NEWHTML

        <article>
        <p><strong>ID: </strong></p>
            <p >{$row['bbid']}</p>
        <p><strong>Name: </strong></p>
            <p >{$row['bbname']}</p>
        <p><strong>Address: </strong></p>
            <p >{$row['address']}</p>
        <p></p>
        <p></p>
        <p></p>
         </article>


NEWHTML;

        print($newhtml);

        }

        //Clean up

        $result->close();
        $db->close();

        ?>

    </div>

    <footer id="Footer">
        <p>designed by TeamD, 2016</p>
    </footer>


</section>


</body>
</html>