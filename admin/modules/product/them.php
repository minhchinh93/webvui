

<?php   
if (isset($_POST['submit'])) {
    $group=  explode("\n", $_POST['txt_x']);
    $q = count($group);
    for ($i=0; $i<$q; $i++) {
        $input =  explode("|", $group[$i]);
        if (count($input)== 4) {
            if (strlen($input[0]) >0 && strlen($input[1]) >0 && strlen($input[2]) >0 && strlen($input[3]) >0) {
                $a=  $input[0];
                $b=  $input[1];
                $c=  $input[2];
                $d=  $input[3];
                importdata($conn,$a,$b,$c,$d);
            }
            
        } 
    } 
    header("Location:index.php?module=product" );
}
?>

<section id="main-content">
<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> THÊM TÀI NGUYÊN</h4>
                          <form class="form-horizontal tasi-form" method="POST">
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">DÁN TÀI NGUYÊN</label>
                                  <div class="col-lg-10">
                                  <textarea  type="text" class="form-control" cols="1000" rows="10" name="txt_x"></textarea>
                                  </div>
                              </div>
                              <button type="submit" name="submit" class="btn btn-theme03">Theme </button>
                          </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div>

</section>