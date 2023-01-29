<template >
    <div>
    <div class="main-wrapper ">
        <div class="header header-two">
           <div class="header-left">
              <a href="dashboard.html" class="logo-one">
              <img src="assets/img/logo.png" width="35" height="35" alt="">
              </a>
           </div>
           <a id="chat_toggle_btn" href="javascript:void(0);"><img src="assets/img/icon/bar-icon.svg" alt=""></a>
           <a id="mobile_btn_chat" class="mobile_btn_chat float-start" role="button" ><img src="assets/img/icon/bar-icon.svg" alt=""></a>
           <div class="chat-menus chat-top-menu">
              <ul class="nav">
                 <li>
                    <a href="dashboard.html">
                    <span class="menu-side"><img src="assets/img/icon/menu-icon-01.svg" alt=""></span>
                    <span>Dashboard</span>
                    </a>
                 </li>
                 <li>
                    <a href="blank-chat.html" class="active">
                    <span class="menu-side"><img src="assets/img/icon/menu-icon-02.svg" alt=""></span>
                    <span>Chats </span>
                    </a>
                 </li>
                 <li>
                    <a href="blank-channels.html">
                    <span class="menu-side"><img src="assets/img/icon/menu-icon-03.svg" alt=""></span>
                    <span>Groups</span>
                    </a>
                 </li>
                 <li>
                    <a href="blank-meet.html">
                    <span class="menu-side"><img src="assets/img/icon/menu-icon-04.svg" alt=""></span>
                    <span>Calls</span>
                    </a>
                 </li>
              </ul>
           </div>
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
                       <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                 <a href="#" class="dropdown-toggle nav-link bg-box" data-bs-toggle="dropdown"><img src="assets/img/icon/bell.svg" alt=""><span class="pulse"></span></a>
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
                                   <img alt="" src="assets/img/profiles/avatar-02.jpg" class="img-fluid">
                                   </span>
                                   <div class="media-body flex-grow-1">
                                      <p class="noti-details"><span class="noti-title">Patient appointment booking</span></p>
                                      <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="notification-message">
                             <a href="javascript:;">
                                <div class="media">
                                   <span class="note-users flex-shrink-0">
                                   <img alt="" src="assets/img/profiles/avatar-03.jpg" class="img-fluid">
                                   </span>
                                   <div class="media-body">
                                      <p class="noti-details"><span class="noti-title">Appointment booking with payment gateway</span></p>
                                      <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="notification-message">
                             <a href="javascript:;">
                                <div class="media">
                                   <span class="note-users flex-shrink-0">
                                   <img alt="" src="assets/img/profiles/avatar-04.jpg" class="img-fluid">
                                   </span>
                                   <div class="media-body">
                                      <p class="noti-details"><span class="noti-title">Doctor available module</span></p>
                                      <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="notification-message">
                             <a href="javascript:;">
                                <div class="media">
                                   <span class="note-users flex-shrink-0">
                                   <img alt="" src="assets/img/profiles/avatar-05.jpg" class="img-fluid">
                                   </span>
                                   <div class="media-body">
                                      <p class="noti-details"><span class="noti-title">Patient and Doctor video conferencing</span></p>
                                      <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="notification-message">
                             <a href="javascript:;">
                                <div class="media">
                                   <span class="note-users flex-shrink-0">
                                   <img alt="" src="assets/img/profiles/avatar-06.jpg" class="img-fluid">
                                   </span>
                                   <div class="media-body">
                                      <p class="noti-details"> <span class="noti-title">Private chat module</span></p>
                                      <p class="noti-time"><span class="notification-time">2 days ago</span></p>
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
                 <a href="javascript:void(0);" id="dark-mode-toggle" class="bg-box"><img src="assets/img/icon/moon.svg" alt=""> </a>
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
              <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-end">
                 <a class="dropdown-item" href="index.html">Logout</a>
              </div>
           </div>
        </div>
        <div class="sidebar" id="sidebar">
           <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 492px;">
              <div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 492px;">
                 <div id="sidebar-menu-one" class="sidebar-menu-one">
                    <ul>
                       <li class="chats-add">
                          <h4>Chats<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#add-contact"><i class="feather-plus"></i></a></h4>
                       </li>
                       <li>
                          <div class="side-nav-search">
                             <form>
                                <input type="text" class="form-control" placeholder="Search here">
                                <a class="btn"><i class="feather-search"></i></a>
                             </form>
                          </div>
                       </li>
                       <li>
                          <div class="chat-user-actives">
                             <a href="chats.html" class="d-flex align-items-center">
                                <div class="chat-call-user">
                                   <img src="assets/img/profiles/avatar-02.jpg" alt="img">
                                   <span class="active-users bg-green"></span>
                                </div>
                                <div class="chat-users-recent">
                                   <div class="recent-user-titles d-flex">
                                      <h5>Dickerson</h5>
                                   </div>
                                   <div class="recent-user-text d-flex">
                                      <p>It seems logical that the</p>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </li>
                       <li>
                          <div class="chat-user-actives">
                             <a href="chats.html" class="d-flex align-items-center">
                                <div class="chat-call-user">
                                   <img src="assets/img/profiles/avatar-04.jpg" alt="img">
                                   <span class="active-users bg-green"></span>
                                </div>
                                <div class="chat-users-recent">
                                   <div class="recent-user-titles d-flex">
                                      <h5>Forest Kroch</h5>
                                   </div>
                                   <div class="recent-user-text d-flex">
                                      <p>It seems logical that the</p>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </li>
                       <li>
                          <div class="chat-user-actives">
                             <a href="chats.html" class="d-flex align-items-center">
                                <div class="chat-call-user">
                                   <img src="assets/img/profiles/avatar-05.jpg" alt="img">
                                   <span class="active-users bg-green"></span>
                                </div>
                                <div class="chat-users-recent">
                                   <div class="recent-user-titles d-flex">
                                      <h5>Townsend Seary</h5>
                                   </div>
                                   <div class="recent-user-text d-flex">
                                      <p>It seems logical that the</p>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </li>
                       <li>
                          <div class="chat-user-actives">
                             <a href="chats.html" class="d-flex align-items-center">
                                <div class="chat-call-user">
                                   <img src="assets/img/profiles/avatar-06.jpg" alt="img">
                                   <span class="active-users bg-green"></span>
                                </div>
                                <div class="chat-users-recent">
                                   <div class="recent-user-titles d-flex">
                                      <h5>Margaretta Worvell</h5>
                                   </div>
                                   <div class="recent-user-text d-flex">
                                      <p>It seems logical that the</p>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </li>
                       <li>
                          <div class="chat-user-actives">
                             <a href="chats.html" class="d-flex align-items-center">
                                <div class="chat-call-user">
                                   <img src="assets/img/profiles/avatar-08.jpg" alt="img">
                                   <span class="active-users bg-green"></span>
                                </div>
                                <div class="chat-users-recent">
                                   <div class="recent-user-titles d-flex">
                                      <h5>Harald Kowalski</h5>
                                   </div>
                                   <div class="recent-user-text d-flex">
                                      <p>It seems logical that the</p>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
              <div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 476.504px;"></div>
              <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
           </div>
        </div>
        <div class="page-wrapper-chat">
           <div class="content">
              <div class="row">
                 <div class="col-xl-12">
                    <div class="card chat-empty card-comman">
                       <div class="card-body p-0">
                          <div class="chat-body ">
                             <div class="project-nodatas">
                                <img src="assets/img/nodata.png" alt="img" class="img-fluid">
                                <p>Select a conversation</p>
                             </div>
                          </div>
                          <div class="chat-footer">
                             <div class="row gx-2">
                                <div class="col-lg-12 col-sm-12">
                                   <div class="footer-discussion">
                                      <div class="inputgroups">
                                         <input type="text" placeholder="Type Message...">
                                         <div class="send-chat position-icon">
                                            <a href="javascript:;"><img src="assets/img/icon/send.svg" alt=""></a>
                                         </div>
                                         <div class="symple-text position-icon">
                                            <ul>
                                               <li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-01.svg" class="me-3" alt=""></a></li>
                                               <li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-02.svg" class="me-3" alt=""></a></li>
                                               <li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-03.svg" class="me-3" alt=""></a></li>
                                               <li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-04.svg" alt=""></a></li>
                                            </ul>
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
        </div>
     </div>
     <div class="modal fade dream-modal" id="add-contact">
        <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title">
                    Add Contact
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                 <span class="material-icons">close</span>
                 </button>
              </div>
              <div class="modal-body">
                 <form action="new-friends">
                    <div class="form-group">
                       <label>Name</label>
                       <input class="form-control form-control" name="new-chat-title" type="text">
                    </div>
                    <div class="form-group">
                       <label>Nickname</label>
                       <input class="form-control form-control" name="new-chat-title" type="text">
                    </div>
                    <div class="form-group">
                       <label>Phone Number</label>
                       <input class="form-control form-control" name="new-chat-title" type="text">
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input class="form-control form-control " name="new-chat-title" type="email">
                    </div>
                 </form>
                 <div class="form-row profile_form text-end float-end m-0 align-items-center">
                    <div class="newgroup_create">
                       <button type="button" class="btn btn-primary mb-0" data-bs-dismiss="modal" aria-label="Close">
                       Add to contacts
                       </button>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </div>
</template>
<script >
export default {
        mounted(){

        }
}
</script>
<style lang="">

</style>
