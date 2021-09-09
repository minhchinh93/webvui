




<section id="main-content">
<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> quản lý user </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Tên </th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> SĐT </th>
                                  <th><i class="fa fa-bookmark"></i> tiền còn lại </th>
                                  <th><i class=" fa fa-edit"></i> TRạng thái</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $a=  qluser($conn);
                                  while ($row = $a->fetch_array()) { 
                                     ?>
                              <tr>
                                  <td><a href="#"><?= $row['full_name'] ?></a></td>
                                  <td class="hidden-phone"><?= $row['email'] ?></td>
                                  <td><?= $row['so_su'] ?>$ </td>
                                  <td><span class="label label-info label-mini">Admin</span></td>
                                  <td>
                                  <a href="index.php?module=user&action=tien&id=<?=$row['id']?>"><i class="fas fa-edit" style="float:cemter; font-size: 20px; color: blue"></i></a> |
                                      <a onclick="return confirm('bạn có muốn xóa không ?')" href="index.php?module=user&action=xoa&id=<?=$row['id']?>"> <i class="fas fa-trash-alt" style="float:cemter; font-size: 20px; color: red"></i></a>
                               
                                  </td>
                                 
                              </tr>
                              <?php } ?>
                              <?php $a= qlthanhvien($conn);
                                  while ($row = $a->fetch_array()) { 
                                     ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?= $row['full_name'] ?></a></td>
                                  <td class="hidden-phone"><?= $row['email'] ?></td>
                                  <td><?= $row['so_su'] ?> $ </td>
                                  <td><span class="label label-success label-mini">Thành viên</span></td>
                                  <td><a href="index.php?module=user&action=tien&id=<?=$row['id']?>"><i class="fas fa-edit" style="float:cemter; font-size: 20px; color: blue"></i></a> |
                                      <a onclick="return confirm('bạn có muốn xóa không ?')" href="index.php?module=user&action=xoa&id=<?=$row['id']?>"> <i class="fas fa-trash-alt" style="float:cemter; font-size: 20px; color: red"></i></a>
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div>


</section>
