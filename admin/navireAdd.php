<?php include 'include/header.php' ?>

<h1 class="text-center">Add New navire</h1>
<div class="container">
    <form class="form-horizontal form11" enctype="multipart/form-data" method="POST">
        <!-- Start name of navire Field -->
        <div class="form-group form-group- labelInput11">
            <label class="col-sm-2 control-label">name of navire</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="text" name="prix" class="form-control" required="required"
                    placeholder="name of navire" />
            </div>
        </div>
        <!-- End name of navire Field -->
        <!-- End name navire Field -->
        <!-- Start port_depart Field -->
        <div class="form-group form-group-lg labelInput11">
            <label class="col-sm-2 control-label">port depart</label>
            <div class="col-sm-10 col-md-6 input11">
                <select name="poDe">
                    <option value="0">...</option>
                    <option value="1">maroc</option>
                    <option value="2">californya</option>
                    <option value="3">bljika</option>
                    <option value="4">canada</option>
                </select>
            </div>
        </div>
        <!-- End port_dariv Field -->
        <!-- Start port_depart Field -->
        <div class="form-group form-group-lg labelInput11">
            <label class="col-sm-2 control-label">port darrive</label>
            <div class="col-sm-10 col-md-6 input11">
                <select name="poDa">
                    <option value="0">...</option>
                    <option value="1">maroc</option>
                    <option value="2">californya</option>
                    <option value="3">bljika</option>
                    <option value="4">canada</option>
                </select>
            </div>
        </div>
        <!-- End port_depart Field -->
        <!-- Start nombre de chambre Field -->
        <div class="form-group form-group- labelInput11">
            <label class="col-sm-2 control-label">nombre de chambre</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="number" name="prix" class="form-control" required="required"
                    placeholder="nombre de chambre" />
            </div>
        </div>
        <!-- End nombre de chambre Field -->
        <!-- Start Submit Field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" style="margin-top: 15px;" value="Add navire" name="btn_insert"
                    class="btn btn-primary btn-sm" />
            </div>
        </div>
        <!-- End Submit Field -->
    </form>
</div>

<?php include 'include/footer.php' ?>