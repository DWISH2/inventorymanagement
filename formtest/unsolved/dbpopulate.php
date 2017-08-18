<!DOCTYPE html>
<html>
<head>
	<title>Data & camera</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">


<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	  <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <?php
    $servername="localhost";
    $username="im2017";
    $password="inventory2017";

    //Create connection
    $conn = new mysqli($servername, $username, $password);
    //check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    echo "Connected succesfu1lly";

    

    <img class="logoNoorlander" src="logoNoorlander.jpg" alt="logoNoorlander" height="127" width="250">

    <div class="container">
        <form class="col s12 m12" method="get" action="submit.php">
            <div class="row">
                <div class="input-field col s12 m4">
                    <input placeholder="Name" type="text" name="cName" id="name" data-length="128" class="validate">
                    <label for="cnamee">Item name</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="Quantity" type="text" name="cQty" id="name" data-length="10" class="validate">
                    <label for="cty">Quantity</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="Location" type="text" name="cLoc" id="name" data-length="3" class="validate">
                    <label for="name">Location</label>
                </div>
            </div>
            <div class="row">
                <div class="col s6 m2">
                    <a class='dropdown-button btn blue' href='#' data-activates='dropdown1'>Categorie</a>
                    <ul id='dropdown1' class='dropdown-content blue-text'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                    </ul>
                </div>
                <div class="col s6 m2">
                    <button class="btn waves-effect waves-light blue center" type="submit" name="action">Opslaan
                     <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
        </form>
    </div>
    ?>
    </body>
</html>