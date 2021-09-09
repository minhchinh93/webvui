
 
 <!--MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered">
                        <a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
                    </p>
                    <h5 class="centered"><p>Số dư của bạn:</p>$<?= $row['so_su'] ?></h5>

                    <li class="mt">
                        <a href="index.php?module=trangchu">
                            <i class="fa fa-dashboard"></i>
                            <span>Trang Chủ</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Ads & accout</span>
                        </a>
                        <ul class="sub">
                            <li><a href="index.php?module=checkuid">check live/die uid</a></li>
                            <li><a href="index.php?module=checklbm">check limit bm,tkcn</a></li>
                            <li><a href="index.php?module=ads">ads manager </a></li>
                            <li><a href="index.php?module=addfr">Add firend</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>Page</span>
                        </a>
                        <ul class="sub">
                            <li ><a href="index.php?module=quetpage">Quét Page</a></li>
                            <li><a href="index.php?module=tanglike">Tăng Like Page</a></li>
                            <li><a href="index.php?module=comment">Seeding</a></li>
                            <li><a href="index.php?module=buffsub">Buff Sub</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Group</span>
                        </a>
                        <ul class="sub">
                            <li><a href="index.php?module=jion">join group(nhanh)</a></li>
                            <li><a href="index.php?module=share">share group</a></li>
                            <li><a href="index.php?module=quetuid">quet uid group </a></li>
                        </ul>
                    </li>
                   
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
