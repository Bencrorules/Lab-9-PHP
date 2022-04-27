<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <p>Receipt</p>
    <?php 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $apples = $_POST['apples'];
        $bananas = $_POST['bananas'];
        $grapes = $_POST['grapes'];
        $shipping = $_POST['shipping'];
                
        echo "Welcome $username, thank you for shopping with us today<br>";
        echo "Customer Password: $password<br>";

        $appleTotal = 3.99 * $apples;
        echo "Apples: $3.99 X $apples<br>";
        $bananaTotal = 3.99 * $bananas;
        echo "Bananas: $3.99 X $bananas<br>";
        $grapeTotal = 3.99 * $grapes;
        echo "Grapes: $3.99 X $grapes<br>";

        $shippingTotal = 0;
        if($shipping == "Free 7 Day") $shippingTotal = 0;
        else if($shipping == "$5.00 Three Day") $shippingTotal = 5;
        else if($shipping == "$50.00 Over-Night") $shippingTotal = 50;
        echo "$shipping: $$shippingTotal<br><br>";

        $transactionTotal = $appleTotal + $bananaTotal + $grapeTotal + $shippingTotal;
        echo "Total: $$transactionTotal<br>";
    ?>
</html>