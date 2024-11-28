<?php
include "../inc/header.php";
include "../inc/nav.php";
include "../../Connection/database.php"
?>
<?php
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $user_id = $_POST['user_id'];
    $description = $_POST['description'];
    if ($title != "" && $description != "") {
        $insert_query = "INSERT INTO tasks(title,description,user_id) values('$title','$description','$user_id')";
        $insert_result = $conn->query($insert_query);
        if ($insert_result) {
?>
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
        <a href="./index.php" class="btn btn-primary">Manage</a>
    </div>
    <form class="row g-3 needs-validation p-5 m-3 shadow rounded-3" enctype="multipart/form-data" method="post">
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" class="form-control" id="validationCustom01" name="title" required>
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
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<?php include "../inc/footer.php"; ?>