<?php
// USING MYSQLI METHOD

// (1) connect to the database
$conn = mysqli_connect('localhost', 'shaun', 'test1234', 'ninja_pizza', 3307);

// check connection
if (!$conn) {
	// echo 'Connection error: ' . mysqli_connect_error();
}
//  (2) write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY create_at';

//  (3) get the result set (set of rows)
$result = mysqli_query($conn, $sql);
print_r($result);
//  (4) fetch the resulting rows as an arra 
// MYSQLI_ASSOC mode that mean we want the result as a associated array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// (6 Good pracitce) free the $result from memory (good practise)
mysqli_free_result($result);

// (7 Good pracitce) close connection
mysqli_close($conn);

print_r($pizzas);


?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>

</html>