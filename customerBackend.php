<?php

	$pasteAmount = $_POST["toothpaste"];
	$balmAmount = $_POST["balm"];
	$mintAmount = $_POST["mints"];
	$shipAmount = $_POST["shipping"];
	$total = ($pasteAmount * 5) + ($balmAmount * 3) + ($mintAmount * 8) + $shipAmount;
	
	$name = $_POST["username"];
	$pswrd = $_POST["password"];
	
	if ($shipAmount == 0)
	{
            $ship = "Free 7 Day";
	}
	else if ($shipAmount == 50)
	{
            $ship = "Over Night";
        }
        else
        {
            $ship = "Three Day";
        }
        
        
	echo("Your order has been processed.<br><br>Username: ".$name."<br>Password: ".$pswrd."<br><br><br><br>");
	
	echo "<table border='10' align='center' style='width:100%'>";
			

			echo "<tr>";
				echo "<td>"; echo "</td>";
				echo "<td>"; echo "Quantity"; echo "</td>";
				echo "<td>"; echo "Cost Per Item"; echo "</td>";
				echo "<td>"; echo "Sub Total"; echo "</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>"; echo "Toothpaste"; echo "</td>";
				echo "<td>"; echo $pasteAmount; echo "</td>";
				echo "<td>"; echo "$5.00"; echo "</td>";
				echo "<td>"; echo "$".($pasteAmount*5); echo "</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>"; echo "Lip Balm"; echo "</td>";
				echo "<td>"; echo $balmAmount; echo "</td>";
				echo "<td>"; echo "$3.00"; echo "</td>";
				echo "<td>"; echo "$".($balmAmount*3); echo "</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>"; echo "Mints"; echo "</td>";
				echo "<td>"; echo $mintAmount; echo "</td>";
				echo "<td>"; echo "$8.00"; echo "</td>";
				echo "<td>"; echo "$".($mintAmount*8); echo "</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>"; echo "Shipping"; echo "</td>";
				echo "<td>"; echo $ship; echo "</td>";
				echo "<td>"; echo "</td>";
				echo "<td>"; echo "$".$shipAmount; echo "</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>"; echo "Total Cost"; echo "</td>";
				echo "<td>"; echo "</td>";
				echo "<td>"; echo "</td>";
				echo "<td>"; echo "$".$total; echo "</td>";
			echo "</tr>";
        echo "</table>";

	
	

        
	







?>