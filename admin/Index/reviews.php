<!DOCTYPE html>
<html>
<head>
    <title>Customer Reviews - PNG Bilas Admin</title>
    <link rel="icon" href="/E-Commerce/Home/Images/icon/MCS.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- ✅ DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .star {
            color: #ffc107;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
include 'include/sidebar.php';
include 'include/top-header.php';
include 'Sql/config.php';
?>

<div class="container-fluid body-area mt-5">
    <div class="row mt-3">
        <div class="col-md-12 col-sm-12">
            <h5 class="pt-4 ml-3">Customer Reviews</h5>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 lower-area mt-4 p-3">
        <div class="table-responsive">
            <table id="dtBasicExample" class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // ✅ Fetch reviews from DB
                $sql_reviews = "SELECT r.id, r.customer_name, r.product_name, r.rating, r.comment, r.created_at
                                FROM reviews r
                                ORDER BY r.created_at DESC";
                $result_reviews = mysqli_query($conn, $sql_reviews);

                if (mysqli_num_rows($result_reviews) > 0) {
                    while ($row = mysqli_fetch_assoc($result_reviews)) {

                        // Create star rating display
                        $stars = '';
                        for ($i = 0; $i < $row['rating']; $i++) {
                            $stars .= '<i class="fas fa-star star"></i>';
                        }
                        for ($i = $row['rating']; $i < 5; $i++) {
                            $stars .= '<i class="far fa-star star"></i>';
                        }

                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['customer_name']}</td>
                                <td>{$row['product_name']}</td>
                                <td>{$stars}</td>
                                <td>{$row['comment']}</td>
                                <td>" . date('d M Y', strtotime($row['created_at'])) . "</td>
                                <td>
                                    <form method='post' action='delete_review.php' onsubmit='return confirm(\"Are you sure?\");'>
                                        <input type='hidden' name='review_id' value='{$row['id']}'>
                                        <button type='submit' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i> Delete</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center text-muted'>No reviews found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>

<script>
$(document).ready(function() {
    $('#dtBasicExample').DataTable();
});
</script>

</body>
</html>
