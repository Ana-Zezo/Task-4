<?php include_once "./components/header.php" ?>
<?php include_once "./components/nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <form class="border p-3" action="./handel/handel_register.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="form-control bg-primary text-white">Login</button>
            </form>
        </div>
    </div>
</div>
<?php include_once "./components/footer.php" ?>