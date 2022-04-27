<html>
    <table>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);

            for($i = 0; $i <= 10; $i++) {	
                echo "<tr>"; 
                for($j = 0; $j <= 10; $j++) {
                    if($j == 0 && $i == 0) echo"<td></td>";
                    else if($i == 0) echo"<td>$j</td>";
                    else if($j == 0) echo"<td>$i</td>";
                    else {
                        $multiple = ($i * $j);
                        echo "<td>$multiple </td>";
                    }
                }
                echo "<tr/>";
            }
        ?>
    </table>
</html>