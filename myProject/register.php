<?php include_once "./components/header.php"; ?>
<?php
if (isset($_SESSION["auth"])) {
    header("location:index.php");
    die;
}
?>
<?php include_once "./components/nav.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="border p-2 my-2 text-center">Register</h2>
            <?php if (isset($_SESSION["errors"])):
                foreach ($_SESSION["errors"] as $error): ?>
                    <div class="alert alert-danger">
                        <?php echo $error ?>
                    </div>
                <?php endforeach;
                // $_SESSION = [];
                unset($_SESSION["errors"]);
            endif;
            ?>
            <form action="./handel/handelRegister.php" method="POST" class="border p-3">
                <div class="form-group my-2">
                    <label for="name" class="my-2">User Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name"
                        name="name">
                </div>
                <div class="form-group my-3">
                    <label for="email class=" my-2"">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="password" class="my-2">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn w-100 btn-primary my-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include_once './components/footer.php'; ?>