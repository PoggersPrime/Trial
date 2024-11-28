<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <?php
    if (isset($_GET["msg"])) {
        if ($_GET["msg"] == "registered") {
            $message = "Registration successful";
        }
    }
    if (isset($_SESSION['user'])) {
        header('Location:../index.php');
    }
    ?>
    <main>
        <?php if (isset($message)) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <form action="../../Auth/register.php" enctype="multipart/form-data" method="post" class="row mx-auto my-5 w-50 shadow p-3 rounded-3">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="textHelp" name="name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="exampleInputPhone" aria-describedby="textHelp" name="phone">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email </label>
                    <input type="mail" class="form-control" id="exampleInputEmail" aria-describedby="textHelp" name="email">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputPaswword" class="form-label">Password </label>
                    <input type="password" class="form-control" id="exampleInputPaswword" aria-describedby="textHelp" name="password">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="exampleInputCPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputCPassword" aria-describedby="textHelp" name="cPassword">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">
                Submit
            </button>

        </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>