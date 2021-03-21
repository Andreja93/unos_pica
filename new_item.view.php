<?php require_once 'partials/head.php';?>
<?php require_once 'partials/navbar.php';?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h5 class="text-center my-3">Dodaj piće</h5>
            <form action="new_item.php" method="post">
                <input type="text" name="name" placeholder="naziv pića" class="form-control"><br>
                <input type="text" name="dose" placeholder="doza" class="form-control" ><br>
                <input type="number" name="price" placeholder="cena" class="form-control" ><br>
                <button class="btn btn-outline-warning" type="submit" >Add</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php';?>