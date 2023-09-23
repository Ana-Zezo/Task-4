<?php include_once "./components/header.php" ?>
<?php include_once "./components/nav.php" ?>

<?php include_once "./components/footer.php" ?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="border p-2 my-2 text-center">Register</h2>
            <?php
            if (isset($_SESSION["error"])) :
                foreach ($_SESSION["error"] as $error) : ?>
            <div class="alert alert-danger text-center">
                <?php echo $error; ?>
            </div>
            <?php
                endforeach;
                unset($_SESSION["error"]);
            endif;
            ?>
            <form class="border p-3" action="./handel/handel_register.php" method="POST">
                <div class="mb-3">
                    <label for="User-name" class="form-label">User name</label>
                    <input type="text" class="form-control" id="User-name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="form-control bg-primary text-white">Submit</button>
            </form>
        </div>
    </div>
</div>