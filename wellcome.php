<?php include 'inc/header.php'; ?>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card bg-dark mt-5">
            <div class="card-title bg-primary text-white mt-5">

                <?php
                session_start();
                if (isset($_SESSION['user'])) {
                ?>
                    <h3 class="py-3 text-center"><?php echo "Wellcome In " . $_SESSION['user'] . " Panel" . '<br/>'; ?>
                    </h3>

            </div>


            <div class="card-body">
                <button class="btn btn-warning text-center text-white" name="login"> <?php echo '<a href="logout.php?logout">Logout</a>'; ?> </button>

            <?php
                } else {
                    header("location: index.php");
                } ?>

            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>