
 <?php require "layout/header.php" ?>
    </div>
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        <?php require "layout/menu.php" ?>
      *********************************************************************************************************************************************************** -->
  
            <section class="wrapper site-min-height">
            <?php
          $moduleName = $_GET['module'] ?? null;
          $actionName = $_GET['action'] ?? 'index';

          if ($moduleName) {
            require "./modules/${moduleName}/${actionName}.php";
          }else {
            require "./modules/trangchu/index.php";
          }
          ?>

            </section>
            <! --/wrapper -->

        <!-- /MAIN CONTENT -->
        <?php require "layout/footer.php" ?>
        <!--main content end-->
        <!--footer start-->
 