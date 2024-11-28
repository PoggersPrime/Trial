<?php
include "../inc/header.php";
include "../inc/nav.php";
?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // var_dump($id);
    if ($id != "") {
        $select_query = "SELECT * FROM tasks WHERE id = $id";
        $update_result = $conn->query($select_query);
        $task = mysqli_fetch_assoc($update_result);
    }
}
?>



<?php

if (isset($_POST['submit'])) {
    // $id = $task['id'];
    $title = $_POST['title'];
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];
    $description = $_POST['description'];

    if ($title != "" && $description != "") {
        $update_query = "UPDATE tasks SET title ='$title',description='$description' WHERE id = $id ";
        $update_result = $conn->query($update_query);
        if ($update_result) {
?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success fully insereted data
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                window.location.href = "./index.php";
            </script>
<?php

        }
    }
}
?>

<div class="container">
    <div class="px-4">
        <a href="./manage.php" class="btn btn-primary">Manage</a>
    </div>
    <form class="row g-3 needs-validation p-5 m-3 shadow rounded-3" enctype="multipart/form-data" method="post">
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" class="form-control" id="validationCustom01" name="title" required value="<?= $task['title'] ?>">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select form-select-lg" name="status" id="status">
                    <option selected>Select one</option>
                    <option value="pending">Pending</option>
                    <option value="finish">Finish</option>
                    <option value="on_process">On Process</option>
                </select>
            </div>
        </div> -->
        <div class="col-md-12 d-none">
            <label for="validationCustom01" class="form-label">user_id</label>
            <input type="text" class="form-control" id="validationCustom01" name="user_id" value="<?= $_SESSION['user']['id'] ?>" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" required><?= $task['description'] ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<?php include "../inc/footer.php"; ?>