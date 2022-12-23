<?php include 'include/header.php' ?>


<h1 class="text-center">Manage navire</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>port_dep</td>
                <td>port_dar</td>
                <td>nombre chambre</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>1</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000</td>
                <td>
                    <a href="navireDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000</td>
                <td>
                    <a href="navireDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000</td>
                <td>
                    <a href="navireDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            
        </table>
    </div>
    <a href="navireAdd.php" class="btn btn-sm btn-primary">
        <i class="fa fa-plus"></i> New navire
    </a>
</div>

<?php include 'include/footer.php' ?>