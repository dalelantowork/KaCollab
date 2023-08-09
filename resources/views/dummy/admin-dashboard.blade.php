<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Datu eGovernance</title>

    <meta name="description" content="Datu eGovernance created by Hidetech Corporation">
    <meta name="author" content="Hidetech Corporation">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Datu eGovernance">
    <meta property="og:site_name" content="Datu eGovernance">
    <meta property="og:description" content="Datu eGovernance created by Hidetech Corporation">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:
    
      GENERIC
    
        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')
    
      SIDEBAR & SIDE OVERLAY
    
        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar
    
        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default
    
        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens
    
        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)
    
      HEADER
    
        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header
    
    
      FOOTER
    
        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)
    
      HEADER STYLE
    
        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)
    
      MAIN CONTENT LAYOUT
    
        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        
      DARK MODE
    
        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
        Sidebar Mini Mode - Display Helper classes
      
        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element
      
        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
              <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Toggle Sidebar Style -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <!-- END Toggle Sidebar Style -->

              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                <i class="far fa-moon" id="dark-mode-toggler"></i>
              </button>
              <!-- END Dark Mode -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon fa fa-location-arrow"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
                </a>
              </li>
              <li class="nav-main-item open">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                  <i class="nav-main-link-icon fa fa-clone"></i>
                  <span class="nav-main-link-name">Page Kits</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Generic</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_blank.html">
                          <span class="nav-main-link-name">Blank</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                          <span class="nav-main-link-name">Blank (Block)</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_profile.html">
                          <span class="nav-main-link-name">Profile</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                          <span class="nav-main-link-name">Profile Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_inbox.html">
                          <span class="nav-main-link-name">Inbox</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_invoice.html">
                          <span class="nav-main-link-name">Invoice</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_faq.html">
                          <span class="nav-main-link-name">FAQ</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                          <span class="nav-main-link-name">Upgrade Plan</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_sidebar_mini_nav.html">
                          <span class="nav-main-link-name">Sidebar with Mini Nav</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item open">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                      <span class="nav-main-link-name">e-Commerce</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link active" href="be_pages_ecom_orders.html">
                          <span class="nav-main-link-name">Orders</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('processing-page')}}">
                          <span class="nav-main-link-name">Order</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_products.html">
                          <span class="nav-main-link-name">Products</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="javascript:void(0)">
                          <span class="nav-main-link-name">Product Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_customer.html">
                          <span class="nav-main-link-name">Customer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Projects</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_projects_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_projects_tasks.html">
                          <span class="nav-main-link-name">Project Tasks</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_projects_create.html">
                          <span class="nav-main-link-name">Create</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_projects_edit.html">
                          <span class="nav-main-link-name">Edit</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Jobs</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_jobs_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_jobs_listing.html">
                          <span class="nav-main-link-name">Listing</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_jobs_apply.html">
                          <span class="nav-main-link-name">Apply</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_jobs_post.html">
                          <span class="nav-main-link-name">Post</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Education</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_education_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_education_course.html">
                          <span class="nav-main-link-name">Course</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_education_authors.html">
                          <span class="nav-main-link-name">Authors</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Forum</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_categories.html">
                          <span class="nav-main-link-name">Categories</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_topics.html">
                          <span class="nav-main-link-name">Topics</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_discussion.html">
                          <span class="nav-main-link-name">Discussion</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_list.html">
                          <span class="nav-main-link-name">List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_grid.html">
                          <span class="nav-main-link-name">Grid</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story.html">
                          <span class="nav-main-link-name">Story</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                          <span class="nav-main-link-name">Story Cover</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_post_manage.html">
                          <span class="nav-main-link-name">Manage Posts</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_post_add.html">
                          <span class="nav-main-link-name">Add Post</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_post_edit.html">
                          <span class="nav-main-link-name">Edit Post</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Boxed Backend</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_1.html">
                          <span class="nav-main-link-name">Simple 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_2.html">
                          <span class="nav-main-link-name">Simple 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_1.html">
                          <span class="nav-main-link-name">Image 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_2.html">
                          <span class="nav-main-link-name">Image 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_1.html">
                          <span class="nav-main-link-name">Video 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_2.html">
                          <span class="nav-main-link-name">Video 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Special</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_checkout.html">
                          <span class="nav-main-link-name">Checkout</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_maintenance.html">
                          <span class="nav-main-link-name">Maintenance</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_status.html">
                          <span class="nav-main-link-name">Status</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_installation.html">
                          <span class="nav-main-link-name">Installation</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_coming_soon.html">
                          <span class="nav-main-link-name">Coming Soon</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="op_coming_soon_2.html">
                          <span class="nav-main-link-name">Coming Soon 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Base</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-border-all"></i>
                  <span class="nav-main-link-name">Blocks</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_options.html">
                      <span class="nav-main-link-name">Options</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_forms.html">
                      <span class="nav-main-link-name">Forms</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_themed.html">
                      <span class="nav-main-link-name">Themed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-boxes"></i>
                  <span class="nav-main-link-name">Widgets</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_tiles.html">
                      <span class="nav-main-link-name">Tiles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_stats.html">
                      <span class="nav-main-link-name">Statistics</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_media.html">
                      <span class="nav-main-link-name">Media</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_users.html">
                      <span class="nav-main-link-name">Users</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_blog.html">
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_various.html">
                      <span class="nav-main-link-name">Various</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-vector-square"></i>
                  <span class="nav-main-link-name">Layout</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Page</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_default.html">
                          <span class="nav-main-link-name">Default</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_flipped.html">
                          <span class="nav-main-link-name">Flipped</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                          <span class="nav-main-link-name">Native Scrolling</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Main Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                          <span class="nav-main-link-name">Full Width</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                          <span class="nav-main-link-name">Narrow</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                          <span class="nav-main-link-name">Boxed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_side_left.html">
                          <span class="nav-main-link-name">Left</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_side_right.html">
                          <span class="nav-main-link-name">Right</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Hero</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Color</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_color_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_color_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Image</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_image_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_image_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Video</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_video_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_video_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Header</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Footer</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_footer_static.html">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_footer_fixed.html">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sidebar</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                          <span class="nav-main-link-name">Mini</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                          <span class="nav-main-link-name">Hidden</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Overlay</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                          <span class="nav-main-link-name">Visible</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                          <span class="nav-main-link-name">Hover Mode</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                          <span class="nav-main-link-name">No Page Overlay</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Interface</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-flask"></i>
                  <span class="nav-main-link-name">Elements</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_icons.html">
                      <span class="nav-main-link-name">Icon Packs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_grid.html">
                      <span class="nav-main-link-name">Grid</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_typography.html">
                      <span class="nav-main-link-name">Typography</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation.html">
                      <span class="nav-main-link-name">Navigation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                      <span class="nav-main-link-name">Horizontal Nav</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_mega_menu.html">
                      <span class="nav-main-link-name">Mega Menu</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tabs.html">
                      <span class="nav-main-link-name">Tabs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons.html">
                      <span class="nav-main-link-name">Buttons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons_groups.html">
                      <span class="nav-main-link-name">Button Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_dropdowns.html">
                      <span class="nav-main-link-name">Dropdowns</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_progress.html">
                      <span class="nav-main-link-name">Progress</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_alerts.html">
                      <span class="nav-main-link-name">Alerts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tooltips.html">
                      <span class="nav-main-link-name">Tooltips</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_popovers.html">
                      <span class="nav-main-link-name">Popovers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_accordion.html">
                      <span class="nav-main-link-name">Accordion</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_modals.html">
                      <span class="nav-main-link-name">Modals</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_images.html">
                      <span class="nav-main-link-name">Images Overlay</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_timeline.html">
                      <span class="nav-main-link-name">Timeline</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_ribbons.html">
                      <span class="nav-main-link-name">Ribbons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_animations.html">
                      <span class="nav-main-link-name">Animations</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_backgrounds.html">
                      <span class="nav-main-link-name">Backgrounds</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_color_themes.html">
                      <span class="nav-main-link-name">Color Themes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                  <span class="nav-main-link-name">Tables</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_responsive.html">
                      <span class="nav-main-link-name">Responsive</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_helpers.html">
                      <span class="nav-main-link-name">Helpers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_pricing.html">
                      <span class="nav-main-link-name">Pricing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_datatables.html">
                      <span class="nav-main-link-name">DataTables</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-sticky-note"></i>
                  <span class="nav-main-link-name">Forms</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_elements.html">
                      <span class="nav-main-link-name">Elements</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_layouts.html">
                      <span class="nav-main-link-name">Layouts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_input_groups.html">
                      <span class="nav-main-link-name">Input Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_plugins.html">
                      <span class="nav-main-link-name">Plugins</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_editors.html">
                      <span class="nav-main-link-name">Editors</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">CKEditor 5</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                          <span class="nav-main-link-name">Inline</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_validation.html">
                      <span class="nav-main-link-name">Validation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Extend</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-wrench"></i>
                  <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_onboarding.html">
                      <span class="nav-main-link-name">Onboarding</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_nestable.html">
                      <span class="nav-main-link-name">Nestable</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_dialogs.html">
                      <span class="nav-main-link-name">Dialogs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_notifications.html">
                      <span class="nav-main-link-name">Notifications</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_loaders.html">
                      <span class="nav-main-link-name">Loaders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_charts.html">
                      <span class="nav-main-link-name">Charts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_gallery.html">
                      <span class="nav-main-link-name">Gallery</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_sliders.html">
                      <span class="nav-main-link-name">Sliders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_carousel.html">
                      <span class="nav-main-link-name">Carousel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_offcanvas.html">
                      <span class="nav-main-link-name">Offcanvas</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_rating.html">
                      <span class="nav-main-link-name">Rating</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_appear.html">
                      <span class="nav-main-link-name">Appear</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_calendar.html">
                      <span class="nav-main-link-name">Calendar</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                      <span class="nav-main-link-name">Image Cropper</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                      <span class="nav-main-link-name">Vector Maps</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                      <span class="nav-main-link-name">Syntax Highlighting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-cog"></i>
                  <span class="nav-main-link-name">Main Menu</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-inbox"></i>
                      <span class="nav-main-link-name">1.1 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-fire"></i>
                      <span class="nav-main-link-name">1.2 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-share-alt"></i>
                      <span class="nav-main-link-name">1.3 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sub Level 2</span>
                      <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-tag"></i>
                          <span class="nav-main-link-name">2.1 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-info">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-chart-pie"></i>
                          <span class="nav-main-link-name">2.2 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-danger">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-sticky-note"></i>
                          <span class="nav-main-link-name">2.3 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-warning">3</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Sub Level 3</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-map"></i>
                              <span class="nav-main-link-name">3.1 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-coffee"></i>
                              <span class="nav-main-link-name">3.2 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-user-astronaut"></i>
                              <span class="nav-main-link-name">3.3 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <span class="nav-main-link-name">Sub Level 4</span>
                            </a>
                            <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-heart"></i>
                                  <span class="nav-main-link-name">4.1 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-search"></i>
                                  <span class="nav-main-link-name">4.2 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-microphone"></i>
                                  <span class="nav-main-link-name">4.3 Item</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Pages</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-rocket"></i>
                  <span class="nav-main-link-name">Dashboards</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                      <span class="nav-main-link-name">Corporate v1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_social.html">
                      <span class="nav-main-link-name">Social</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_messages.html">
                      <span class="nav-main-link-name">Messages</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_dark.html">
                      <span class="nav-main-link-name">Dark</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_minimal.html">
                      <span class="nav-main-link-name">Minimal</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_modern.html">
                      <span class="nav-main-link-name">Modern</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_classic_boxed.html">
                      <span class="nav-main-link-name">Classic Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_banking.html">
                      <span class="nav-main-link-name">Banking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_crypto.html">
                      <span class="nav-main-link-name">Crypto</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_hosting.html">
                      <span class="nav-main-link-name">Hosting</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_booking.html">
                      <span class="nav-main-link-name">Booking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_gaming.html">
                      <span class="nav-main-link-name">Gaming</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_tasks.html">
                      <span class="nav-main-link-name">Tasks</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_medical.html">
                      <span class="nav-main-link-name">Medical</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_travel.html">
                      <span class="nav-main-link-name">Travel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_social_compact.html">
                      <span class="nav-main-link-name">Social Compact</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_analytics.html">
                      <span class="nav-main-link-name">Analytics</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_corporate_slim.html">
                      <span class="nav-main-link-name">Corporate Slim</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_wp_post.html">
                      <span class="nav-main-link-name">WP Post</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_file_hosting.html">
                      <span class="nav-main-link-name">File Hosting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-user-friends"></i>
                  <span class="nav-main-link-name">Auth</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_auth_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin.html">
                      <span class="nav-main-link-name">Sign In</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin_box.html">
                      <span class="nav-main-link-name">Sign In Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin_box_alt.html">
                      <span class="nav-main-link-name">Sign In Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup.html">
                      <span class="nav-main-link-name">Sign Up</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup_box.html">
                      <span class="nav-main-link-name">Sign Up Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup_box_alt.html">
                      <span class="nav-main-link-name">Sign Up Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock.html">
                      <span class="nav-main-link-name">Lock Screen</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock_box.html">
                      <span class="nav-main-link-name">Lock Screen Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock_box_alt.html">
                      <span class="nav-main-link-name">Lock Screen Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder.html">
                      <span class="nav-main-link-name">Pass Reminder</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder_box.html">
                      <span class="nav-main-link-name">Pass Reminder Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder_box_alt.html">
                      <span class="nav-main-link-name">Pass Reminder Box Alt</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-ghost"></i>
                  <span class="nav-main-link-name">Error</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_error_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_400.html">
                      <span class="nav-main-link-name">400</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_401.html">
                      <span class="nav-main-link-name">401</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_403.html">
                      <span class="nav-main-link-name">403</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_404.html">
                      <span class="nav-main-link-name">404</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_500.html">
                      <span class="nav-main-link-name">500</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_503.html">
                      <span class="nav-main-link-name">503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-coffee"></i>
                  <span class="nav-main-link-name">Get Started</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend.html">
                      <span class="nav-main-link-name">Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend_boxed.html">
                      <span class="nav-main-link-name">Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_landing.html">
                      <span class="nav-main-link-name">Landing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend.html">
                      <span class="nav-main-link-name">RTL Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                      <span class="nav-main-link-name">RTL Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_landing.html">
                      <span class="nav-main-link-name">RTL Landing</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
            </button>
            <!-- END Open Search Section -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block">Admin</span>
                <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                  User Options
                </div>
                <div class="p-2">
                  <a class="dropdown-item" href="be_pages_generic_profile.html">
                    <i class="far fa-fw fa-user me-1"></i> Profile
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                  </a>
                  <a class="dropdown-item" href="be_pages_generic_invoice.html">
                    <i class="far fa-fw fa-file-alt me-1"></i> Invoices
                  </a>
                  <div role="separator" class="dropdown-divider"></div>

                  <!-- Toggle Side Overlay -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="far fa-fw fa-building me-1"></i> Settings
                  </a>
                  <!-- END Side Overlay -->

                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="op_auth_signin.html">
                    <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                  Notifications
                </div>
                <ul class="nav-items my-2">
                  <li>
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 mx-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 fs-sm pe-2">
                        <div class="fw-semibold">App was updated to v5.6!</div>
                        <div class="text-muted">3 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 mx-3">
                        <i class="fa fa-fw fa-user-plus text-info"></i>
                      </div>
                      <div class="flex-grow-1 fs-sm pe-2">
                        <div class="fw-semibold">New Subscriber was added! You now have 2580!</div>
                        <div class="text-muted">10 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 mx-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                      </div>
                      <div class="flex-grow-1 fs-sm pe-2">
                        <div class="fw-semibold">Server backup failed to complete!</div>
                        <div class="text-muted">30 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 mx-3">
                        <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                      </div>
                      <div class="flex-grow-1 fs-sm pe-2">
                        <div class="fw-semibold">You are running out of space. Please consider upgrading your plan.</div>
                        <div class="text-muted">1 hour ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 mx-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 fs-sm pe-2">
                        <div class="fw-semibold">New Sale! + PHP 30</div>
                        <div class="text-muted">2 hours ago</div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top">
                  <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-fw fa-times-circle"></i>
                  </button>
                  <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Quick Overview -->
          <div class="row items-push">
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="be_pages_ecom_orders.html">
                <div class="block-content py-5">
                  <div class="fs-3 fw-semibold text-primary mb-1">78</div>
                  <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                    Pending For Processing
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                <div class="block-content py-5">
                  <div class="fs-3 fw-semibold text-success mb-1">1,231</div>
                  <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                    Total Accomplished
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                <div class="block-content py-5">
                  <div class="fs-3 fw-semibold mb-1">1,266</div>
                  <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                    Total Processed Today
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3">
              <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                <div class="block-content py-5">
                  <div class="fs-3 fw-semibold mb-1">PHP 164,485.00</div>
                  <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                    Earnings Today
                  </p>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Overview -->

          <!-- Orders Overview -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Applications Overview</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
              <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
              <div style="height: 420px;"><canvas id="js-chartjs-overview"></canvas></div>
            </div>
          </div>
          <!-- END Orders Overview -->

          <!-- Top Products and Latest Orders -->
          <div class="row">
            <div class="col-xl-6">
              <!-- Top Products -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Top Priority</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-borderless table-striped table-vcenter fs-sm">
                    <tbody>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.965</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Fire Clearance</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.154</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Control</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.523</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">PhilHealth Clearance</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.423</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Building Permit</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.391</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Sanitary Permit</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.218</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Mayor's Permit</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.995</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">SSS</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.761</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">DTI Registration</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.860</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Fire Clearance</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="javascript:void(0)">PID.952</a>
                        </td>
                        <td>
                          <a class="fw-medium" href="javascript:void(0)">Fire Clearance</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end text-nowrap">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Top Products -->
            </div>
            <div class="col-xl-6">
              <!-- Latest Orders -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Applications</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-borderless table-striped table-vcenter fs-sm">
                    <tbody>
                      <tr>
                        <td class="fw-semibold text-center" style="width: 100px;">
                          <a href="be_pages_ecom_order.html">ORD.7116</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                        </td>
                        <td>
                          <span class="badge bg-success">Accomplished</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 544.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7115</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Jose Wagner</a>
                        </td>
                        <td>
                          <span class="badge bg-danger">Canceled</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 129.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7114</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                        </td>
                        <td>
                          <span class="badge bg-success">Accomplished</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 822.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7113</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                        </td>
                        <td>
                          <span class="badge bg-warning">Processing</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 750.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7112</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Amber Harvey</a>
                        </td>
                        <td>
                          <span class="badge bg-success">Accomplished</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 562.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7111</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Jesse Fisher</a>
                        </td>
                        <td>
                          <span class="badge bg-warning">Processing</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 165.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7110</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                        </td>
                        <td>
                          <span class="badge bg-success">Accomplished</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 425.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7109</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Amanda Powell</a>
                        </td>
                        <td>
                          <span class="badge bg-warning">Processing</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 607.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7108</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Alice Moore</a>
                        </td>
                        <td>
                          <span class="badge bg-success">Accomplished</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 238.00</td>
                      </tr>
                      <tr>
                        <td class="fw-semibold text-center">
                          <a href="be_pages_ecom_order.html">ORD.7107</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a class="fw-medium" href="be_pages_ecom_customer.html">Brian Cruz</a>
                        </td>
                        <td>
                          <span class="badge bg-danger">Canceled</span>
                        </td>
                        <td class="fw-semibold text-end">PHP 167.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Latest Orders -->
            </div>
          </div>
          <!-- END Top Products and Latest Orders -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-primary"></i> by <a class="fw-semibold" href="http://hidetech.ph" target="_blank">Hidetech Corporation</a>
            </div>
            <div class="col-sm-6 order-sm-1 text-center text-sm-start">
              <a class="fw-semibold" href="http://hidetech.ph" target="_blank">Datu eGovernance</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS
    
      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('js/dashmix.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('js/plugins/chart.js/chart.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('js/pages/be_pages_ecom_dashboard.min.js')}}"></script>
  </body>
</html>
