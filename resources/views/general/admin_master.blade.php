<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>QD - Quranic Diamond Project</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css" rel="stylesheet') }}" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />



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
                    <a href="/index.html">
                        <!--
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                            width="30" height="33" viewBox="0 4 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>-->
                        <img src="{{ asset('backend/assets/img/favicon.png') }}" width="30" height="33"
                            viewBox="0 4 30 33">

                        <span class="brand-name">لوحة تحكم الماسة القرآنية</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">







                        <li class="has-sub  active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <!-- <i class="mdi mdi-book-open"></i>-->
                                <img src="{{ asset('backend/assets/img/quran.png') }}" width="30" height="33"
                                    viewBox="0 4 30 33" style="margin-right: 6%">
                                <span class="nav-text">القرآن الكريم</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#components" aria-expanded="false" aria-controls="components">
                                            <span class="nav-text">إضافة تسميع للطلاب</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="components">
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




                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#quran_viewer" aria-expanded="false"
                                            aria-controls="quran_viewer">
                                            <span class="nav-text">الإطلاع على بيانات القرآن الكريم</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="quran_viewer">
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





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#charts" aria-expanded="false" aria-controls="charts">
                                <i class="mdi mdi-school"></i>
                                <span class="nav-text">القسم العلمي</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li>
                                        <a class="sidenav-item-link" href="chartjs.html">
                                            <span class="nav-text">ChartJS</span>

                                        </a>
                                    </li>




                                </div>
                            </ul>
                        </li>





                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="mdi mdi-arrange-bring-to-front"></i>
                                <span class="nav-text">القسم الإداري</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('management.courses.main') }}">
                                            <span class="nav-text">الدورات</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="user-profile.html">
                                            <span class="nav-text">الحلقات</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('management.staff.main') }}">
                                            <span class="nav-text">كادر المسجد</span>

                                        </a>
                                    </li>



                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#authentication" aria-expanded="false"
                                            aria-controls="authentication">
                                            <span class="nav-text">الطلاب</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="authentication">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('management.students.main') }}">التسجيل والملفات
                                                        الشخصية</a>
                                                </li>

                                                <li class="has-sub">
                                                    <a class="sidenav-item-link" href="javascript:void(0)"
                                                        data-toggle="collapse" data-target="#duties"
                                                        aria-expanded="false" aria-controls="duties">
                                                        <span class="nav-text">الواجبات</span> <b class="caret"></b>
                                                    </a>
                                                    <ul class="collapse" id="duties">
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





                                </div>
                            </ul>
                        </li>


                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-gift"></i>

                                <span class="nav-text">النقاط والعطيات</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#points" aria-expanded="false" aria-controls="points">
                                            <span class="nav-text">قسم النقاط</span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="points">
                                            <div class="sub-menu">
                                                <li class="has-sub">
                                                    <a href="javascript:void(0)" data-toggle="collapse"
                                                        data-target="#points-option-1" aria-expanded="false"
                                                        aria-controls="points-option-1">الإطلاع على النقاط<b
                                                            class="caret"></b></a>
                                                    <ul class="collapse" id="points-option-1">
                                                        <div class="sub-menu">
                                                            <li><a href={{ route('students.points.students.selector') }}>نقاط طالب</a></li>
                                                            <li><a href="#">نقاط حلقة</a></li>
                                                            <li><a href="#">نقاط دورة</a></li>

                                                        </div>
                                                    </ul>
                                                </li>

                                                <li class="has-sub">
                                                    <a href="javascript:void(0)" data-toggle="collapse"
                                                        data-target="#points-option-2" aria-expanded="false"
                                                        aria-controls="points-option-2">إضافة نقاط<b
                                                            class="caret"></b></a>
                                                    <ul class="collapse" id="points-option-2">
                                                        <div class="sub-menu">
                                                            <li><a href="#">نقاط لطالب</a></li>
                                                            <li><a href="#">نقاط لحلقة</a></li>
                                                            <li><a href="#">نقاط لدورة</a></li>
                                                        </div>
                                                    </ul>
                                                </li>

                                                <li class="has-sub">
                                                    <a href="javascript:void(0)" data-toggle="collapse"
                                                        data-target="#points-option-3" aria-expanded="false"
                                                        aria-controls="points-option-3">إعدادات النقاط<b
                                                            class="caret"></b></a>
                                                    <ul class="collapse" id="points-option-3">
                                                        <div class="sub-menu">
                                                            <li><a href="#">نقاط الحضور</a></li>
                                                            <li><a href="#">نقاط تسميع القرآن الكريم</a></li>
                                                        </div>
                                                    </ul>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>

                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#gifts" aria-expanded="false" aria-controls="gifts">
                                            <span class="nav-text">قسم العطيات</span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="gifts">
                                            <div class="sub-menu">
                                                <li class="has-sub">
                                                    <a href="javascript:void(0)" data-toggle="collapse"
                                                        data-target="#gifts-option-1" aria-expanded="false"
                                                        aria-controls="gifts-option-1">قسم النقاط<b
                                                            class="caret"></b></a>
                                                    <ul class="collapse" id="gifts-option-1">
                                                        <div class="sub-menu">
                                                            <li><a href="#">الإطلاع على النقاط</a></li>
                                                            <li><a href="#">خيار 2-1-2</a></li>
                                                        </div>
                                                    </ul>
                                                </li>
                                                <li><a href="#">خيار 2-2</a></li>
                                                <li><a href="#">خيار 2-3</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>


                    </ul>


                </div>

                <hr class="separator" />

                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <h6 class="text-uppercase">
                            عدد الطلاب الكلي <span class="float-right">40%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                        </div>
                        <h6 class="text-uppercase">
                            عدد الخلايا المسمعة <span class="float-right">65%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar">
                            </div>
                        </div>
                    </div>
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
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="search is unavailable now" autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

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
                            <li class="dropdown notifications-menu">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-ring"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ asset('backend/assets/img/user/user.png') }}" width="60"
                                        height="70" viewBox="0 4 60 60" class="img-circle" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Yahya Sbini</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="{{ asset('backend/assets/img/user/user.png') }}" class="img-circle"
                                            alt="User Image" />
                                        <div class="d-inline-block">
                                            Abdus Salam <small class="pt-1">yahyasbini@gmail.com</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="mdi mdi-email"></i> Message
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
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
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>





</body>

</html>
