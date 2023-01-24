<template >
    <div class="main-wrapper">
        <div class="header header-one">
            <div class="header-left">
                <a href="dashboard.html" class="logo-one">
                    <img src="assets/img/logo.png" width="35" height="35" alt="">
                </a>
            </div>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="assets/img/icon/bar-icon.svg"
                    alt=""></a>
            <div class="top-nav-search mob-view">
                <form>
                    <input type="text" class="form-control" placeholder="Find people, spaces, and messages">
                    <a class="btn"><i class="feather-search"></i></a>
                </form>
            </div>
            <ul class="nav user-menu-head float-end">
                <li class="nav-item dropdown d-none d-sm-block">
                    <div class="book-view">
                        <div class="book-dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-circle me-2 green-status"></i> Active
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <i class="fas fa-circle me-2 green-status"></i> Active
                                </a>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <i class="fas fa-circle me-2 red-status"></i> In Active
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link bg-box" data-bs-toggle="dropdown"><img
                            src="assets/img/icon/bell.svg" alt=""><span class="pulse"></span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="javascript:;">
                                        <div class="media">
                                            <span class="note-users flex-shrink-0">
                                                <img alt="" src="assets/img/profiles/avatar-02.jpg"
                                                    class="img-fluid">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Patient appointment
                                                        booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:;">
                                        <div class="media">
                                            <span class="note-users flex-shrink-0">
                                                <img alt="" src="assets/img/profiles/avatar-03.jpg"
                                                    class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:;">
                                        <div class="media">
                                            <span class="note-users flex-shrink-0">
                                                <img alt="" src="assets/img/profiles/avatar-04.jpg"
                                                    class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Doctor available
                                                        module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:;">
                                        <div class="media">
                                            <span class="note-users flex-shrink-0">
                                                <img alt="" src="assets/img/profiles/avatar-05.jpg"
                                                    class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Patient and Doctor
                                                        video conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:;">
                                        <div class="media">
                                            <span class="note-users flex-shrink-0">
                                                <img alt="" src="assets/img/profiles/avatar-06.jpg"
                                                    class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"> <span class="noti-title">Private chat
                                                        module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a href="javascript:void(0);" id="dark-mode-toggle" class="bg-box"><img
                            src="assets/img/icon/moon.svg" alt=""> </a>
                </li>
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="Admin">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.html">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="index.html">Logout</a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <div class="menus-col">
                <div class="chat-menus">
                    <ul>
                        <li>
                            <a href="dashboard.html" class="active">
                                <span class="menu-side"><img src="assets/img/icon/menu-icon-01.svg"
                                        alt=""></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank-chat.html">
                                <span class="menu-side"><img src="assets/img/icon/menu-icon-02.svg"
                                        alt=""></span>
                                <span>Chats </span>
                            </a>
                        </li>
                        <li>
                            <a href="blank-channels.html">
                                <span class="menu-side"><img src="assets/img/icon/menu-icon-03.svg"
                                        alt=""></span>
                                <span>Groups</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank-meet.html">
                                <span class="menu-side"><img src="assets/img/icon/menu-icon-04.svg"
                                        alt=""></span>
                                <span>Calls</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-menus">
                    <ul>
                        <li>
                            <a href="javascript:;" class="bottom-mode-menu">
                                <span class="menu-side"><img src="assets/img/icon/help-circle.svg"
                                        alt=""></span>
                                <span>Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="bottom-mode-menu log-outs">
                                <span class="menu-side"><img src="assets/img/icon/log-out.svg" alt=""></span>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper-dash">
            <div class="content">
                <div class="dash-group">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-animate">
                                        <div class="dash-profile-blk">
                                            <div class="dash-profile-img">
                                                <a href="javascript:;"><img src="assets/img/profiles/avatar-01.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="dash-profile-content">
                                                <h5>Hello</h5>
                                                <h4><a href="javascript:;">Robert Martin</a></h4>
                                                <p>Check these stats below in case you missed something</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="card card-animate">
                                        <div class="dash-contact-blk">
                                            <div class="dash-contact-img">
                                                <a href="blank-chat.html"><img src="assets/img/icon/call-icon-01.svg"
                                                        alt=""></a>
                                            </div>
                                            <h4><a href="blank-chat.html">Add New Contact</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="card card-animate">
                                        <div class="dash-contact-blk">
                                            <div class="dash-contact-img">
                                                <a href="join-call.html"><img src="assets/img/icon/call-icon-02.svg"
                                                        alt=""></a>
                                            </div>
                                            <h4><a href="blank-channels.html">Add New Channel</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="card card-animate">
                                        <div class="dash-contact-blk">
                                            <div class="dash-contact-img">
                                                <a href="join-call.html"><img src="assets/img/icon/call-icon-03.svg"
                                                        alt=""></a>
                                            </div>
                                            <h4><a href="join-call.html">New Meeting</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="card card-animate">
                                        <div class="dash-contact-blk">
                                            <div class="dash-contact-img">
                                                <a href="join-call.html"><img src="assets/img/icon/call-icon-04.svg"
                                                        alt=""></a>
                                            </div>
                                            <h4><a href="join-call.html">Join a Meeting</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card recent-contact-blk">
                                        <div class="previous-chat-head">
                                            <h5>Recently Added Contacts</h5>
                                            <p>Your Previous Chats</p>
                                        </div>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-02.jpg" alt="img">
                                                <span class="active-users bg-green"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>William Stephin</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-03.jpg" alt="img">
                                                <span class="active-users bg-green"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Forest Kroch</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-04.jpg" alt="img">
                                                <span class="active-users bg-gray"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Regina Dickerson</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt="img">
                                                <span class="active-users bg-warning"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Alexandr Donnelly</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-06.jpg" alt="img">
                                                <span class="active-users bg-green"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Harald Kowalski</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-07.jpg" alt="img">
                                                <span class="active-users bg-gray"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Bernardo James</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chats.html" class="chat-user-group d-flex align-items-center mb-0">
                                            <div class="chat-call-user">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt="img">
                                                <span class="active-users bg-warning"></span>
                                            </div>
                                            <div class="chat-users-recent">
                                                <div class="recent-user-titles d-flex">
                                                    <h5>Alexandr Donnelly</h5>
                                                    <div class="chat-user-time">
                                                        <span class="chats-dot" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <span class="dropdown-item dream_profile_menu">Archive
                                                                <span><i class="fas fa-archive"></i></span></span>
                                                            <span class="dropdown-item">Muted <span
                                                                    class="material-icons">volume_off</span></span>
                                                            <span class="dropdown-item">Delete <span><i
                                                                        class="far fa-trash-alt"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-user-text d-flex">
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="welcome-blk">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-8 col-md-7">
                                                <div class="welcome-user">
                                                    <h2>Your Channel peoples are online</h2>
                                                    <p>Shedule your call, conference meeting or start a new chats with
                                                        welcome message.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-4 col-md-5 position-blk">
                                                <div class="welcome-img">
                                                    <img src="assets/img/wel-img.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 d-flex">
                                    <div class="card recent-contact-blk">
                                        <div class="previous-chat-head">
                                            <h5>Upcoming Meetings</h5>
                                            <p>Your Previous Chats</p>
                                        </div>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Effective Forms Advertising... </h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>1:00 PM - 2:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Get Best Advertising idea...</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>2:00 PM - 3:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Morning Status Call</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>8:00 AM - 9:00 AM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Evening EOD Call</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>5:00 PM - 6:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>New Project Discussion</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>1:00 PM - 2:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Effective Forms Advertising...</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>3:00 PM - 4:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="join-call.html" class="chat-user-group d-flex align-items-center">
                                            <div class="meet-call-user">
                                                <img src="assets/img/icon/calendar.svg" alt="img">
                                            </div>
                                            <div class="meet-users-recent">
                                                <div class="recent-user-titles">
                                                    <h5>Get Best Advertising idea...</h5>
                                                    <p>Lorem ipsum dolor sit amet...</p>
                                                    <p>1:00 PM - 2:00 PM</p>
                                                </div>
                                                <div class="chat-user-time">
                                                    <span class="chats-dot" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <span class="dropdown-item dream_profile_menu">Archive <span><i
                                                                    class="fas fa-archive"></i></span></span>
                                                        <span class="dropdown-item">Muted <span
                                                                class="material-icons">volume_off</span></span>
                                                        <span class="dropdown-item">Delete <span><i
                                                                    class="far fa-trash-alt"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="schedule-btn text-center">
                                            <a href="join-call.html" class="btn btn-primary">View Schedule</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card recent-contact-blk">
                                                <div class="previous-chat-head">
                                                    <h5>Today’s Meetings</h5>
                                                    <p>Your Previous Chats</p>
                                                </div>
                                                <a href="join-call.html"
                                                    class="chat-user-group d-flex align-items-center">
                                                    <div class="meet-call-user">
                                                        <img src="assets/img/icon/calendar.svg" alt="img">
                                                    </div>
                                                    <div class="meet-users-recent">
                                                        <div class="recent-user-titles">
                                                            <h5>Morning Status Call</h5>
                                                            <p>Lorem ipsum dolor sit amet...</p>
                                                            <p>1:00 PM - 2:00 PM</p>
                                                        </div>
                                                        <div class="chat-user-time">
                                                            <span class="chats-dot" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                style="">
                                                                <span class="dropdown-item dream_profile_menu">Archive
                                                                    <span><i class="fas fa-archive"></i></span></span>
                                                                <span class="dropdown-item">Muted <span
                                                                        class="material-icons">volume_off</span></span>
                                                                <span class="dropdown-item">Delete <span><i
                                                                            class="far fa-trash-alt"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="join-call.html"
                                                    class="chat-user-group d-flex align-items-center">
                                                    <div class="meet-call-user">
                                                        <img src="assets/img/icon/calendar.svg" alt="img">
                                                    </div>
                                                    <div class="meet-users-recent">
                                                        <div class="recent-user-titles">
                                                            <h5>Evening EOD Call</h5>
                                                            <p>Lorem ipsum dolor sit amet...</p>
                                                            <p>2:00 PM - 3:00 PM</p>
                                                        </div>
                                                        <div class="chat-user-time">
                                                            <span class="chats-dot" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                style="">
                                                                <span class="dropdown-item dream_profile_menu">Archive
                                                                    <span><i class="fas fa-archive"></i></span></span>
                                                                <span class="dropdown-item">Muted <span
                                                                        class="material-icons">volume_off</span></span>
                                                                <span class="dropdown-item">Delete <span><i
                                                                            class="far fa-trash-alt"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="join-call.html"
                                                    class="chat-user-group d-flex align-items-center">
                                                    <div class="meet-call-user">
                                                        <img src="assets/img/icon/calendar.svg" alt="img">
                                                    </div>
                                                    <div class="meet-users-recent">
                                                        <div class="recent-user-titles">
                                                            <h5>New Project Discussion</h5>
                                                            <p>Lorem ipsum dolor sit amet...</p>
                                                            <p>8:00 AM - 9:00 AM</p>
                                                        </div>
                                                        <div class="chat-user-time">
                                                            <span class="chats-dot" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                style="">
                                                                <span class="dropdown-item dream_profile_menu">Archive
                                                                    <span><i class="fas fa-archive"></i></span></span>
                                                                <span class="dropdown-item">Muted <span
                                                                        class="material-icons">volume_off</span></span>
                                                                <span class="dropdown-item">Delete <span><i
                                                                            class="far fa-trash-alt"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card recent-contact-blk">
                                                <div class="previous-chat-head">
                                                    <h5>Top Users</h5>
                                                    <p>Week to week performance</p>
                                                </div>
                                                <div id="performance-user"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12">
                                    <div class="card-channel-box ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
export default {

}
</script>
<style lang="">

</style>
