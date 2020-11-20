


<?php 


?>
 <!-- start dialog box -->
 <div class="modal fade Merienda" id="defaultModel1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel1">Change profile picture:</h4>
                        </div>
                        <div class="modal-body">
              
<form class="p-5" action="controller/call.php" method="post" name="myForm" enctype="multipart/form-data">
   <div class="form-group">
        <label for="select picture">Select picture : </label>
           <div class="form-line">
          <input type="file" class="form-control" placeholder="select" id="profile" name="profilepicture" value="" required>
          </div>
     </div>
        
     <div class="form-group">
       <button id="submit" type="Submit" class="btn btn-primary" name="editpofile">Submit</button>
      
     </div> 
</form>                        </div>
                        
                    </div>
                </div>
            </div>
           
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
             <?php 
                   

            ?>
            <div class="user-info Merienda">
                <div class="image">
                 <img src="assets/profile/<?php echo$row['proimage']; ?>" width="48" height="48" alt="User" data-toggle="modal" data-target="#defaultModel1" onMouseOver="this.style.cursor='pointer'"/>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['firstname']." ".$row['lastname']; ?></div>
                    <div class="email"><?php echo $row['email']; ?></div>
                    <!--<div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu Merienda">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">account_box</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="auction.php">
                            <i class="material-icons">playlist_add</i>
                            <span>Auction</span>
                        </a>
                    </li>
                    <li>
                        <a href="setting.php">
                            <i class="material-icons">settings_applications</i>
                            <span>Settings</span>
                        </a>
                    </li>
                      <li>
                        <a href="winner.php">
                            <i class="material-icons">account_box</i>
                            <span>Winners</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="material-icons">power_settings_new</i>
                            <span>logout</span>
                        </a>
                    </li>
                    

                    <!--<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/cards/basic.php">Basic</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/cards/colored.php">Colored</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/cards/no-header.php">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.php">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.php">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-3.php">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-4.php">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-5.php">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                    <!--<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.php">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.php">Animations</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.php">Badges</a>
                            </li>

                            <li>
                                <a href="pages/ui/breadcrumbs.php">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="pages/ui/buttons.php">Buttons</a>
                            </li>
                            <li>
                                <a href="pages/ui/collapse.php">Collapse</a>
                            </li>
                            <li>
                                <a href="pages/ui/colors.php">Colors</a>
                            </li>
                            <li>
                                <a href="pages/ui/dialogs.php">Dialogs</a>
                            </li>
                            <li>
                                <a href="pages/ui/icons.php">Icons</a>
                            </li>
                            <li>
                                <a href="pages/ui/labels.php">Labels</a>
                            </li>
                            <li>
                                <a href="pages/ui/list-group.php">List Group</a>
                            </li>
                            <li>
                                <a href="pages/ui/media-object.php">Media Object</a>
                            </li>
                            <li>
                                <a href="pages/ui/modals.php">Modals</a>
                            </li>
                            <li>
                                <a href="pages/ui/notifications.php">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/pagination.php">Pagination</a>
                            </li>
                            <li>
                                <a href="pages/ui/preloaders.php">Preloaders</a>
                            </li>
                            <li>
                                <a href="pages/ui/progressbars.php">Progress Bars</a>
                            </li>
                            <li>
                                <a href="pages/ui/range-sliders.php">Range Sliders</a>
                            </li>
                            <li>
                                <a href="pages/ui/sortable-nestable.php">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="pages/ui/tabs.php">Tabs</a>
                            </li>
                            <li>
                                <a href="pages/ui/thumbnails.php">Thumbnails</a>
                            </li>
                            <li>
                                <a href="pages/ui/tooltips-popovers.php">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="pages/ui/waves.php">Waves</a>
                            </li>
                        </ul>
                    </li>-->
                    <!--<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.php">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.php">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.php">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.php">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.php">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.php">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.php">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.php">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.php">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.php">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.php">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.php">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.php">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.php">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.php">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.php">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/profile.php">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.php">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.php">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.php">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.php">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.php">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.php">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.php">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex.php">YandexMap</a>
                            </li>
                            <li>
                                <a href="pages/maps/jvectormap.php">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.php">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
             #Menu -->
            <!-- Footer -->
        </ul>
    </div>
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">Rangrezz | All rights reserved</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
     
