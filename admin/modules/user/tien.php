

<?php 
$id= $_GET['id'];
settype($id, "int");
$a= $_POST['tien']?? null;
$g = qluserid($conn, $id);
$row = $g->fetch_array();


if (isset($_POST['submit'])) {
    $n = $a + $row['so_su'];
  congtien($conn, $n, $id);
  header("Location:index.php?module=user" );
}

?>
<section  id="main-content"> 
<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> cộng tiền cho thành viên </h4>
                      <form class="form-inline" role="form" method="POST">
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">sđt</label>
                              <input type="number" class="form-control" id="exampleInputEmail2" name="sđt" value="<?= $row['email']?? null ?>" >
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword2">số tiền</label>
                              <input type="number" class="form-control" id="exampleInputPassword2" name="tien" placeholder="số tiền">
                          </div>
                          <button type="submit"  class="btn btn-theme" name="submit">Sign in</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div>
</section>
