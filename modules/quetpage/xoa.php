
<?php
 require 'xoapost.php';

?>
<section id="main-content">

<?php

if(isset($v)){ ?>
     <div class="alert alert-danger"><?=$v?? null ?> </div>
    <?php } elseif (isset($h)) { ?>
     <div class="alert alert-success"><b> </b>xóa thành công<?= $h ?? null  ?></div><?php } else { ?>
        <div class="alert alert-warning"><p>không có post để xóa</p></div> <?php } ?>
            <!-- <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <form class="form-panel" method="POST" >
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Xóa Post</h4>
                            <div class="form-horizontal tasi-form">
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nhập token Page Cần Xóa</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="txt_x">
                                    </div>
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-theme">xóa post</button>
                            </form>
                            <!-- /form-panel -->
                        </div>
                        <!-- /col-lg-12 -->
                    </div>


            </section> -
