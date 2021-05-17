
<?php
require_once 'includes/header.php';
?>

<?php
    if (isset($_SESSION['sessionId'])) {
        echo "You are logged in!";
    } else {
        echo "Home";
    }
?>

<?php
require_once 'includes/footer.php';
?>


<!-- 
$sql = "SELECT * FROM users WHERE id = 1";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "No results found";
} -->