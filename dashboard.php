<?php include("./controller/dashboardController.php") ?>

<?php if(!isset($_GET["action"])): ?>
    <main class="dashboard-main">
        <section class="side-bar">
            <div class="side-bar-content">
                <div class="side-bar-nav">
                    <ul>
                        <li><i class="fa fa-list"></i><a href="?action=products"> Products</a></li>
                        <li><i class="fa fa-check"></i><a href=""> Membership</a></li>
                        <li><i class="fa fa-file"></i><a href=""> Content Area</a></li>
                        <li><i class="fa fa-gear"></i><a href=""> Settings</a></li>
                    </ul>
                </div>
            </div>
        </section>  
<?php endif; ?>
    