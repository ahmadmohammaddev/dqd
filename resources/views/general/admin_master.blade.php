<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>QD - Quranic Diamond Project</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css" rel="stylesheet') }}" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.rtl.css') }}" />

    <style>
        body, h1, h2, h3, h4, h5, h6, .nav-text, .brand-name, .dropdown-item, .btn, .sidebar, .control-label, .form-control {
            font-family: 'Cairo', sans-serif !important;
        }

        /* Fix sidebar brand styling: align icon and text correctly without clipping */
        .app-brand {
            overflow: hidden;
        }
        .app-brand a {
            display: flex !important;
            align-items: center !important;
            height: 75px !important;
            line-height: normal !important;
            padding-right: 1.2rem !important;
            padding-left: 1rem !important;
            text-decoration: none;
        }
        .app-brand a img {
            width: 35px !important;
            height: auto !important;
            flex-shrink: 0;
        }
        .app-brand .brand-name {
            font-size: 0.95rem !important;
            line-height: 1.3 !important;
            margin-right: 0.5rem !important;
            margin-left: 0 !important;
            white-space: normal !important;
            font-weight: 600 !important;
            display: inline-block;
            color: #ffffff !important;
        }

        /* Align custom Quran icon in the sidebar menu items */
        .sidebar .nav > li > a img.quran-menu-icon {
            width: 20px !important;
            height: 20px !important;
            margin-left: 0.94rem !important;
            margin-right: 0px !important;
            object-fit: contain !important;
            vertical-align: middle;
        }

        /* Make the sidebar wider (280px instead of 250px) only when NOT minified */
        body:not(.sidebar-minified) .left-sidebar {
            width: 280px !important;
        }
        @media (max-width: 767px) {
            body:not(.sidebar-minified) .left-sidebar {
                transform: translateX(280px) !important;
            }
            .sidebar-minified-out .left-sidebar {
                transform: translateX(0px) !important;
            }
        }
        @media (min-width: 768px) {
            body:not(.sidebar-minified) .left-sidebar {
                transform: translateX(0) !important;
                width: 280px !important;
            }
            body:not(.sidebar-minified) .app-brand a {
                width: 280px !important;
            }
            body:not(.sidebar-minified) .sidebar-footer {
                width: 280px !important;
            }
            
            /* Adjust page wrappers and main header padding-right to match new width */
            body:not(.sidebar-minified).sidebar-fixed .page-wrapper {
                padding-right: 280px !important;
            }
            body:not(.sidebar-minified).sidebar-fixed .main-header {
                padding-right: 280px !important;
            }
            
            /* Sidebar Minified Expand State on Hover */
            .sidebar-minified .left-sidebar:hover {
                width: 280px !important;
                margin-left: -205px !important; /* Shift leftwards by difference (280px - 75px = 205px) */
            }
            .sidebar-minified .left-sidebar:hover .app-brand a {
                width: 280px !important;
            }
            
            /* Collapse behavior */
            .sidebar-collapse .left-sidebar {
                margin-right: -280px !important;
            }
            .sidebar-collapse .page-wrapper {
                padding-right: 0px !important;
            }
            .sidebar-collapse.header-fixed .page-wrapper .main-header {
                padding-right: 0px !important;
            }
        }
    </style>



    <!-- FAVICON -->
    <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
  HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }} "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('backend/assets/img/favicon.png') }}" alt="الماسية القرآنية">
                        <span class="brand-name">لوحة تحكم الماسة القرآنية</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">







                        <li class="has-sub {{ request()->routeIs('management.*') ? 'active expand' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="mdi mdi-arrange-bring-to-front"></i>
                                <span class="nav-text">القسم الإداري</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse {{ request()->routeIs('management.*') ? 'show' : '' }}" id="pages" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('management.courses.main') }}">
                                            <span class="nav-text">الدورات</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('management.groups.main') }}">
                                            <span class="nav-text">الحلقات</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('management.staff.main') }}">
                                            <span class="nav-text">الأساتذة</span>

                                        </a>
                                    </li>



                                    <li class="has-sub {{ (request()->routeIs('management.student.*') || request()->routeIs('management.students.*') || request()->routeIs('management.parent.*')) ? 'active expand' : '' }}">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#authentication" aria-expanded="false"
                                            aria-controls="authentication">
                                            <span class="nav-text">الطلاب</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse {{ (request()->routeIs('management.student.*') || request()->routeIs('management.students.*') || request()->routeIs('management.parent.*')) ? 'show' : '' }}" id="authentication">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('management.students.main') }}">التسجيل والملفات
                                                        الشخصية</a>
                                                </li>

                                                <li class="has-sub {{ (request()->routeIs('*duties*') || request()->routeIs('management.student.show.*')) ? 'active expand' : '' }}">
                                                    <a class="sidenav-item-link" href="javascript:void(0)"
                                                        data-toggle="collapse" data-target="#duties"
                                                        aria-expanded="false" aria-controls="duties">
                                                        <span class="nav-text">الواجبات</span> <b class="caret"></b>
                                                    </a>
                                                    <ul class="collapse {{ (request()->routeIs('*duties*') || request()->routeIs('management.student.show.*')) ? 'show' : '' }}" id="duties">
                                                        <div class="sub-menu">

                                                            <li>
                                                                <a href="{{ route('management.students.main') }}">
                                                                    إضافة واجبات</a>
                                                            </li>

                                                            <li class="">
                                                                <a href="sign-up.html">الإطلاع على الواجبات</a>
                                                            </li>

                                                        </div>
                                                    </ul>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                    <li class="has-sub {{ request()->routeIs('management.attendance.*') ? 'active expand' : '' }}">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#absence" aria-expanded="false"
                                            aria-controls="absence">
                                            <span class="nav-text">التفقد</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse {{ request()->routeIs('management.attendance.*') ? 'show' : '' }}" id="absence">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('management.attendance.students.show.groups') }}">
                                                    تفقد الطلاب
                                                        </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('management.attendance.students.show.groups') }}">عرض تفقد الطلاب
                                                        </a>
                                                </li>



                                            </div>
                                        </ul>
                                    </li>


                                </div>
                            </ul>
                        </li>

                        <li class="has-sub {{ request()->routeIs('quran.*') ? 'active expand' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <img src="{{ asset('backend/assets/img/quran.png') }}" class="quran-menu-icon" alt="القرآن الكريم">
                                <span class="nav-text">القرآن الكريم</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse {{ request()->routeIs('quran.*') ? 'show' : '' }}" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">


                                    <li class="has-sub {{ (request()->routeIs('quran.home') || request()->routeIs('quran.add_*') || request()->routeIs('quran.student.recitation.add*')) ? 'active expand' : '' }}">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#components" aria-expanded="false" aria-controls="components">
                                            <span class="nav-text">إضافة تسميع للطلاب</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse {{ (request()->routeIs('quran.home') || request()->routeIs('quran.add_*') || request()->routeIs('quran.student.recitation.add*')) ? 'show' : '' }}" id="components">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('quran.home') }}">صفحة الإضافة الرئيسية</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('quran.add_cell') }}">إضافة خلية قرآنية</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('quran.add_cells') }}">إضافة خلايا قرآنية</a>
                                                </li>
                                                <!--add from cell (surah + page) to cell (surah + page)-->

                                                <li>
                                                    <a href="{{ route('quran.add_surahs') }}">إضافة سور قرآنية</a>
                                                </li>


                                            </div>
                                        </ul>
                                    </li>




                                    <li class="has-sub {{ request()->routeIs('quran.show*') ? 'active expand' : '' }}">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#quran_viewer" aria-expanded="false"
                                            aria-controls="quran_viewer">
                                            <span class="nav-text">الإطلاع على بيانات القرآن الكريم</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse {{ request()->routeIs('quran.show*') ? 'show' : '' }}" id="quran_viewer">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('quran.show_home') }}">صفحة العرض الرئيسية</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('quran.show.student_selector') }}">بيانات
                                                        طالب</a>
                                                </li>

                                                <li>
                                                    <a href="flag-icon.html">بيانات حلقة</a>
                                                </li>

                                                <li>
                                                    <a href="flag-icon.html">بيانات دورة</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#quran_operations" aria-expanded="false"
                                            aria-controls="quran_operations">
                                            <span class="nav-text">العمليات على بيانات القرآن الكريم</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="quran_operations">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="material-icon.html">تصدير التقارير</a>
                                                </li>

                                                <li>
                                                    <a href="material-icon.html"> نشاط المسمعين</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>

                                </div>
                            </ul>


                        </li>

                        <li class="has-sub" style="opacity: 0.5;">
                            <a class="sidenav-item-link" href="javascript:void(0)" style="cursor: not-allowed; pointer-events: none;">
                                <i class="mdi mdi-school"></i>
                                <span class="nav-text">القسم العلمي</span>
                                <b class="caret"></b>
                            </a>
                        </li>

                        <li class="has-sub" style="opacity: 0.5;">
                            <a class="sidenav-item-link" href="javascript:void(0)" style="cursor: not-allowed; pointer-events: none;">
                                <i class="mdi mdi-gift"></i>
                                <span class="nav-text">النقاط والعطيات</span>
                                <b class="caret"></b>
                            </a>
                        </li>


                    </ul>


                </div>


            </div>
        </aside>



        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>


                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- Github Link Button -->
                            <!--
                            <li class="github-link mr-3">
                                <a class="btn btn-outline-secondary btn-sm"
                                    href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                                    <span class="d-none d-md-inline-block mr-2">Source Code</span>
                                    <i class="mdi mdi-github-circle"></i>
                                </a>

                            </li>-->


                        </ul>
                    </div>
                </nav>


            </header>



            <div class="content-wrapper">
                <div class="content">
                    @yield('admin')
                </div>
            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2023</span> Copyright are reserved for DQD Software
                        .
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>

    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('backend/assets/js/map.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('backend/assets/js/quranic_diamond.js') }}"></script>
    <script src="{{ asset('backend/assets/js/attendance_dep.js') }}"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>






</body>

</html>
