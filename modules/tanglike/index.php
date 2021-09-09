
<?php
 include ('bufflike.php');
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
                          <h4><i class="fa fa-angle-right"></i> Tăng Like Page</h4><hr><table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> stt</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> UID Page</th>
                                  <th><i class="fa fa-bookmark"></i> Gói Like/ucoi</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <form method="POST">
                                  <td><a href="basic_table.html#">1</a></td>
                                  <td class="hidden-phone"><input type="text" class="form-control" id="exampleInputEmail2" name="UIDpage" placeholder="UID ..."> </td>
                                  <td> <select class="form-control " name="cmt">
						                    <option value="10">500 Like/25 ucoi </option>
						                    <option value="1000">1000 Like/50 ucoi</option>
						                    <option value="2000">2000 Like/100 ucoi</option>
						                    <option value="50000">5000 Like/250 ucoi</option>
						                    <option value="100000">10000 Like/500 ucoi</option>
						                </select>
                                 </td>
                                  <td>
                                  <button type="submit" name="submit" class="btn btn-round btn-success">run</button>
                                  </td>
                                  </form>
                                  </tr>
                                  
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>


              <div class="row mt">
              <div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Tăng Like Post</h4><hr><table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> stt</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> UID Post</th>
                                  <th><i class="fa fa-bookmark"></i> Gói Like/ucoi</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>  
                              <tbody>
                              <tr>
                                  <form method="POST">
                                  <td><a href="basic_table.html#">1</a></td>
                                  <td class="hidden-phone"><input type="text" class="form-control" id="exampleInputEmail2" name="UIDpost" placeholder="UID ..."> </td>
                                  <td> <select class="form-control" name="cmt1">
						                    <option value="10">50 Like/10 ucoi </option> 
						                    <option value="100">100 Like/20 ucoi</option>
						                    <option value="300">300 Like/50 ucoi</option>
						                    <option value="500">500 Like/80 ucoi</option>
						                    <option value="1000">1000 Like/100 ucoi</option>
						                </select>
                                 </td>
                                  <td>
                                  <button type="submit" name="submit1" class="btn btn-round btn-success">run</button>
                                  </td>
                                  </tr>
                                  </form>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
              </div>

              </section>