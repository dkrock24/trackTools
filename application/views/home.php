
<div class="container">



<!-- Multi Select Buttons - START -->
<div class="container">

    <div class="row">
        <br>
        <div class="form-group">
            <div class="col-sm-12 col-md-12 col-lg-12">                
                <i class="fa fa-search fa-2x pull-left searchicon"></i><input type="search" class="form-control" id="search" placeholder="Filter items...">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="items-collection">

            <?php
            $contador=0;
            foreach ($shortcut as $value) {
                ?>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa <?php   echo $shortcut[$contador]->iconShortCut; ?> fa-2x"></span>
                                    <h5><?php   echo $shortcut[$contador]->nameShortCut; ?></h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <?php
                $contador++;
            }
            ?>

                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-car fa-2x"></span>
                                    <h5>car</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-truck fa-2x"></span>
                                    <h5>truck</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-laptop fa-2x"></span>
                                    <h5>laptop</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-cube fa-2x"></span>
                                    <h5>cube</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-lock fa-2x"></span>
                                    <h5>secure</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-barcode fa-2x"></span>
                                    <h5>barcode</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-key fa-2x"></span>
                                    <h5>key</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div data-toggle="buttons" class="btn-group itemcontent">
                            <label class="btn btn-default">
                                <div class="itemcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="fa fa-keyboard-o fa-2x"></span>
                                    <h5>keyboard</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>                

            </div>
        </div>
    </div>
        
</div>

<style>
#search {
    width:90%;
}

.searchicon {
    color:#5CB85C;
}

.items-collection{
    margin:20px 0 0 0;
}
.items-collection label.btn-default.active{
    background-color:#007ba7;
    color:#FFF;
}
.items-collection label.btn-default{
    width:90%;
    border:1px solid #305891;
    margin:5px; 
    border-radius: 17px;
    color: #305891;
}
.items-collection label .itemcontent{
    width:100%;
}
.items-collection .btn-group{
    width:90%
}
</style>

<script>
$(function () {
    $('#search').on('keyup', function () {
        var pattern = $(this).val();
        $('.items-collection .items').hide();
        $('.items-collection .items').filter(function () {
            return $(this).text().match(new RegExp(pattern, 'i'));
        }).show();
    });
});
</script>
<!-- Multi Select Buttons - END -->

</div>
