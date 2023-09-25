<?php include_once "./components/header.php"; ?>
<?php
if (!isset($_SESSION["auth"])) {
    header("location:login.php");
    die;
}
?>

<?php include_once "./components/nav.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto border p-2 my-5">
            <h2 class="border bg-danger p-2 mb-3">id :
                <?php echo $_SESSION["auth"][0] ?>
            </h2>
            <h2 class="border bg-success p-2 mb-3">Email :
                <?php echo $_SESSION["auth"][1] ?>
            </h2>
            <h2 class="border bg-primary p-2 mb-3">user :
                <?php echo $_SESSION["auth"][2] ?>
            </h2>
        </div>
    </div>
</div>
<?php include_once './components/footer.php'; ?>