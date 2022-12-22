<?php include 'include/header.php' ?>
<div class="home-stats">
    <div class="container text-center">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members">
                    <i class="fa fa-users"></i>
                    <div class="info">
                        Total Members
                        <span>
                            <a href="users.php">5</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                    <i class="fa fa-ticket"></i>
                    <div class="info">
                        Total Reservations
                        <span>
                            <a href="reservation.php">10</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-items">
                    <i class="fa fa-tag"></i>
                    <div class="info">
                        Total Croisiere
                        <span>
                            <a href="croisiere.php">10</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                    <i class="fa fa-ship"></i>
                    <div class="info">
                        Total Navire
                        <span>
                            <a href="navire.php">100</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php' ?>