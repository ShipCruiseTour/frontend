<?php include 'include/header.php' ?>

<h1 class="text-center">Add New croisiere</h1>
<div class="container">
    <form class="form-horizontal form11" enctype="multipart/form-data" method="POST">
        <!-- Start name navire Field -->
        <div class="form-group form-group-lg labelInput11">
            <label class="col-sm-2 control-label">name navire</label>
            <div class="col-sm-10 col-md-6 input11">
                <select name="navire">
                    <option value="0">...</option>
                    <option value="1">titanik</option>
                    <option value="2">zodyak</option>
                    <option value="3">??</option>
                    <option value="4">??</option>
                </select>
            </div>
        </div>
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
        <!-- Start prix_croisiere Field -->
        <div class="form-group form-group- labelInput11">
            <label class="col-sm-2 control-label">prix de croisiere</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="numero" name="prix" class="form-control" required="required"
                    placeholder="prix de croisiere" />
            </div>
        </div>
        <!-- End Name Field -->
        <!-- Start dat depart Field -->
        <div class="form-group form-group-lg labelInput11">
            <label class="col-sm-2 control-label">date de depart</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="date" name="dateDe" class="form-control" required="required"
                    placeholder="date depear" />
            </div>
        </div>
        <!-- End dat depart Field -->
        <!-- Start Submit image -->
        <div class="form-group labelInput11">
            <label class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10 col-md-6 input11">
                <input type="file" name="txt_file"
                    style="margin-bottom: 10px !important; width: 100%; background-color: #0000001a;padding: 10px;border-radius: 10px;box-shadow: 0 4px 4px black;" />
            </div>
        </div>
        <!-- End Tags image -->
        <!-- Start Submit Field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit"  value="Add Croisiere" name="btn_insert" class="btn btn-primary btn-sm" />
            </div>
        </div>
        <!-- End Submit Field -->
    </form>
</div>

<?php include 'include/footer.php' ?>