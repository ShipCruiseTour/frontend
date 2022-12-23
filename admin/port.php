<?php include 'include/header.php' ?>


<h1 class="text-center">Manage Port</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>1</td>
                <td>maroc</td>
                <td>
                    <a href="portDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>California</td>
                <td>
                    <a href="portDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>paris</td>
                <td>
                    <a href="portDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>

        </table>
    </div>
    <a href="portAdd.php" class="btn btn-sm btn-primary">
        <i class="fa fa-plus"></i> New port
    </a>
    <?php include 'include/footer.php' ?>