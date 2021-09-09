<?php
 include 'postpage.php';

?>


<section id="main-content">
    <?php if(isset($v)){ ?>
     <div class="alert alert-danger"><?=$v?? null ?> </div>
    <?php } elseif (isset($n)) { ?>
     <div class="alert alert-success"><b> </b><?= $n ?? null  ?></div><?php } else { ?>
                 <?= "" ?> <?php } ?>
            <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <form class="form-panel" method="POST" >
                      
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Post bài lên page</h4>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nhập id page cần lấy bài</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="focusedInput" type="text"  name="txt_y">
                              </div>
                          </div>  <br/> <br/><br/> 
                            <div class="form-horizontal tasi-form ">
                                <div class="form-group has-success">
                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">số bài muốn đăng</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="txt_x">
                                    </div>
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-theme">post page</button>
                                </form>
                            <!-- /form-panel -->
                        </div>
                        <!-- /col-lg-12 -->
                    </div>        
            </section>

           

