<?php include_once "./components/header.php"; ?>
<style>
* {
    margin: 0;
    padding: 0;
}

.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}

.wrapper input {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 50px;
    height: 50px;
    background: none;
    border: none;
    outline: none;
    cursor: pointer;
}

.content {
    font-family: montserrat;
    text-align: center;
}

.content h2 {
    text-transform: uppercase;
    font-size: 80px;
}

.content p {
    font-size: 45px;
}
</style>
<?php include_once "./components/nav.php"; ?>

<div class="wrapper">
    <div class="content">
        <h2>homepage</h2>
        <p>Some Text Here</p>
    </div>
</div>
<?php include_once './components/footer.php'; ?>