<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
          content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>TeanaturE Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('../assets/vendors/core/core.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('../assets/vendors/flatpickr/flatpickr.min.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../assets/css/demo3/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('../assets/images/favicon.png')}}" />
</head>

<body>
<div class="main-wrapper">

    <!-- partial:partials/_navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar">
            <div class="container">
                <div class="navbar-content">
                    <a href="#" class="navbar-brand">
                        Tea Nature <span> Admin</span>
                    </a>
{{--                    <form class="search-form">--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-text">--}}
{{--                                <i data-feather="search"></i>--}}
{{--                            </div>--}}
{{--                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">--}}
{{--                        </div>--}}
{{--                    </form>--}}
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                                    class="ms-1 me-1 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us"
                                                                                     id="us"></i> <span class="ms-1"> English </span></a>
                            </div>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown"--}}
{{--                               aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i data-feather="grid"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">--}}
{{--                                    <p class="mb-0 fw-bold">Web Apps</p>--}}
{{--                                    <a href="javascript:;" class="text-muted">Edit</a>--}}
{{--                                </div>--}}
{{--                                <div class="row g-0 p-1">--}}
{{--                                    <div class="col-3 text-center">--}}
{{--                                        <a href="pages/apps/chat.html"--}}
{{--                                           class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i--}}
{{--                                                data-feather="message-square" class="icon-lg mb-1"></i>--}}
{{--                                            <p class="tx-12">Chat</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-3 text-center">--}}
{{--                                        <a href="pages/apps/calendar.html"--}}
{{--                                           class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i--}}
{{--                                                data-feather="calendar" class="icon-lg mb-1"></i>--}}
{{--                                            <p class="tx-12">Calendar</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-3 text-center">--}}
{{--                                        <a href="pages/email/inbox.html"--}}
{{--                                           class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i--}}
{{--                                                data-feather="mail" class="icon-lg mb-1"></i>--}}
{{--                                            <p class="tx-12">Email</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-3 text-center">--}}
{{--                                        <a href="pages/general/profile.html"--}}
{{--                                           class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i--}}
{{--                                                data-feather="instagram" class="icon-lg mb-1"></i>--}}
{{--                                            <p class="tx-12">Profile</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">--}}
{{--                                    <a href="javascript:;">View all</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"--}}
{{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i data-feather="mail"></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">--}}
{{--                                    <p>9 New Messages</p>--}}
{{--                                    <a href="javascript:;" class="text-muted">Clear all</a>--}}
{{--                                </div>--}}
{{--                                <div class="p-1">--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div class="me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-between flex-grow-1">--}}
{{--                                            <div class="me-4">--}}
{{--                                                <p>Leonardo Payne</p>--}}
{{--                                                <p class="tx-12 text-muted">Project status</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="tx-12 text-muted">2 min ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div class="me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-between flex-grow-1">--}}
{{--                                            <div class="me-4">--}}
{{--                                                <p>Carl Henson</p>--}}
{{--                                                <p class="tx-12 text-muted">Client meeting</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="tx-12 text-muted">30 min ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div class="me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-between flex-grow-1">--}}
{{--                                            <div class="me-4">--}}
{{--                                                <p>Jensen Combs</p>--}}
{{--                                                <p class="tx-12 text-muted">Project updates</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="tx-12 text-muted">1 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div class="me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-between flex-grow-1">--}}
{{--                                            <div class="me-4">--}}
{{--                                                <p>Amiah Burton</p>--}}
{{--                                                <p class="tx-12 text-muted">Project deatline</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="tx-12 text-muted">2 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div class="me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-between flex-grow-1">--}}
{{--                                            <div class="me-4">--}}
{{--                                                <p>Yaretzi Mayo</p>--}}
{{--                                                <p class="tx-12 text-muted">New record</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="tx-12 text-muted">5 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">--}}
{{--                                    <a href="javascript:;">View all</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"--}}
{{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i data-feather="bell"></i>--}}
{{--                                <div class="indicator">--}}
{{--                                    <div class="circle"></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">--}}
{{--                                    <p>6 New Notifications</p>--}}
{{--                                    <a href="javascript:;" class="text-muted">Clear all</a>--}}
{{--                                </div>--}}
{{--                                <div class="p-1">--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div--}}
{{--                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">--}}
{{--                                            <i class="icon-sm text-white" data-feather="gift"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 me-2">--}}
{{--                                            <p>New Order Recieved</p>--}}
{{--                                            <p class="tx-12 text-muted">30 min ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div--}}
{{--                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">--}}
{{--                                            <i class="icon-sm text-white" data-feather="alert-circle"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 me-2">--}}
{{--                                            <p>Server Limit Reached!</p>--}}
{{--                                            <p class="tx-12 text-muted">1 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div--}}
{{--                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">--}}
{{--                                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 me-2">--}}
{{--                                            <p>New customer registered</p>--}}
{{--                                            <p class="tx-12 text-muted">2 sec ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div--}}
{{--                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">--}}
{{--                                            <i class="icon-sm text-white" data-feather="layers"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 me-2">--}}
{{--                                            <p>Apps are ready for update</p>--}}
{{--                                            <p class="tx-12 text-muted">5 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">--}}
{{--                                        <div--}}
{{--                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">--}}
{{--                                            <i class="icon-sm text-white" data-feather="download"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 me-2">--}}
{{--                                            <p>Download completed</p>--}}
{{--                                            <p class="tx-12 text-muted">6 hrs ago</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">--}}
{{--                                    <a href="javascript:;">View all</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if($admin)
                                    <img class="wd-30 ht-30 rounded-circle" src="{{asset('admins/'.$admin->image)}}" alt="{{$admin->name}}">
                                @else
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                                @endif
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        @if($admin)
                                            <img class="wd-80 ht-80 rounded-circle" src="{{asset('admins/'.$admin->image)}}" alt="{{$admin->name}}">
                                        @else
                                            <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">
                                            @if($admin)
                                                {{$admin->name}}
                                            @else
                                                Demo Account
                                            @endif</p>
                                        <p class="tx-12 text-muted">@if($admin)
                                                {{$admin->email}}
                                            @else
                                                rubayetislam16@gmail.com
                                            @endif</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        @if($admin)
                                            <a href="{{route('profile',['id'=>$admin->id])}}" class="text-body ms-0">
                                                <i class="me-2 icon-md" data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        @else
                                            <a href="{{route('profile',['id'=>$id])}}" class="text-body ms-0">
                                                <i class="me-2 icon-md" data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        @endif
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="{{route('profile',['id'=>$admin->id])}}" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="https://www.teanature.com/" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="{{route('logout')}}" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </nav>
        @if($admin)
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcomePage', ['id' => $admin]) }}">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="menu-title">Products</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="category-heading">Category Section</li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('addCategory', ['id' => $admin]) }}">Add Category</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('displayCategory', ['id' => $admin]) }}">Display Category</a></li>
                                <li class="category-heading">Products Section</li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('addProduct', ['id' => $admin]) }}">Add Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('displayProduct', ['id' => $admin]) }}">Display Products</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="menu-title">Customer & Depo Section</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="category-heading">Customer Section</li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('customerInfo', ['id' => $admin]) }}">Customer Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('customerOrders', ['id' => $admin]) }}">Customer Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('deliveryTracking', ['id' => $admin]) }}">Customer Delivery Tracking</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('customerShippingCharges', ['id' => $admin]) }}">Customer Shipping Price</a></li>
                                <li class="category-heading">Depo Section</li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('depoInfo', ['id' => $admin]) }}">Depo Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('depoOrders', ['id' => $admin]) }}">Depo Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('depoTracking', ['id' => $admin]) }}">Depo Delivery Tracking</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('depoShippingCharges', ['id' => $admin]) }}">Depo Shipping Price</a></li>
                            </ul>
                        </div>
                    </li>
                    @if($admin->permission == 'Superadmin')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="inbox"></i>
                                <span class="menu-title">Sales</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('dailySales', ['id' => $admin]) }}">Daily Sales Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('monthlySales', ['id' => $admin]) }}">Monthly Sales Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('yearlySales', ['id' => $admin]) }}">Yearly Sales Tracking</a></li>
                                </ul>
                            </div>
                        </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="smile"></i>
                            <span class="menu-title">Admin Control</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="{{ route('displayAdmin', ['id' => $admin]) }}">Admins</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('displayPermission', ['id' => $admin]) }}">Permission</a></li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="book"></i>
                            <span class="menu-title">Website Pages</span>
                            <i class="link-arrow"></i>
                        </a>
                        <div class="submenu">
                            <div class="col-group-wrapper row">
                                <div class="col-group col-md-4">
                                    <p class="category-heading">Home</p>
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('marquee', ['id' => $admin]) }}">Marquee Text</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-group col-md-4">
                                    <p class="category-heading">Explore Pages</p>
                                    <div class="submenu-item">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link" href="{{route('about_us',['id'=>$admin])}}">About</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{route('testimonial',['id'=>$admin])}}">Testimonial</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{route('privacy_policy',['id'=>$admin])}}">Privacy and Policy</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link" href="{{route('blogs',['id'=>$admin])}}">Blogs</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{route('contact_page',['id'=>$admin])}}">Contact</a></li>
{{--                                                    <li class="nav-item"><a class="nav-link" href="pages/general/invoice.html">Privacy and Policy</a></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>

        @else
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcomePage', ['id' => $id]) }}">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Products</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="category-heading">Category Section</li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('addCategory', ['id' => $id]) }}">Add Category</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('displayCategory', ['id' => $id]) }}">Display Category</a></li>
                                    <li class="category-heading">Products Section</li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('addProduct', ['id' => $id]) }}">Add Products</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('displayProduct', ['id' => $id]) }}">Display Products</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="user"></i>
                                <span class="menu-title">Customer & Depo Section</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="category-heading">Customer Section</li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('customerInfo', ['id' => $id]) }}">Customer Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('customerOrders', ['id' => $id]) }}">Customer Orders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('deliveryTracking', ['id' => $id]) }}">Customer Delivery Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('customerShippingCharges', ['id' => $id]) }}">Customer Shipping Price</a></li>
                                    <li class="category-heading">Depo Section</li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('depoInfo', ['id' => $id]) }}">Depo Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('depoOrders', ['id' => $id]) }}">Depo Orders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('depoTracking', ['id' => $id]) }}">Depo Delivery Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('depoShippingCharges', ['id' => $id]) }}">Depo Shipping Price</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="inbox"></i>
                                <span class="menu-title">Sales</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('dailySales', ['id' => $id]) }}">Daily Sales Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('monthlySales', ['id' => $id]) }}">Monthly Sales Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('yearlySales', ['id' => $id]) }}">Yearly Sales Tracking</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="smile"></i>
                                <span class="menu-title">Admin Control</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('displayAdmin', ['id' => $id]) }}">Admins</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('displayPermission', ['id' => $id]) }}">Permission</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item mega-menu">
                            <a href="#" class="nav-link">
                                <i class="link-icon" data-feather="book"></i>
                                <span class="menu-title">Website Pages</span>
                                <i class="link-arrow"></i>
                            </a>
                            <div class="submenu">
                                <div class="col-group-wrapper row">
                                    <div class="col-group col-md-2">
                                        <p class="category-heading">Home</p>
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <ul>
                                                        <li class="nav-item"><a class="nav-link" href="{{route('marquee',['id'=>$id])}}">Marquee Text</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-group col-md-4">
                                        <p class="category-heading">Explore Pages</p>
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li class="nav-item"><a class="nav-link" href="pages/general/blank-page.html">About</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="pages/general/faq.html">Testimonial</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="pages/general/invoice.html">Privacy and Policy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-group col-md-3">
                                        <p class="category-heading">Auth Pages</p>
                                        <ul class="submenu-item">
                                            <li class="nav-item"><a class="nav-link" href="pages/auth/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/auth/register.html">Register</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-group col-md-3">
                                        <p class="category-heading">Error Pages</p>
                                        <ul class="submenu-item">
                                            <li class="nav-item"><a class="nav-link" href="pages/error/404.html">404</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/error/500.html">500</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                                <i class="link-icon" data-feather="hash"></i>
                                <span class="menu-title">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif

    </div>
    <!-- partial -->

    <div class="page-wrapper">

        <div class="page-content">

            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                </div>
{{--                <div class="d-flex align-items-center flex-wrap text-nowrap">--}}
{{--                    <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">--}}
{{--              <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i--}}
{{--                      data-feather="calendar" class="text-primary"></i></span>--}}
{{--                        <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date"--}}
{{--                               data-input>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        @if($admin)

                        @if($admin->permission == 'Superadmin')
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Daily Income</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{ $daily }}</h3>
                                            @php
                                                $now = \Illuminate\Support\Carbon::now();
                                                $previousDayPrice = \Illuminate\Support\Facades\DB::table('orders')
                                                                    ->whereDate('created_at', '<', $now)
                                                                    ->where('order_status','Delivered')
                                                                    ->orderBy('created_at', 'desc')
                                                                    ->value('price');

                                                if ($previousDayPrice != 0) {
                                                    $percentageChange = (($daily - $previousDayPrice) / $previousDayPrice) * 100;
                                                } else {
                                                    $percentageChange = 0;
                                                }

                                                // Determine if it's positive or negative change
                                                $changeClass = $percentageChange > 0 ? 'text-success' : ($percentageChange < 0 ? 'text-danger' : '');

                                                // Arrow icon
                                                $arrowIcon = $percentageChange > 0 ? 'arrow-up' : 'arrow-down';
                                            @endphp

                                            <div class="d-flex align-items-baseline">
                                                <p class="{{ $changeClass }}">
                                                    <span>{{ number_format($percentageChange, 2) }}%</span>
                                                    <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="customersCharts" class="mt-md-3 mt-xl-0"
                                                 data-daily="{{ $daily }}"
                                                 data-percentage-change="{{ $percentageChange }}"></div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Monthly Income</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{ $month }}</h3>
                                            @php
                                                // Calculate percentage change for the month
                                                $previousMonthTotal = \Illuminate\Support\Facades\DB::table('orders')
                                                                        ->whereYear('created_at', now()->year)
                                                                        ->whereMonth('created_at', now()->subMonth()->month)
                                                                        ->where('order_status','Delivered')
                                                                        ->sum('price');

                                                $currentMonthTotal = \Illuminate\Support\Facades\DB::table('orders')
                                                                        ->whereYear('created_at', now()->year)
                                                                        ->whereMonth('created_at', now()->month)
                                                                        ->where('order_status','Delivered')
                                                                        ->sum('price');

                                                if ($previousMonthTotal != 0) {
                                                    $percentageChange = (($currentMonthTotal - $previousMonthTotal) / $previousMonthTotal) * 100;
                                                } else {
                                                    $percentageChange = 0;
                                                }

                                                // Determine if it's positive or negative change
                                                $changeClass = $percentageChange > 0 ? 'text-success' : ($percentageChange < 0 ? 'text-danger' : '');

                                                // Arrow icon
                                                $arrowIcon = $percentageChange > 0 ? 'arrow-up' : 'arrow-down';
                                            @endphp

                                            <div class="d-flex align-items-baseline">
                                                <p class="{{ $changeClass }}">
                                                    <span>{{ number_format(abs($percentageChange), 1) }}%</span> <!-- Absolute value for display -->
                                                    <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </div>

{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
{{--                        --}}

                        <!-- Section 2, 1st row -->
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Processing Orders</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{$processing}}</h3>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span></span>
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                </p>
                                            </div>
                                        </div>
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Section 2, 2nd row -->
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Shipping Orders</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{$shipping}}</h3>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span></span>
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                </p>
                                            </div>
                                        </div>
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2, 2nd row -->
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Delivery Orders</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{$delivered}}</h3>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span></span>
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                </p>
                                            </div>
                                        </div>
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end section 2 -->
                        <!-- Section 3, 1st position -->
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Total Customer</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{ $currentPeriodCount }}</h3>
                                            @php
                                                // Determine the text class and arrow icon
                                                $changeClass = $isIncrease ? 'text-success' : 'text-danger';
                                                $arrowIcon = $isIncrease ? 'arrow-up' : 'arrow-down';
                                            @endphp

                                            <div class="d-flex align-items-baseline">
                                                <p class="{{ $changeClass }}">
                                                    <span>{{ $isIncrease ? '+' : '' }}{{ $change }}</span>
                                                    <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                if (window.feather) {
                                                    window.feather.replace();
                                                }
                                            });
                                        </script>

                                        {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3, 2nd position -->
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Depo Information</h6>
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                               aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
{{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
{{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">{{ $depocurrentPeriodCount }}</h3>
                                            @php
                                                // Determine the text class and arrow icon
                                                $depochangeClass = $depoisIncrease ? 'text-success' : 'text-danger';
                                                $depoarrowIcon = $depoisIncrease ? 'arrow-up' : 'arrow-down';
                                            @endphp

                                            <div class="d-flex align-items-baseline">
                                                <p class="{{ $depochangeClass }}">
                                                    <span>{{ $depoisIncrease ? '+' : '' }}{{ $depochange }}</span>
                                                    <i data-feather="{{ $depoarrowIcon }}" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                if (window.feather) {
                                                    window.feather.replace();
                                                }
                                            });
                                        </script>
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else

                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Daily Income</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{ $daily }}</h3>
                                                @php
                                                    $now = \Illuminate\Support\Carbon::now();
                                                    $previousDayPrice = \Illuminate\Support\Facades\DB::table('orders')
                                                                        ->whereDate('created_at', '<', $now)
                                                                        ->where('order_status','Delivered')
                                                                        ->orderBy('created_at', 'desc')
                                                                        ->value('price');

                                                    if ($previousDayPrice != 0) {
                                                        $percentageChange = (($daily - $previousDayPrice) / $previousDayPrice) * 100;
                                                    } else {
                                                        $percentageChange = 0;
                                                    }

                                                    // Determine if it's positive or negative change
                                                    $changeClass = $percentageChange > 0 ? 'text-success' : ($percentageChange < 0 ? 'text-danger' : '');

                                                    // Arrow icon
                                                    $arrowIcon = $percentageChange > 0 ? 'arrow-up' : 'arrow-down';
                                                @endphp

                                                <div class="d-flex align-items-baseline">
                                                    <p class="{{ $changeClass }}">
                                                        <span>{{ number_format($percentageChange, 2) }}%</span>
                                                        <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="customersCharts" class="mt-md-3 mt-xl-0"
                                                     data-daily="{{ $daily }}"
                                                     data-percentage-change="{{ $percentageChange }}"></div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Monthly Income</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{ $month }}</h3>
                                                @php
                                                    // Calculate percentage change for the month
                                                    $previousMonthTotal = \Illuminate\Support\Facades\DB::table('orders')
                                                                            ->whereYear('created_at', now()->year)
                                                                            ->whereMonth('created_at', now()->subMonth()->month)
                                                                            ->where('order_status','Delivered')
                                                                            ->sum('price');

                                                    $currentMonthTotal = \Illuminate\Support\Facades\DB::table('orders')
                                                                            ->whereYear('created_at', now()->year)
                                                                            ->whereMonth('created_at', now()->month)
                                                                            ->where('order_status','Delivered')
                                                                            ->sum('price');

                                                    if ($previousMonthTotal != 0) {
                                                        $percentageChange = (($currentMonthTotal - $previousMonthTotal) / $previousMonthTotal) * 100;
                                                    } else {
                                                        $percentageChange = 0;
                                                    }

                                                    // Determine if it's positive or negative change
                                                    $changeClass = $percentageChange > 0 ? 'text-success' : ($percentageChange < 0 ? 'text-danger' : '');

                                                    // Arrow icon
                                                    $arrowIcon = $percentageChange > 0 ? 'arrow-up' : 'arrow-down';
                                                @endphp

                                                <div class="d-flex align-items-baseline">
                                                    <p class="{{ $changeClass }}">
                                                        <span>{{ number_format(abs($percentageChange), 1) }}%</span> <!-- Absolute value for display -->
                                                        <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>

                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                        --}}

                            <!-- Section 2, 1st row -->
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Processing Orders</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{$processing}}</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span></span>
                                                        {{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                    </p>
                                                </div>
                                            </div>
                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Section 2, 2nd row -->
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Shipping Orders</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{$shipping}}</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span></span>
                                                        {{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                    </p>
                                                </div>
                                            </div>
                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2, 2nd row -->
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Delivery Orders</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{$delivered}}</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span></span>
                                                        {{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
                                                    </p>
                                                </div>
                                            </div>
                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end section 2 -->
                            <!-- Section 3, 1st position -->
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Customer</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{ $currentPeriodCount }}</h3>
                                                @php
                                                    // Determine the text class and arrow icon
                                                    $changeClass = $isIncrease ? 'text-success' : 'text-danger';
                                                    $arrowIcon = $isIncrease ? 'arrow-up' : 'arrow-down';
                                                @endphp

                                                <div class="d-flex align-items-baseline">
                                                    <p class="{{ $changeClass }}">
                                                        <span>{{ $isIncrease ? '+' : '' }}{{ $change }}</span>
                                                        <i data-feather="{{ $arrowIcon }}" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    if (window.feather) {
                                                        window.feather.replace();
                                                    }
                                                });
                                            </script>

                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3, 2nd position -->
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Depo Information</h6>
                                            {{--                                        <div class="dropdown mb-2">--}}
                                            {{--                                            <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--                                               aria-expanded="false">--}}
                                            {{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">View</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"--}}
                                            {{--                                                                                                                          class="icon-sm me-2"></i> <span class="">Delete</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>--}}
                                            {{--                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i--}}
                                            {{--                                                        data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{ $depocurrentPeriodCount }}</h3>
                                                @php
                                                    // Determine the text class and arrow icon
                                                    $depochangeClass = $depoisIncrease ? 'text-success' : 'text-danger';
                                                    $depoarrowIcon = $depoisIncrease ? 'arrow-up' : 'arrow-down';
                                                @endphp

                                                <div class="d-flex align-items-baseline">
                                                    <p class="{{ $depochangeClass }}">
                                                        <span>{{ $depoisIncrease ? '+' : '' }}{{ $depochange }}</span>
                                                        <i data-feather="{{ $depoarrowIcon }}" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    if (window.feather) {
                                                        window.feather.replace();
                                                    }
                                                });
                                            </script>
                                            {{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
                                            {{--                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end section 2 -->
                        @endif
                    </div>
                </div>
            </div> <!-- row -->

            <!-- <div class="row">
              <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                      <h6 class="card-title mb-0">Revenue</h6>
                      <div class="dropdown">
                        <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                              class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                              class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                              class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                              class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                              class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-start">
                      <div class="col-md-7">
                        <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal
                          business activities, usually from the sale of goods and services to customers.</p>
                      </div>
                      <div class="col-md-5 d-flex justify-content-md-end">
                        <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-primary">Today</button>
                          <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                          <button type="button" class="btn btn-primary">Month</button>
                          <button type="button" class="btn btn-outline-primary">Year</button>
                        </div>
                      </div>
                    </div>
                    <div id="revenueChart"></div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="row">
              <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                      <h6 class="card-title mb-0">Monthly sales</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                              class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                              class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                              class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                              class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                              class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in
                      a given time period.</p>
                    <div id="monthlySalesChart"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Cloud storage</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                              class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                              class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                              class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                              class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                              class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div id="storageChart"></div>
                    <div class="row mb-3">
                      <div class="col-6 d-flex justify-content-end">
                        <div>
                          <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total
                            storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                          <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <div>
                          <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span
                              class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                          <h5 class="fw-bolder mb-0">~5TB</h5>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-primary">Upgrade storage</button>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="row">
              <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                      <h6 class="card-title mb-0">Inbox</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                              class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                              class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                              class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                              class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                              class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                        <div class="me-3">
                          <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Leonardo Payne</h6>
                            <p class="text-muted tx-12">12.30 PM</p>
                          </div>
                          <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                        <div class="me-3">
                          <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Carl Henson</h6>
                            <p class="text-muted tx-12">02.14 AM</p>
                          </div>
                          <p class="text-muted tx-13">I've finished it! See you so..</p>
                        </div>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                        <div class="me-3">
                          <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Jensen Combs</h6>
                            <p class="text-muted tx-12">08.22 PM</p>
                          </div>
                          <p class="text-muted tx-13">This template is awesome!</p>
                        </div>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                        <div class="me-3">
                          <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Amiah Burton</h6>
                            <p class="text-muted tx-12">05.49 AM</p>
                          </div>
                          <p class="text-muted tx-13">Nice to meet you</p>
                        </div>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                        <div class="me-3">
                          <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                            <p class="text-muted tx-12">01.19 AM</p>
                          </div>
                          <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xl-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                      <h6 class="card-title mb-0">Projects</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                              class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                              class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                              class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                              class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                              class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th class="pt-0">#</th>
                            <th class="pt-0">Project Name</th>
                            <th class="pt-0">Start Date</th>
                            <th class="pt-0">Due Date</th>
                            <th class="pt-0">Status</th>
                            <th class="pt-0">Assign</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>NobleUI jQuery</td>
                            <td>01/01/2022</td>
                            <td>26/04/2022</td>
                            <td><span class="badge bg-danger">Released</span></td>
                            <td>Leonardo Payne</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>NobleUI Angular</td>
                            <td>01/01/2022</td>
                            <td>26/04/2022</td>
                            <td><span class="badge bg-success">Review</span></td>
                            <td>Carl Henson</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>NobleUI ReactJs</td>
                            <td>01/05/2022</td>
                            <td>10/09/2022</td>
                            <td><span class="badge bg-info">Pending</span></td>
                            <td>Jensen Combs</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>NobleUI VueJs</td>
                            <td>01/01/2022</td>
                            <td>31/11/2022</td>
                            <td><span class="badge bg-warning">Work in Progress</span>
                            </td>
                            <td>Amiah Burton</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>NobleUI Laravel</td>
                            <td>01/01/2022</td>
                            <td>31/12/2022</td>
                            <td><span class="badge bg-danger">Coming soon</span></td>
                            <td>Yaretzi Mayo</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>NobleUI NodeJs</td>
                            <td>01/01/2022</td>
                            <td>31/12/2022</td>
                            <td><span class="badge bg-primary">Coming soon</span></td>
                            <td>Carl Henson</td>
                          </tr>
                          <tr>
                            <td class="border-bottom">3</td>
                            <td class="border-bottom">NobleUI EmberJs</td>
                            <td class="border-bottom">01/05/2022</td>
                            <td class="border-bottom">10/11/2022</td>
                            <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                            <td class="border-bottom">Jensen Combs</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer border-top">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.trodev.com"
                                                                       target="_blank">Trodev</a>.</p>
                <p class="text-muted">Developed by Trodev<i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i>
                </p>
            </div>
        </footer>
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{asset('../assets/vendors/core/core.js')}}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{asset('../assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{asset('../assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('../assets/js/template.js')}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{asset('../assets/js/dashboard-light.js')}}"></script>
<!-- End custom js for this page -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get data attributes from the chart container
        var chartContainer = document.getElementById('customersCharts');
        var daily = parseFloat(chartContainer.getAttribute('data-daily'));
        var percentageChange = parseFloat(chartContainer.getAttribute('data-percentage-change'));

        // Calculate previous day's value (for demo purposes)
        var previousDayValue = daily / (1 + (percentageChange / 100));

        // Chart.js configuration
        var ctx = chartContainer.getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Previous Day', 'Current Day'],
                datasets: [{
                    label: 'Daily Price',
                    data: [previousDayValue, daily],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Previous Day
                        'rgba(54, 162, 235, 0.2)'   // Current Day
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
</body>

</html>
