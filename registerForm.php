<?php
include "Layouts/header.php";
require "Layouts/nav.php"; ?>

<main>

    <form action="Auth/register.php" enctype="multipart/form-data" method="post" class="row mx-auto my-5 w-50 shadow p-3 rounded-3">
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

<?php include "Layouts/footer.php" ?>