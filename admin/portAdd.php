<?php include 'include/header.php' ?>

<h1 class="text-center">Add New croisiere</h1>
<div class="container">
    <form class="form-horizontal form11" enctype="multipart/form-data" method="POST">
        <!-- Start name Port Field -->
        <div class="form-group form-group- labelInput11">
            <label class="col-sm-2 control-label">prix de croisiere</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="numero" name="prix" class="form-control" required="required"
                    placeholder="prix de croisiere" />
            </div>
        </div>
        <!-- End name Port Field -->
        <!-- Start Submit Field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" style="margin-top: 15px;" value="Add Croisiere" name="btn_insert" class="btn btn-primary btn-sm" />
            </div>
        </div>
        <!-- End Submit Field -->
    </form>
</div>

<?php include 'include/footer.php' ?>