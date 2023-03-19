<html>
    <?php
    include 'connection.php';
    ?>
    <head>
        <title>

        </title>
    </head>
    <body>
        
<div class="menu">
    
</div>
<div class="d1" >
<?php

$stmt = $conn->prepare('SELECT count(Username) as total FROM customers');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print data on webpage
echo " customers:->" .$rows[0]['total'] . "<br>";


?>
</div>
<div class="d2" >
<?php

$stmt = $conn->prepare('SELECT count(Username) as total FROM customers where status="active"');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print data on webpage
echo " Active:->" .$rows[0]['total'] . "<br>";


?>
</div>
<div class="d3" >
<?php

$stmt = $conn->prepare('SELECT count(Username) as total FROM customers where status="suspended"');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print data on webpage
echo " Suspended:->" .$rows[0]['total'] . "<br>";


?>
</div>
<div class="d4" >
<?php

$stmt = $conn->prepare('SELECT count(Username) as total FROM customers where status="expired"');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print data on webpage
echo " Expired:->" .$rows[0]['total'] . "<br>";


?>
</div>
    </body>
</html>
