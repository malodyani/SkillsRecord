	<nav class="">
  <div class="container-fluid">

  </div>

            <ul class="nav navbar-top-links navbar-right text-slider">
               
              
            
                <li class="dropdown" style="margin-right:170px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile"><i class="fa fa-user fa-fw"></i>الملف الشخصي</a>
                        </li>
                      
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i>تسجيل الخروج</a>
                        </li>
                    </ul>
                  
                </li>
              
            </ul>
        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <!--Start for student-->
                         @if(Auth::user()->role == App\Misc\Roles::$Student)
                        <li>
                            <a  href="/Home"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
                        </li>
                        <li>
                            <a href="AddCourse"><i class="fa fa-laptop" aria-hidden="true"></i> اضافة دورات </a>
                        </li>
                        <li>
                            <a href="AddAward"><i class="fa fa-trophy" aria-hidden="true"></i> اضافة جوائز</a>
                        </li>
                        <li>
                            <a href="AddActivity"><i class="fa fa-flag-checkered" aria-hidden="true"></i> اضافة انشطة</a>
                        </li>
                         <!--end for student-->
                         @endif
                         


                        <!--start for admin-->
                       @if(Auth::user()->role == App\Misc\Roles::$Admin)
                       
                        <li>
                            <a  href="content"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
                        </li>
                        <li>
                            <a href="employees"><i class="fa fa-users" aria-hidden="true"></i> الموظفين</a>
                        </li>
                       
                        <li>
                            <a href="college"><i class="fa fa-list-alt" aria-hidden="true"></i> الكليات</a>
                        </li>
                        <li>
                            <a href="major"><i class="fa fa-indent" aria-hidden="true"></i> التخصصات</a>
                        </li>
                        <li>
                            <a href="school"><i class="fa fa-list-ol" aria-hidden="true"></i> مصادر الدورات و الانشطة</a>
                        </li>
                        <li>
                            <a href="edit-home"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> تعديل صفحة التعريف وشروط السجل المهاري</a>
                        </li>
                      
                     @endif
                     
                        @if(Auth::user()->role == App\Misc\Roles::$Employee || Auth::user()->role == App\Misc\Roles::$Admin)
                        <!--Start for employees-->
                        <li>
                            <a  href="/search"><i class="fa fa-search" aria-hidden="true"></i> بحث عن طالب</a>
                        </li>
                        
                      
						@endif
                        <!--end for employees-->
                        <!--end for admin-->
                          </li>
                    </ul>
                </div>
              
            </div>
          
        </nav>
        <div id="page-wrapper" style=" background-image: url('http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/bg_body.png')" >
