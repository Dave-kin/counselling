
<?php 
  include_once('../config/runn.php'); 
  include_once('../controllers/GetdataController.php');
  ?>
  

  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">E-Counselling Panel</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-white my-2 my-sm-0 mr-sm-5" type="submit">Search</button>

          <button name="systemOut_btn" class="btn btn-danger my-2 my-sm-0" type="submit">LogOut</button>
        </form>
      </div>
      
    </nav>
    <br>
    <br>
    <div class="navbar bg-white box-shadow p-4">
      <nav class="nav nav-underline">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="stud.php">Student Form</a>
              <a class="dropdown-item" href="non-stu.php">Non Student Form</a>
              <a class="dropdown-item" href="appoint.php">Appointment Booked</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrate</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="prov.php">Approve Request</a>
              <a class="dropdown-item" href="mana.php">Manage User</a>
              <a class="dropdown-item" href="user-ad.php">All Admins</a>
              <a class="dropdown-item" href="user-min.php">All Clients</a>
            </div>
          </li>
          <?php
            $getallmenu = new GetdataController;
            $result = $getallmenu->getallMenu();
            if($result){
                foreach($result as $row){
                  $menu_id = $row['menu_id'];

                  $access = $getallmenu->accesMenu($menu_id);
                  if($access){
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><i class=" <?= $row['menu_icon'] ?>"></i></span>
                        <?= $row['menu_name'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <?php 
                                $getsubmenu = new GetdataController;
                                $result = $getsubmenu->getallsubMenu( $menu_id );
                                if($result){
                                foreach($result as $row){
                                    $row['menu_id']
                                    ?>
                                    <a class="dropdown-item" href="<?= $row['submenu_url'] ?>"><?= $row['submenu_name'] ?></a>
                                    <?php
                                }
                                }
                            ?>
                        </div>
                    </li>
                    <?php
                   }
                }
              }else{
          
              }
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sysetm Access</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="menu_add.php">Add Menu</a>
              <a class="dropdown-item" href="submenu_add.php">Add Sub Menu</a>
              <a class="dropdown-item" href="user_permission.php">permission</a>
            </div>
          </li>
        <!-- <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Friends
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a> -->
       
      </nav>
    </div>