
<?php 

//tổng kết
$a=  tongtn($conn);
$tong = mysqli_num_rows($a);

$b= accdie($conn);
$tongdie = mysqli_num_rows($b);
$c= acclive($conn);
$tonglie = mysqli_num_rows($c);

//phân trang
$tin = 30;
if (isset($_GET['trang'])) {
    $trang = $_GET['trang'];
    settype($trang, 'INT');
} else {
    $trang = 1;
}

$trang = ($trang - 1) * $tin;
$v = phantrang($conn, $tin, $trang);


?>


<section id="main-content">
<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> tài nguyên </h4>
                      <span class="badge bg-warning"><?= $tong ?></span>
						<span class="badge bg-success"><?= $tongdie ?></span>
						<span class="badge bg-important"><?= $tonglie ?></span>
                      <div style="float: right; margin-right:10%">
                      <a href="index.php?module=product&action=them"><i class="far fa-plus-square" style="float:cemter; font-size: 20px; color: #5cb85c"></i></a> |
                      <a onclick="return confirm('bạn có muốn check toàn bộ tk không ?')" href="index.php?module=product&action=checktk"><i class="fas fa-edit" style="float:cemter; font-size: 20px; color: blue"></i></a> |
                      <a  onclick="return confirm('bạn có muốn xóa toàn bộ tk die không ?')" href="index.php?module=product&action=xoatk"> <i class="fas fa-trash-alt" style="float:cemter; font-size: 20px; color: red"></i></a>
                      </div>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>stt</th>
                                  <th>id</th>
                                  <th class="numeric">pass</th>
                                  <th class="numeric">2fa</th>
                                  <th class="numeric">trạng thái</th>

                              </tr>
                              </thead>
                              <tbody>
                              <?php $v = phantrang($conn, $tin, $trang);;
                                  while ($row = $v->fetch_array()) {
                                      ?>
                              <tr>
                              <td class="numeric"><?= $row['id']?></td>
                                  <td><?= $row['uid']?></td>
                                  <td><?= $row['pass']?></td>
                                  <td class="numeric"><?= $row['2fa']?></td>
                                  <td class="numeric"><?php if($row['live']==1){ ?>
                                  <span class="label label-danger">die</span> <?php } else { ?><span class="label label-success">live</span><?php } ?></td>
                              </tr>
                              <?php
                                  } ?>
                               </tbody>
                          </table>

                          <?php
                          
                        $a=  tongtn($conn);
                        $tong_tin = mysqli_num_rows($a);
                        $tong_trang = ceil($tong_tin / $tin);
                        ?>
                        <?php
                        for ($i = 1; $i <= $tong_trang; $i++) { 
                            settype($i, "INT");
                            ?>
                          <span style="margin-left:2%" class="badge"><a style="color: white; margin:auto" href="index.php?module=product&trang=<?=$i?>"><?=$i?></a></span>
                          <?php } ?>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div>
</section>