<?php
include 'Sql/config.php';
if (isset($_POST['review_id'])) {
    $id = intval($_POST['review_id']);
    mysqli_query($conn, "DELETE FROM reviews WHERE id = $id");
}
header('Location: reviews.php');
exit;
?>
