<?php require_once 'partials/head.php';?>
<?php require_once 'partials/navbar.php';?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
        <?php if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string(db(),$_POST['search']);
            $sql = "SELECT * FROM drink WHERE name LIKE '%$search%'";
            $query = mysqli_query(db(),$sql);
            $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
            
        }
        dd($result);
        ?>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php';?>