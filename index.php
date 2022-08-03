<?php include 'inc/header.php'; ?>

<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card bg-dark mt-5">
            <div class="card-title bg-primary text-white mt-5">
                <h3 class="py-3 text-center">Login Form In PHP</h3>
            </div>
            <?php if (@isset($_GET['empty'])) { ?>

                <div class="alert-light text-danger text-center py">
                    <?php echo $_GET['empty']; ?>
                </div>

            <?Php } ?>

            <?php if (@isset($_GET['invalid'])) {
            ?>
                <div class="alert-light text-danger text-center py-3">
                    <?php echo $_GET['invalid']; ?>
                </div>
            <?Php } ?>

            <div class="card-body">
                <form action="process.php" method="POST">
                    <input type=" text" name="name" placeholder="Enter your name" class="form-control">

                    <input type="password" name="password" placeholder="Enter your password" class="form-control mb-3 mt-3">

                    <button class="btn btn-success" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>