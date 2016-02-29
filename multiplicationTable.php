<?php
        for ($i=1; $i<=100; $i++)
        {
            echo "<tr>".PHP_EOL;
            
            for ($j=1; $j<=100; $j++)
            {
                $num = $i*$j;
                echo "<td>".$num."</td>".PHP_EOL;
            }
        }
?> 
