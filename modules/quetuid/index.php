

<?php
 include 'control.php';

?>


<section id="main-content">

                 <!-- quetuid -->
                 <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Input Messages</h4>
                          <form class="form-horizontal tasi-form" method="POST">
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess" >id cá nhân,page, post</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control"name="idpost" id="inputSuccess">
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning" >token eaag</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control"name="eaag" id="inputWarning">
                                  </div>
                              </div>
                              <div class="form-group has-error">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">số bài cần lấy</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" name="sb" id="inputError">
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-theme03" name="submit1">Theme</button>
                          </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div>
                <!-- show dữ liệu -->
   



                <div class="row mt">
                <div class="col-md-12 mt">
                        <div class="content-panel">
                      <span class="badge bg-success"style="float:right;  margin-right:40px" >Có <?= $x??null ?> fanpage</span> 
                            <h4><i class="fa fa-angle-right"></i>Xuất dữ liệu</h4>
                            <hr>
                            <table class="table table-hover">  
                                <thead>                            
                                    <tr> 
                                        <th>STT</th>
                                        <th>ID post</th>
                                        <th>messenger</th>
                                        <th>time đăng bài</th>
                                        <th>hành động</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <thead>
                                    
                              <?php
                                for ($i = 0; $i < $x; $i++){ 
                                        $a= $toppings->data[$i]->id;
                                        $b= $toppings->data[$i]->name?? null;
                                        $c= $toppings->data[$i]->created_time; 
                                        ?> 
                                    
                                    <tr>
                                        <td> <?= $i ?? null ?></td>
                                        <td ><?=  $a ?? null?></td>
                                        <td ><?= $b ?? null?></td>
                                        <td ><?= $c ?? null?></td>
                                        <td > <a class="btn btn-primary" href="index.php?module=quetpage&action=post&token="><i class="fa fa-pencil"></i></a> |
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa tất cả các post trên page không?')" href="index.php?module=quetpage&action=xoa&token="><i class="far fa-trash-alt"></i></a></button>
                                    </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- --/content-panel ---->
                    </div>
                    </div>
                </section>