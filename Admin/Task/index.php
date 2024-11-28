<?php
include "../inc/header.php";
include "../inc/nav.php";
?>
<?php
// $id =  $_SESSION['user']['id'];
$limit = 4;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit;
$count_total_data = "SELECT * FROM tasks ";
$count_total_result = $conn->query($count_total_data);
// print_r($count_total_result);
$total_data = $count_total_result->num_rows;
$total_pages = ceil($total_data / $limit)


?>
<div class="container">
    <a href="./create.php" class="btn btn-primary my-2">Create</a>
    <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <!-- <th scope="col">For</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $select_query = "SELECT * FROM tasks LIMIT $offset ,$limit ";
            $select_result = $conn->query($select_query);
            $tasks = mysqli_fetch_all($select_result, MYSQLI_ASSOC);
            $i = 1;
            foreach ($tasks as $task) {
            ?>
                <tr>
                    <th scope="row"> <?php echo $i++ ?> </th>
                    <td><?= $task['title'] ?></td>
                    <td><?= $task['description'] ?></td>
                    <td>
                        <a href="./edit.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="./delete.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm">
            <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?> ">
                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">Previous</span>
                </a>
            </li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
            ?>
                <li class="page-item <?= $i == $page ? 'active' : '' ?> "><a class="page-link" href="?page=<?= $i ?>"> <?= $i ?> </a></li>
            <?php
            }
            ?>
            <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="img-scrapper">
        <div class="form-group col-12 mb-0">
            <label class="col-form-label">Image</label>
        </div>
        <!-- image box where image from model come -->
        <div class="input-group mb-3 col-12">
            <input id="imagebox" type="text" class="form-control" disabled name="img"
                readonly>
            <!-- img come above ☝️ -->
            <div class="input-group-append">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#modalId">
                    Choose Image
                </button>
            </div>
        </div>
        <!-- we use modal to choose image -->
        <div class="mb-3">
            <!-- Modal trigger button -->

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- styled to see which image is selected  as type radio opacity is 0-->
                                <style>
                                    [type=radio]:checked+img {
                                        outline: 2px solid #f00;
                                    }
                                </style>

                                <?php
                                $select_query = "SELECT * FROM files";
                                $select_result = mysqli_query($con, $select_query);
                                $i = 0;
                                while ($data_select = mysqli_fetch_array($select_result)) {
                                    $i++;
                                ?>
                                    <!-- for choosing 1 image from multiple option we use type radio -->
                                    <label>
                                        <input type="radio" name="img"
                                            value="<?php echo $data_select['filelink']; ?>"
                                            style="opacity: 0;" />
                                        <img src="<?php echo "../img/" . $data_select['filelink']; ?>"
                                            alt="" height="100px;" width="100px;"
                                            style="margin-right:20px;">
                                    </label>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal"
                                onclick=" firstFunction()">Save</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

                function firstFunction() {
                    var x = document.querySelector('input[name=img]:checked').value;
                    document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
                }
            </script>
        </div>

    </div>


</div>

<?php include "../inc/footer.php"; ?>