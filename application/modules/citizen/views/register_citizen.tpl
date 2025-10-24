<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <base href="<%$base_url%>" />
      <title><%$config['company_name']%></title>
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="<%base_url()%><%$config['company_fav_icon']%>" />
      <!-- Fonts -->
      <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="pragma" content="no-cache" />
      <link rel="stylesheet" href="<%$base_url%>public/css/gilroy-fonts.css" />
      <link rel="stylesheet" href="<%$base_url%>public/css/tabler_css/tabler_icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="<%$base_url%>public/css/login/login_page.css">
      <!-- toaster -->
       <link rel="stylesheet" href="public/css/toaster/custom_toaster.css" />
        <link rel="stylesheet" href="public/css/fontawesome/font_awesome.css">
     <!-- toaster -->
   </head>
   <style>
 .small-12.medium-2.large-2.columns {
    height: 122px;
    margin: auto;
    text-align: center;
    width: 139px;
    position: relative;
}

.profile-pic {
   width: 200px;
   /* max-height: 200px; */
   display: inline-block;
   object-fit: contain;
   height: 100%;
}


.circle {
    border-radius: 100% !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 2px solid rgb(142 142 142 / 20%);
    position: absolute;
    top: -17px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  position: absolute;
  top: 84px;
  right: 9px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
  cursor: pointer;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
   </style>
   <body data-new-gr-c-s-check-loaded="14.1208.0" data-gr-ext-installed="">
     
      <div class="login-main-page custom-login-bg outer-div-box">
         <div class="errorbox-position" id="var_msg_cnt" style="display: none;">
            <div class="closebtn-errorbox" id="closebtn_errorbox">
               <a href="javascript://" onclick="Project.closeMessage();"><button class="close" type="button">×</button></a>
            </div>
            <div class="content-errorbox alert" id="err_msg_cnt"></div>
         </div>
         <div class="content-login" id="content_login">
            <div class="login_page">
               <style>
                  .top-bg {
                  display: none !important;
                  }
               </style>
               <div class="login_lt_panel">
                  <div class="d-flex h-100">
                     <div class="row justify-content-center align-self-center m-0 w-100 " style="margin-top: 30px !important;">
                        <div class="loginContainer login-form">
                           <div class="loginbox-border">
                              <div>
                                 <div id="login_div" >
                                    <div class="logo_login">
                                       <a href="<%$base_url%>" class="brand">
                                       <img
                                          alt="<%$config['company_name']%>"
                                          class="admin-logo-top"
                                          src="<%base_url()%><%$config['company_logo']%>"
                                          title="<%$config['company_name']%>"
                                          />
                                       </a>
                                    </div>
                                    <div class="login-headbg">
                                       <h2>Sign in to <%$config['company_name']%></h2>
                                    </div>
                                    <form
                                       id="formAuthentication" class="mb-3" action="javascript:void(0)" method="POST"
                                       >
                                       <div class="row">
                                          <div class="small-12 medium-2 large-2 columns">
                                             <div class="circle">
                                                <img class="profile-pic" src="public/img/user.jpg">

                                             </div>
                                             <div class="p-image">
                                                <i class="fa fa-camera upload-button"></i>
                                                <input class="file-upload" style="width: 0px;height: 0px;opacity:0;padding:1px;" type="file" accept="image/*" name="user_img" id="user_img"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clear"></div>
                                       <div class="error-msg login-error-msg" id="user_imgErr" style="text-align: center;
    margin-top: 9px;"></div>
                                       <label for="login_name">Name </label>
                                       <div width="28%" class="bmatter relative">
                                          <i class="ti ti-user"></i>
                                          <input
                                             type="text"
                                             title="Name"
                                             name="name"
                                             id="name"
                                             class="text login-user"
                                             value=""
                                             placeholder="Username"
                                             />
                                       </div>
                                       <div class="clear"></div>
                                       <div class="error-msg login-error-msg" id="nameErr"></div>
                                       <label for="login_name">Email </label>
                                       <div width="28%" class="bmatter relative">
                                          <i class="ti ti-mail"></i>
                                          <input
                                             type="text"
                                             title="Username"
                                             name="email"
                                             id="login_name"
                                             class="text login-user"
                                             value=""
                                             placeholder="Username"
                                             />
                                       </div>
                                       <div class="clear"></div>
                                       <div class="error-msg login-error-msg" id="login_nameErr"></div>
                                       <label for="passwd">Password </label>
                                       <div class="bmatter relative">
                                          <a id="pwd_show_hide" class="login-pwd-icon" href="javascript://"><i class="ti ti-lock" data-status="show"></i></a>
                                          <input
                                             type="password"
                                             title="Password"
                                             name="password"
                                         x    id="password"
                                             size="25"
                                             value=""
                                             placeholder="Password"
                                             />
                                       </div>
                                       <div class="clear"></div>
                                       <div class="error-msg login-error-msg" id="passwordErr"></div>
                                       <div class="normal-login-type">
                                          <button type="submit" class="btn btn-info login-btn" id="loginBtn" >Sign In<span class="icon16 icomoon-icon-enter white right"></span></button>
                                       </div>
                                       <div class="login-actions " >
                                          
                                          <div class="show-forgot-pwd right">
                                             <a href="javascript://" >Back To Login</a>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div id="forgot_div" class="forgot-pwd" style="display: none">
                                    <div class="logo_login">
                                        <a href="<%$base_url%>" class="brand">
                                            <img alt="<%$config['company_name']%>" class="admin-logo-top" src="<%base_url()%><%$config['company_logo']%>" title="<%$config['company_name']%>">
                                        </a>
                                    </div>
                                    <div class="login-headbg">
                                        <span class="m-auto d-block text-center pb-3">
                                             <img width="160" alt="<%$config['company_name']%>" class="admin-logo-top" src="<%base_url()%>public/img/check.png" title="<%$config['company_name']%>">
                                        </span>
                                        <h2 class="text-center">Registration Successful!
                                            <span class="text-center p-0" style="font-size: 17px;">Thank you for signing up. Your account is awaiting approval — we’ll notify you by email once it’s approved.</span>
                                        </h2>
                                    </div>
                                    <div width="28%" class="relative">
                                        <div class="forgot-backlink">
                                            Back to <span><a href="javascript://" id="back_to_login"> Sign In</a></span>
                                                                                    </div>
                                    </div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="login_rt_panel">
                  <div class="lt_panel_img"><img src="<%$base_url%>public/assets/images/login_page_img2.png" /></div>
               </div>
            </div>
         </div>
      </div>
      <div class="login-bottom-page">
         <div>
            <div class="copyright" id="bot_copyright">
               <i class="las la-plus bottom-icons hide-icons" id="additional_btn"></i>
               Copyright 2024 © Audit System. All Rights Reserved
            </div>
         </div>
      </div>
   </body>
   <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<%$base_url%>public/js/admin/plugin/jquery.min.js"></script>
  <script src="<%$base_url%>public/assets/vendor/libs/popper/popper.js"></script>
  <script src="<%$base_url%>public/assets/vendor/js/bootstrap.js"></script>
  <script src="<%$base_url%>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
<link rel="stylesheet" href="<%$base_url%>public/plugin/select2/select2.min.css">
  <script  src="<%$base_url%>public/plugin/select2/select2.min.js"></script>
  <link rel="stylesheet" href="<%$base_url%>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
  var base_url = <%$base_url|@json_encode%>;
</script>
 <script src="public/js/toaster/custom_toaster.js"></script>
<script src="<%$base_url%>public/js/citizen/citizen_registration.js"></script>
</html>