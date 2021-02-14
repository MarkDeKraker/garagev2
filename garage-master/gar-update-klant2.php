<doctype html>
    <head>
        <title>gar-update-klant2.php</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>

    <body>
    <h1> garage update klant2</h1>

    <?php

    $klantid = $_POST["klantidvak"];

    require_once "gar-connect.php";

    $klanten = $conn->prepare("
		select * from klant where klantid = :klantid
		");

    $klanten->execute(["klantid" => $klantid]);

    echo "<form action='gar-update-klant3.php' method='post'>";
    foreach($klanten as $klant)
    {

        echo "klantid: " .$klant["klantid"];
        echo "<input type='hidden' name='klantidvak'";
        echo "value= '" . $klant["klantid"] . " '> <br /> " ;

        echo "Naam: " ;
        echo "<input type='text' name='klantnaamvak'";
        echo "value= '" . $klant["klantnaam"] . " '> <br /> " ;

        echo "Adres: ";
        echo "<input type='text' name='klantadresvak'";
        echo "value= '" . $klant["klantadres"] . " '> <br /> " ;

        echo "Postcode: ";
        echo "<input type='text' name='klantpostcodevak'";
        echo "value= '" . $klant["klantpostcode"] . " '> <br /> " ;

        echo "Plaats: ";
        echo "<input type='text' name='klantplaatsvak'";
        echo "value= '" . $klant["klantplaats"] . " '> <br /> " ;

        echo "<input type='submit'>";
        echo "</form>";

    }

    echo "<input type='submit'>";
    echo "</form>";

    ?>
