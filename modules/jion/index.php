
<?php
 include ('jion.php');

//  if (isset($_POST['submit'])) {
//     //  $input =  explode("|", $_POST['tken']);
//     //  $uid= $input[0];
//     //  $access_token=  $input[1];


//      $group=  explode("\n", $_POST['id_group']);

//      $c = count($group);

//      for ($i=0; $i<$c; $i++) {
//          $uid_gr= $group[$i];
        
//      }
//  }
?>

<section id="main-content">
    <?php if(isset($v)){ ?>
     <div class="alert alert-danger"><?=$v?? null ?> </div>
    <?php } elseif (isset($h)) { ?>
     <div class="alert alert-success"><b> </b><?= $h ?? null  ?></div><?php } else { ?>
                 <?= "" ?> <?php } ?>
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Tham gia group </h4><hr><table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-question-circle"></i> stt</th>
                                  <th class="hidden-phone"><i class="fa fa-bullhorn"></i> UID Post</th>
                                  <th class="hidden-phone"><i class="fa fa-bullhorn"></i> Nội Dung Comment</th>
                                  <th><i class="fa fa-bookmark"></i> Gói Like/ucoi</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <form method="POST">
                                  <td><a href="basic_table.html#">1</a></td>
                                  <td class="hidden-phone"><input type="text" class="form-control" id="exampleInputEmail2" name="tken" placeholder="nhập ID|token."> </td>
                                  <td class="hidden-phone"><textarea type="text"  class="form-control" id="exampleInputEmail2" name="id_group" placeholder="nhập uid group "cols="30" rows="10"><?= $_SESSION['id_group']?? null ?></textarea></td>
                                  <td> <select class="form-control" name= "cmt">
						                    <option  value="10">10 comment/20 ucoi </option>
						                    <option  value="20">20 comment/35 ucoi</option>
						                    <option  value="50">50 comment/40 ucoi</option>
						                    <option  value="100">100 comment/75 ucoi</option>
						                </select>
                                 </td>
                                  <td><span class="label label-info label-mini">action</span></td>
                                  <td>
                                  <button type="submit" name="submit" class="btn btn-round btn-success"  >run</button>
                                  </td>
                                  </form>
                                  </tr>
                                  
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>

              </section>