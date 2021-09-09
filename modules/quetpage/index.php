<?php
 include 'quetpage.php';

?>


<section id="main-content">
<?php if(isset($v)){ ?>
     <div class="alert alert-danger"><?=$v?? null ?> </div>
    <?php } elseif (isset($h)) { ?>
     <div class="alert alert-success"><b> </b><?= $h ?? null  ?></div><?php } else { ?>
                 <?= "" ?> <?php } ?>
            <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <form class="form-panel" method="POST" >
                            <h4 class="mb"><i class="fa fa-angle-right"></i> QUẢN LÝ FANPAGE : KIỂM TRA, ĐĂNG BÀI, XOÁ BÀI HÀNG LOẠT</h4>

                            <div class="form-horizontal tasi-form">
                                <div class="form-group has-success">
                                    <div class="col-lg-10">
                                    <input  type="text" class="form-control" name="txt_x" value="<?=$_SESSION['txt_x']??null ?>">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-theme">quét page</button>
                                </form>
                            <!-- /form-panel -->
                        </div>
                        <!-- /col-lg-12 -->
                    </div>



                    <div class="col-md-12 mt">
                        <div class="content-panel">
                      <span class="badge bg-success"style="float:right;  margin-right:40px" >Có <?= $x ?> fanpage</span> 
                            <h4><i class="fa fa-angle-right"></i>Xuất dữ liệu</h4>
                            <hr>
                            <table class="table table-hover">  
                                <thead>                            
                                    <tr> 
                                        <th>STT</th>
                                        <th>ID page</th>
                                        <th>Tên page</th>
                                        <th>lượt like Page</th>
                                        <th>hành động</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                <thead>
                                    
                                <?php
                                for ($i = 0; $i < $x; $i++){ 
                                        $a= $toppings->data[$i]->id;
                                        $b= $toppings->data[$i]->name;
                                        $c= $toppings->data[$i]->fan_count; 
                                        $d= $toppings->data[$i]->access_token;
                                       
                                        ?>
                                    
                                    <tr>
                                        <td> <?= $i ?? null ?></td>
                                        <td ><?=  $a ?? null?></td>
                                        <td ><?= $b ?? null?></td>
                                        <td ><?= $c ?? null?></td>
                                        <td > <a class="btn btn-primary" href="index.php?module=quetpage&action=post&token=<?=$d?>&token1=<?=$token1?>"><i class="fa fa-pencil"></i></a> |
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa tất cả các post trên page không?')" href="index.php?module=quetpage&action=xoa&token=<?=$d?>"><i class="far fa-trash-alt"></i></a></button>
                                    </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- --/content-panel ---->
                    </div>

            </section>


 