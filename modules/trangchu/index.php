
<?php
 include 'control.php';

?>


<section id="main-content">
    <!-- thông báo -->



<!-- show thông tin -->
<div class="white-panel pn">
								<div class="white-header">
									<h1 style="color:black">Info</h1>
								</div>
								<p><img src="https://img2.thuthuatphanmem.vn/uploads/2018/11/30/anh-dai-dien-anime-dep_104204759.jpg" class="img-circle" width="50"></p>
								<h4><b style="color:#d9534f"><?= $_SESSION['full_name'] ?></b></h4>
									<div class="row">
										<div class="col-md-6">
											<p class="big mt" style="color:#449d44">Thành viên Thứ:</p>
											<h4 style="color:black"><b><?=$_SESSION['id'] ?></b> </h4>
										</div>
										<div class="col-md-6">
											<p class="big mt" style="color:#449d44">Số Dư:</p>
											<h4><b style="color:black"> $ <?= $row['so_su'] ?></b></h4>
										</div>
									</div>
							</div>
                            <!-- lấy token EAAG -->

                    <div class="row mt">
                    <div class="col-lg-12">
                        <form class="form-panel" method="POST" >
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Get token EAAG</h4>
                            <h6 class="mb"><i class="fa fa-angle-center"></i> <a href="https://business.facebook.com/business_locations/?nav_source=mega_menu" target="_blank"> Bước 1 :Đăng nhập & Click để lấy link cấp quyền facebook</a></h6>
                            <h6 class="mb"><i class="fa fa-angle-center mr-3"></i> Bước 2: Nhấn F12 hoặc click chuột phải và chọn "View page source" !</h6>
                            <h6 class="mb"><i class="fa fa-angle-center"></i> Bước 3: Coppy toàn bộ nội dung và dán vào ô bên dưới (Ctrl + A và Ctrl + C)!</h6>
                            <div class="form-horizontal tasi-form">
                                <div class="form-group has-success">
                                    <div class="col-lg-10">
                                    <textarea  type="text" class="form-control" cols="30" rows="10" name="txt_x"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-theme">Get token EAAG</button>
                                </form>
                            <!-- /form-panel -->
                        </div>
                        <!-- /col-lg-12 -->
                    </div>
                    </div>
                    <!-- show token -->

                    <?php if(isset($v)){ ?>
     <div class="alert alert-danger"><?=$v?? null ?> </div>
    <?php } elseif (isset($token1)) { ?>
     <div class="alert alert-success"><b> </b><?= $_SESSION['txt_x'] ?? null  ?></div><?php } else { ?>
                 <?= "" ?> <?php } ?>






<!-- mua via -->
<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel"> 
                      <h4><i class="fa fa-angle-right"></i> clone cổ</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>id</th>
                                  <th>name</th>
                                  <th class="numeric">bạn be</th>
                                  <th class="numeric">năm tao</th>
                                  <th class="numeric">giá</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>ching nguyen</td>
                                  <td class="numeric">2000</td>
                                  <td class="numeric">2013</td>
                                  <th class="numeric">10 ucoi</th>
                                  <td class="numeric"> <button type="button" class="btn btn-round btn-success"><i class="fas fa-shopping-cart"></i></button></td>
                              </tr>

                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div>

              </section>