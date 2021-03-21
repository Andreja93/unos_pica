<?php 
require_once 'functions.php';

$pica = getAll();

?>  

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
        <h2 class="text-center">Unešena pića</h2>
            <div class="row">
            <?php foreach($pica as $row): ?>
                <div class="col-4">
                    <div class="card m-3">
                        <div class="card-header"><?php echo $row['dose'] ?> l</div>
                        <div class="card-body"><?php echo $row['name'] ?></div>
                        <div class="card-footer"><?php echo $row['price'] ?> din</div>
                    </div>
                </div>
            <?php endforeach; ?>    
            </div>
        </div>
    </div>
</div>