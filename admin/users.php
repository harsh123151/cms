<?php include 'includes/admin_header.php';

?>
<?php
if(isset($_SESSION['user_role']) && $_SESSION['user_role']!=='admin'){
    redirect('index.php');
}
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin
                            <small>Harsh</small>
                        </h1>
                        <?php
                        if(isset($_GET['source'])){
                         $source = $_GET['source'];
                        }else{
                         $source = " ";
                        }

                         switch($source){
                          case 'view_user':
                           include "includes/view_all_user.php";
                           break;

                          case 'edit_user':
                            include "includes/edit_user.php";
                            break;
                            
                           case 'add_user':
                            include "includes/add_user.php";
                            break;

                           default:
                           include "includes/view_all_user.php";
                           break;
                         }
                  
                        
                        
                        ?>
                        
                        
                    </div>
        
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>