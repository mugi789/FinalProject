<div class="header_section">
    <div class="container">
       <div class="containt_main">
          <div id="mySidenav" class="sidenav">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <a href="index.html">Home</a>
             <a href="fashion.html">Fashion</a>
             <a href="electronic.html">Electronic</a>
             <a href="jewellery.html">Jewellery</a>
          </div>
          <span class="toggle_icon" onclick="openNav()"><img src="{{asset('asset/images/toggle-icon.png')}}"></span>
          <div class="dropdown">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
             </div>
          </div>
          <div class="main">
             <!-- Another variation with a button -->
             <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this blog">
                <div class="input-group-append">
                   <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                   <i class="fa fa-search"></i>
                   </button>
                </div>
             </div>
          </div>
          <div class="header_box">
             <div class="lang_box ">
                <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                <img src="{{asset('asset/images/flag-uk.png')}}" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu ">
                   <a href="#" class="dropdown-item">
                   <img src="{{asset('asset/images/flag-indo.png')}}" class="mr-2" alt="flag">
                   Indo
                   </a>
                </div>
             </div>
             <div class="login_menu">
                <ul>
                   <li><a href="#">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <span class="padding_10">Cart</span></a>
                   </li>
                   <li><a href="#">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span class="padding_10">Login</span></a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>