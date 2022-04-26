<?php
    $username = $_POST["q1"];
    $password = $_POST["q2"];
    $keychron = $_POST["keychron"];
    $mouse = $_POST["mouse"];
    $headphone = $_POST["headphone"];
    $shipping = $_POST["q3"];

    echo "<div class = 'wrap'>";
    echo "<div class = 'backend'>";
    echo "Hello there, ".$username."!<br>";
    echo "Your password is: ".$password."<br>";

    echo "<table>";
    echo "<h3>Your Receipt</h3>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Keychron K2</td>";
    echo "<td>".$keychron."</td>";
    echo "<td> $90.00 </td>";
    $keychronPrice  = 90*$keychron;
    echo "<td> $". $keychronPrice. "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Razor DeathAdder V2 X</td>";
    echo "<td>".$mouse."</td>";
    echo "<td> $20.00 </td>";
    $mousePrice = 20*$mouse;
    echo "<td> $". $mousePrice. "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Razor Kraken Pro v2</td>";
    echo "<td>".$headphone."</td>";
    echo "<td> $50.00 </td>";
    $headphonePrice = 50*$headphone;
    echo "<td> $". $headphonePrice. "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>Shipping</td>";
    echo "<td colspan = '2'>".$shipping."</td>";
    if($shipping == "Free 7 day"){
        echo "<td> $0 </td>";
        $shipPrice = 0;
    }else if($shipping == "Over night"){
        echo "<td> $50 </td>";
        $shipPrice = 50;

    }else if($shipping == "Three day"){
        echo "<td> $5 </td>";
        $shipPrice = 5;
    }
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan = '3'>Total</td>";
    $total = $keychronPrice+$mousePrice+$headphonePrice+$shipPrice;
    echo "<td> $".$total."</td>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
?>

<style><?php include 'style.css'; ?></style>