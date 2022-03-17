<div class="side-nav expand-lg">
          <div class="side-nav-inner">

            <ul class="side-nav-menu">
              <!-- <li class="side-nav-header">
                <span>Navigation Menu</span> -->


              <br>

              </li>

              <li class="nav-item ">
                <a href="dashboard.php">
                  <span class="icon-holder">
                    <i class="lni-dashboard"></i>
                  </span>
                  <span class="title">DASHBOARD</span>
                 
                </a>
               
              </li>

              <?php 
                    $menu_array_sub = array(
                      // "GRANT HOME" => "index.php",
                    );

                    $proposal_sub_ary = array(
                      // "> index" => "index.php",
                    );

                    $system_funtions_subary = array(
                      // "> BAVL Balance < 0.00 " => "system-functions.php",
                    );

                    $report_sub_ary = array(
                      // "> FISCAL REPORT" => "reports.php",
                    );

                    
                    $menu_array = array(      
                       "REPORTS" => array("dashboard.php",'lni-files',""),
                       "TOOLS / SETTINGS" => array("dashboard.php",'lni lni-control-panel',""),

                    
                    );  
                   
                        foreach( $menu_array as  $key => $val ){
                          
                          if(is_array($val[2])){
                            echo '

                              <li class="nav-item dropdown">
                                  <a class="dropdown-toggle" href="#">
                                      <span class="icon-holder">
                                        <i class="'.$val[1].'"></i>
                                      </span>
                                      <span class="title mr-1">'.$key.'</span>
                                      <span class="arrow ml-2">
                                        <i class="lni-chevron-right-circle"></i>
                                      </span>
                                    </a>
                                  <ul class="dropdown-menu sub-down pl-1">

                            ';
                            foreach( $val[2] as  $keysub => $valsub ){

                              echo '
                            <li>
                              <a href="'.$valsub.'">'.$keysub.'</a>
                            </li>
                              
                              ';

                            }
                            echo "</ul> </li>";  

                          }
                          else{

                          
                             echo  " <li class='nav-item' ><a href='$val[0]' id='".implode(explode(" ",$key))."'> 
                            <span class='icon-holder'>
                            <i class='$val[1]'></i>
                            </span>
                            <span class='title'> $key   </span>
                            
                             </a></li>";
                          }
                        }
            ?>
            </ul>
          </div>
        </div>