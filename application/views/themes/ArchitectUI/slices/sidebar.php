                <!-- sidebar.php -->
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    

                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboards
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <!--<a href="<?php echo site_url('home');?>" onclick="klik(this)">-->
                                        <a href="<?php echo site_url('home');?>">
                                            <i class="metismenu-icon">
                                            </i>Analytics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('dashboards/dashboards_commerce');?>">
                                            <i class="metismenu-icon">
                                            </i>Commerce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('dashboards/dashboards_sales');?>">
                                            <i class="metismenu-icon">
                                            </i>Sales
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>
                                            Minimal
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo site_url('dashboards/dashboards_minimal_1');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Variation 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('dashboards/dashboards_minimal_2');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Variation 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('dashboards/dashboards_crm');?>">
                                            <i class="metismenu-icon"></i>
                                            CRM
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>
                                    Pages
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('login/login');?>" > 
                                            <i class="metismenu-icon"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/login_boxed');?>">
                                            <i class="metismenu-icon">
                                            </i>Login Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/register');?>">
                                            <i class="metismenu-icon">
                                            </i>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/register_boxed');?>">
                                            <i class="metismenu-icon">
                                            </i>Register Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/forgot_password');?>">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login/forgot_password_boxed');?>">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password Boxed
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>
                                    Applications
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('apps/apps_mailbox');?>">
                                            <i class="metismenu-icon">
                                            </i>Mailbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('apps/apps_chat');?>">
                                            <i class="metismenu-icon">
                                            </i>Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('apps/apps_faq_section');?>">
                                            <i class="metismenu-icon">
                                            </i>FAQ Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>
                                            Forums
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo site_url('forum/apps_forum_list');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Forum Listing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('forum/apps_forum_threads');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Forum Threads
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('forum/apps_forum_discussion');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Forum Discussion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">UI Components</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon"></i>
                                            Buttons
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="<?php echo site_url('elements/buttons');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Standard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('elements/buttons_pills');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Pills
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('elements/buttons_square');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Square
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('elements/buttons_shadow');?>">
                                                    <i class="metismenu-icon">
                                                    </i>Shadow
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('elements/buttons_icons');?>">
                                                    <i class="metismenu-icon">
                                                    </i>With Icons
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/dropdowns');?>">
                                            <i class="metismenu-icon">
                                            </i>Dropdowns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/icons');?>">
                                            <i class="metismenu-icon">
                                            </i>Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/badges');?>">
                                            <i class="metismenu-icon">
                                            </i>Badges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/cards');?>">
                                            <i class="metismenu-icon">
                                            </i>Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/elements_loaders');?>">
                                            <i class="metismenu-icon">
                                            </i>Loading Indicators
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/elements_list_group');?>">
                                            <i class="metismenu-icon">
                                            </i>List Groups
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/elements_navigation');?>">
                                            <i class="metismenu-icon">
                                            </i>Navigation Menus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/elements_timelines');?>">
                                            <i class="metismenu-icon">
                                            </i>Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('elements/elements_utilities');?>">
                                            <i class="metismenu-icon">
                                            </i>Utilities
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Components
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('components/components_tabs');?>">
                                            <i class="metismenu-icon">
                                            </i>Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_accordions');?>">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_notifications');?>">
                                            <i class="metismenu-icon">
                                            </i>Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_modals');?>">
                                            <i class="metismenu-icon">
                                            </i>Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_loading_blocks');?>">
                                            <i class="metismenu-icon">
                                            </i>Loading Blockers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_progress_bar');?>">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_tooltips');?>">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_carousel');?>">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_calendar');?>">
                                            <i class="metismenu-icon">
                                            </i>Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_pagination');?>">
                                            <i class="metismenu-icon">
                                            </i>Pagination
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_countup');?>">
                                            <i class="metismenu-icon">
                                            </i>Count Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_scrollable_elements');?>">
                                            <i class="metismenu-icon">
                                            </i>Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_tree_view');?>">
                                            <i class="metismenu-icon">
                                            </i>Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_maps');?>">
                                            <i class="metismenu-icon">
                                            </i>Maps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_ratings');?>">
                                            <i class="metismenu-icon">
                                            </i>Ratings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_image_crop');?>">
                                            <i class="metismenu-icon">
                                            </i>Image Crop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('components/components_guided_tours');?>">
                                            <i class="metismenu-icon">
                                            </i>Guided Tours
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="mm-active">-->
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tables
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <!--<ul class="mm-show">-->
                                <ul>
                                    <li>
                                        <!--<a href="<?php echo site_url('tables/datatables');?>" class="mm-active">-->
                                        <a href="<?php echo site_url('tables/datatables');?>">
                                            <i class="metismenu-icon">
                                            </i>Data Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('tables/regulartables');?>">
                                            <i class="metismenu-icon">
                                            </i>Regular Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('tables/gridtables');?>">
                                            <i class="metismenu-icon">
                                            </i>Grid Tables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Dashboard Widgets</li>
                            <li>
                                <a href="<?php echo site_url('widgets/widgets_chart_boxes1');?>">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Chart Boxes 1
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('widgets/widgets_chart_boxes2');?>">
                                    <i class="metismenu-icon pe-7s-way">
                                    </i>Chart Boxes 2
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('widgets/widgets_chart_boxes3');?>">
                                    <i class="metismenu-icon pe-7s-ball">
                                    </i>Chart Boxes 3
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('widgets/widgets_profile_boxes');?>">
                                    <i class="metismenu-icon pe-7s-id">
                                    </i>Profile Boxes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Forms</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-light"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_controls');?>">
                                            <i class="metismenu-icon">
                                            </i>Controls
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_layouts');?>">
                                            <i class="metismenu-icon">
                                            </i>Layouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_validation');?>">
                                            <i class="metismenu-icon">
                                            </i>Validation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_wizard');?>">
                                            <i class="metismenu-icon">
                                            </i>Wizard
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-joy"></i>
                                    Widgets
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_datepicker');?>">
                                            <i class="metismenu-icon">
                                            </i>Datepicker
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_rangeslider');?>">
                                            <i class="metismenu-icon">
                                            </i>Range Slider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_inputselects');?>">
                                            <i class="metismenu-icon">
                                            </i>Input Selects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_toogle_switch');?>">
                                            <i class="metismenu-icon">
                                            </i>Toggle Switch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_wysiwyg_editor');?>">
                                            <i class="metismenu-icon">
                                            </i>WYSIWYG Editor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_inputmask');?>">
                                            <i class="metismenu-icon">
                                            </i>Input Mask
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_clipboard');?>">
                                            <i class="metismenu-icon">
                                            </i>Clipboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('forms/forms_textarea_autosize');?>">
                                            <i class="metismenu-icon">
                                            </i>Textarea Autosize
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Charts</li>
                            <li>
                                <a href="<?php echo site_url('charts/chartjs');?>">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>ChartJS
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('charts/apexcharts');?>">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Apex Charts
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('charts/sparklines');?>">
                                    <i class="metismenu-icon pe-7s-graph1">
                                    </i>Chart Sparklines
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>









