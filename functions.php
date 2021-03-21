<?php require_once 'config.php' ;?>

<?php 
function db(){
   $con= mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die('Please check your connection');
   return $con;
}
function dd($val){
    echo "<pre>";
    die(var_dump($val));
    echo "</pre>";
}

 function getAll(){
    $sql = "SELECT * FROM  drink";
    $query = mysqli_query(db(),$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    
    return $result;
} 
?>