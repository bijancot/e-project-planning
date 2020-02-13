        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/user/all_user_list') ?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <?php if ($this->session->userdata('role') == 'admin'): ?>
                                    <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-angle-right"></i> Add User </a></li>
                                    <li><a href="<?php echo base_url('admin/user/power') ?>"><i class="fa fa-angle-right"></i> Add User Power</a></li>
                                <?php else: ?>
                                    <?php if(check_power(1)):?>
                                        <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-angle-right"></i> Add User </a></li>
                                    <?php endif; ?>
                                <?php endif ?>

                                <li><a href="<?php echo base_url('admin/user/all_user_list') ?>"><i class="fa fa-angle-right"></i> All Users</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard/backup') ?>" aria-expanded="false"><i class="fa fa-cloud-download"></i><span class="hide-menu">Backup Database</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/form/general') ?>"><i class="fa fa-angle-right"></i> Form Basic Layout </a></li>
                                <li><a href="<?php echo base_url('admin/form/addons') ?>"><i class="fa fa-angle-right"></i> Form Addons</a></li>
                                <li><a href="<?php echo base_url('admin/form/material') ?>"><i class="fa fa-angle-right"></i> Form Material</a></li>
                                <li><a href="<?php echo base_url('admin/form/validation') ?>"><i class="fa fa-angle-right"></i> Form Validation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/table/basic') ?>"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
                                <li><a href="<?php echo base_url('admin/table/layout') ?>"><i class="fa fa-angle-right"></i> Table Layouts</a></li>
                                <li><a href="<?php echo base_url('admin/table/datatable') ?>"><i class="fa fa-angle-right"></i> Data Tables</a></li>
                                <li><a href="<?php echo base_url('admin/table/editable') ?>"><i class="fa fa-angle-right"></i> Editable Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/cards') ?>"><i class="fa fa-angle-right"></i> Cards</a></li>
                                <li><a href="<?php echo base_url('admin/ui/buttons') ?>"><i class="fa fa-angle-right"></i> Buttons</a></li>
                                <li><a href="<?php echo base_url('admin/ui/modals') ?>"><i class="fa fa-angle-right"></i> Modals</a></li>
                                <li><a href="<?php echo base_url('admin/ui/tabs') ?>"><i class="fa fa-angle-right"></i> Tab</a></li>
                                <li><a href="<?php echo base_url('admin/ui/tooltip') ?>"><i class="fa fa-angle-right"></i> Tooltip stylish</a></li>
                                <li><a href="<?php echo base_url('admin/ui/sweet_alert') ?>"><i class="fa fa-angle-right"></i> Sweet Alert</a></li>
                                <li><a href="<?php echo base_url('admin/ui/notification') ?>"><i class="fa fa-angle-right"></i> Notification</a></li>
                                <li><a href="<?php echo base_url('admin/ui/timeline') ?>"><i class="fa fa-angle-right"></i> Timeline</a></li>
                                <li><a href="<?php echo base_url('admin/ui/typography') ?>"><i class="fa fa-angle-right"></i> Typography</a></li>
                                <li><a href="<?php echo base_url('admin/ui/bootstrap_ui') ?>"><i class="fa fa-angle-right"></i> Bootstrap Ui</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/pages/blank') ?>"><i class="fa fa-angle-right"></i> Blank page</a></li>
                                <li><a href="<?php echo base_url('admin/pages/login') ?>"><i class="fa fa-angle-right"></i> Login</a></li>
                                <li><a href="<?php echo base_url('admin/pages/register') ?>"><i class="fa fa-angle-right"></i> Register</a></li>
                                <li><a href="<?php echo base_url('admin/pages/lockscreen') ?>"><i class="fa fa-angle-right"></i> Lockscreen</a></li>
                                <li><a href="<?php echo base_url('admin/pages/recover') ?>"><i class="fa fa-angle-right"></i> Recover password</a></li>
                                <li><a href="<?php echo base_url('admin/pages/profile') ?>"><i class="fa fa-angle-right"></i> Profile page</a></li>
                                <li><a href="<?php echo base_url('admin/pages/invoice') ?>"><i class="fa fa-angle-right"></i> Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/pages/error') ?>"><i class="fa fa-angle-right"></i> Error Pages</a></li>
                            </ul>
                        </li>
                        

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/ui/mail') ?>" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                        </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/google_map') ?>"><i class="fa fa-angle-right"></i> Google Maps</a></li>
                                <li><a href="<?php echo base_url('admin/ui/vector_map') ?>"><i class="fa fa-angle-right"></i> Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/ui/widget') ?>" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/morris_chart') ?>"><i class="fa fa-angle-right"></i> Morris Chart</a></li>
                                <li><a href="<?php echo base_url('admin/ui/js_chart') ?>"><i class="fa fa-angle-right"></i> Chartjs</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo base_url('admin/ui/calender') ?>"><i class="fa fa-angle-right"></i> Calendar</a></li>
                                <li><a href="<?php echo base_url('admin/ui/contact') ?>"><i class="fa fa-angle-right"></i> Contact / Employee</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Unit</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo base_url('test-bootstrap/unit') ?>"><i class="fa fa-angle-right"></i> Daftar Unit</a></li>
                                <li><a href="<?php echo base_url('test-bootstrap/unit/add') ?>"><i class="fa fa-angle-right"></i> Tambah Unit</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Bidang</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('test-bootstrap/bidang') ?>"><i class="fa fa-angle-right"></i> Daftar Bidang</a></li>
                                <li><a href="<?php echo base_url('test-bootstrap/bidang/add') ?>"><i class="fa fa-angle-right"></i> Tambang Bidang</a></li>
                            </ul>
                        </li>

                        <!-- <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li> -->
                        
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="<?php echo base_url('auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <div class="page-wrapper">