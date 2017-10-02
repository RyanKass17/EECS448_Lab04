<?php
    echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
    $quant1 = $_POST['quantitySolo'];
    $quant2 = $_POST['quantityFull'];
    $quant3 = $_POST['quantityDec'];
    $ship = $_POST['Shipping'];
    $password = $_POST['password'];
    $total = 20*$quant1+7*$quant2+10000*$quant3+$ship;
    echo "Your password is: " . $password . "<br>";
    echo '<table border="1">';
    echo '<tr>' . '<th>' . "" . '</th>';
    echo '<th>' . "Quantity" . '</th>';
    echo '<th>' . "Cost per Item" . '</th>';
    echo '<th>' . "Subtotal" . '</th>' . '</tr>';
    echo '<tr>'. '<th>' . "SOLO Cup" . '</th>';
    echo '<td>' . $quant1 . '</td>';
    echo '<td>' . "$20.00" . '</td>';
    echo '<td>' . "$" . 20*$quant1 . '</td>';
    echo '</tr>';
    echo '<tr>'. '<th>' . "Full House DVD" . '</th>';
    echo '<td>' . $quant2 . '</td>';
    echo '<td>' . "$7.00" . '</td>';
    echo '<td>' . "$" . 7*$quant2 . '</td>';
    echo '</tr>';
    echo '<tr>'. '<th>' . "Declaration of Independence" . '</th>';
    echo '<td>' . $quant3 . '</td>';
    echo '<td>' . "$10,000.00" . '</td>';
    echo '<td>' . "$" . 10000*$quant3 . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>' . "Shipping" . '</th>';
    if ($ship == 0)
    {
      echo '<td>' . "7 Day" . '</td>';
    }
    else if($ship == 5)
    {
      echo '<td>' . "3 Day" . '</td>';
    }
    else if($ship == 50)
    {
      echo '<td>' . "Overnight" . '</td>';
    }
    echo '<td>' . "" . '</td>';
    echo '<td>' . "$" . $ship . '</td>' . '</tr>';
    echo '<tr>';
    echo '<th>' . "Total Cost" . '</th>';
    echo '<td>' . "" . '</td>';
    echo '<td>' . "" . '</td>';
    echo '<th>' . "$" . $total . '</th>';
    echo '</tr>';
    echo '</table>';
?>
