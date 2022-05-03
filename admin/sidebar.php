 <?php 
include("../connection.php");

$count = $connection->query("SELECT COUNT(*) as total FROM `contact`")->fetch_array();


  ?>


 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
           <li class="">
            <a class="" href="client_message">
                          <i class="fa fa-envelope-o"></i>
                          <span>Client Messages</span>
                          <span class="badge bg-important"><?php echo $count['total']?></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Update Menu</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
               <li><a class="" href="home_edit?id=<?php echo $row['id']?>">Home Page</a></li>
              <li><a class="" href="about_edit?id=<?php echo $row['id']?>">About Us</a></li>
              <li><a class="" href="honey_edit?id=<?php echo $row['id']?>">Admission Process</a></li>
              <li><a class="" href="oil_edit?id=<?php echo $row['id']?>">Our Requirements</a></li>
              <li><a class="" href="hibiscus_edit?id=<?php echo $row['id']?>">School Fees</a></li>
             <li><a class="" href="operations_edit?id=<?php echo $row['id']?>">POP Up Display</a></li>
            <li><a class="" href="conditions_edit?id=<?php echo $row['id']?>">Live Sermon Link</a></li>
            </ul>
          </li>
          <li class="">
            <a class="" href="update_picture">
                          <i class="fa fa-image"></i>
                          <span>Update Pictures</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="update_gallery">
            <i class="fa fa-image"></i>
                          <span>Update Our World</span>
                      </a>
          </li>
        <!--  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Elements</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>-->

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>