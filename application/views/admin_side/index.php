    <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
    <link href="<?php echo base_url(); ?>admin_side/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>admin_side/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES --> 
    <link href="<?php echo base_url(); ?>admin_side/assets/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- END PAGE LEVEL STYLES -->

               
                <!-- END PAGE HEADER-->
                <div id="dashboard">
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row-fluid">
                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="icon-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        1349
                                    </div>
                                    <div class="desc">                           
                                        New Feedbacks
                                    </div>
                                </div>
                                <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>                 
                            </div>
                        </div>
                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="icon-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">549</div>
                                    <div class="desc">New Orders</div>
                                </div>
                                <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>                 
                            </div>
                        </div>
                        <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="icon-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">+89%</div>
                                    <div class="desc">Brand Popularity</div>
                                </div>
                                <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>                 
                            </div>
                        </div>
                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                            <div class="dashboard-stat yellow">
                                <div class="visual">
                                    <i class="icon-bar-chart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">12,5M$</div>
                                    <div class="desc">Total Profit</div>
                                </div>
                                <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>                 
                            </div>
                        </div>
                    </div>
                    <!-- END DASHBOARD STATS -->
                    <div class="clearfix"></div>
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet solid bordered light-grey">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-bar-chart"></i>Site Visits</div>
                                    <div class="tools">
                                        <div class="btn-group pull-right" data-toggle="buttons-radio">
                                            <a href="" class="btn mini">Users</a>
                                            <a href="" class="btn mini active">Feedbacks</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="site_statistics_loading">
                                        <img src="assets/img/loading.gif" alt="loading" />
                                    </div>
                                    <div id="site_statistics_content" class="hide">
                                        <div id="site_statistics" class="chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                       
                    </div>
                
                    <div class="clearfix"></div>
                    <div class="row-fluid">
                        
                        <div class="span12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet">
                                <div class="portlet-title line">
                                    <div class="caption"><i class="icon-comments"></i>Chats</div>
                                    <div class="tools">
                                        <a href="" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="" class="reload"></a>
                                        <a href="" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body" id="chats">
                                    <div class="scroller" style="height:435px" data-always-visible="1" data-rail-visible1="1">
                                        <ul class="chats">
                                            <li class="in">
                                                <img class="avatar" alt="" src="<?php echo base_url();?>admin_side/assets/img/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Lisa Wong</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Richard Doe</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src"<?php echo base_url();?>admin_side/assets/img/avatar1.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Bob Nilson</a>
                                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                                    <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-form">
                                        <div class="input-cont">   
                                            <input class="m-wrap" type="text" placeholder="Type a message here..." />
                                        </div>
                                        <div class="btn-cont"> 
                                            <span class="arrow"></span>
                                            <a href="" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                </div>
       

        <!-- END PAGE -->
       <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/scripts/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_side/assets/scripts/tasks.js" type="text/javascript"></script>        
    <!-- END PAGE LEVEL SCRIPTS -->  
    <script>
        jQuery(document).ready(function() {    
           App.init(); // initlayout and core plugins
           Index.init();
           Index.initJQVMAP(); // init index page's custom scripts
           Index.initCalendar(); // init index page's custom scripts
           Index.initCharts(); // init index page's custom scripts
           Index.initChat();
           Index.initMiniCharts();
           Index.initDashboardDaterange();
           Index.initIntro();
           Tasks.initDashboardWidget();
        });
    </script>
    <!-- END JAVASCRIPTS -->