<script type="text/javascript">
    
    //$('#pages').addClass('mm-active');

    // Get current page and set current in nav
    /*
    $(".vertical-nav-menu > li").each(function() {
        //alert('Ok');
        
        var navItem = $(this);
        var 
        if (navItem.find("a").attr("href") == "#") {
          //navItem.addClass("mm-active");
          alert('Ok');
        }
        
    });
    */

    //$(function() {

    
    
    
    /*
    function klik(x) {
        alert('ok');
        //$(this).closest('li').addClass('mm-active');
        $(x).addClass('mm-active');
    }
    */
    
    //alert('Ok');

        
    function setNavigation() {
        /*
        alert('Ok');
        var str = location.href.toLowerCase();
        var path = window.location.pathname.toLowerCase();
        path = path.replace(/\/$/,"");
        path = decodeURIComponent(path);
        //console.log(str);
        //alert(str+' - '+path);

        
        $('.sub-menus a').each(function(){
            //alert('Ok');
            var href = $(this).attr('href');
            if (path.substring(0, href.length) == href) {
                $(this).closest('li').addClass('mm-active');
                $(this).addClass('mm-active');
            }

        });
        */
        var address = window.location.href;
        var address2 = '<?php echo site_url('home');?>';
        //alert(address+ ' -' + address2);
        var navItem = '';
        
        /*
        $(".vertical-nav-menu > li").each(function() {
            //alert('Ok');
            navItem = $(this);
            navItem.removeClass("mm-active");
            //var address = window.location.href;
            //if (navItem.find("a").attr("href") === address) {
            //  navItem.addClass("mm-active");
              //navItem.find("a").addClass("mm-active");
              //alert('Ok');
            //}
            
        });
        */

        /*
        $("[href]").each(function () {
            var address = $(this).href;
            //alert(address);

            if ($(this).href == window.location.href) {
                $(this).addClass("mm-active");
                //$(this).parents('li').find('> a').addClass("mm-active");
            }
        });
        */
        
    }  
    //setNavigation();

    
    
    $(document).ready(function () {
        //alert('ok');

        //var str = location.href.toLowerCase();
        //console.log(str);
      //$('.vertical-nav-menu a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('mm-active');
        
        //$('#pages').addClass('mm-active');
        
        /*
        $('.nav-item').on('click', function() {
            $('.nav-item').removeClass('mm-active');
            $(this).addClass('mm-active');
            $(this).addClass('active');
            //alert('Ok');
        });
        */
        
    });
    

</script>