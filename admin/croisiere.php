<?php include 'include/header.php' ?>


<h1 class="text-center">Manage Croisiere</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>port_dep</td>
                <td>port_dar</td>
                <td>prix_cr</td>
                <td>date_dep</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>1</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000dh</td>
                <td>02/02/2022</td>
                <td>
                    <a href="croisiereDelete" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000dh</td>
                <td>02/02/2022</td>
                <td>
                    <a href="croisiereDelete" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>titanik</td>
                <td>maroc</td>
                <td>California</td>
                <td>2000dh</td>
                <td>02/02/2022</td>
                <td>
                    <a href="croisiereDelete.php" class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
                </td>
            </tr>
            
        </table>
    </div>
    <a href="croisiereAdd.php" class="btn btn-sm btn-primary">
        <i class="fa fa-plus"></i> New Item
    </a>
</div>

<?php include 'include/footer.php' ?>