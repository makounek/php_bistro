<?php

require('backends/connection-pdo.php');


    $sql = 'SELECT * FROM `orders` WHERE user_id = "'.$_SESSION['user_id'].'"';


$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>

<section class="infomodal">
    <div id="modal3" class="modal">
        <div class="modal-content center">
            <h4 class="black-text">Počet objednávek</h4>
            <h2 class="black-text"><?php echo count($arr_all) ?></h2>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
</section>