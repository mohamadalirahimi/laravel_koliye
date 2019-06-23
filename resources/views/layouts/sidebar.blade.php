<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" xmlns:background-color="http://www.w3.org/1999/xhtml">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" >


        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('patientTab')" href="#">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>بیمارها</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('categoryTab')" href="#">
                            <i class="fas fa-user-plus"></i>
                            <p>ثبت بیمار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('showTab')" href="#">
                            <i class='far fa-eye' style='font-size:24px'></i>
                            <p>نمایش بیماران</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('supportTab')" href="#">
                            <i class='far fa-plus-square' style='font-size:21px'></i>
                            <p>ثبت کمک ها</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('showsupportTab')" href="#">
                            <i class="fas fa-hands-helping" style='font-size:21px'></i>
                            <p>نمایش کمک ها</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ng-click="changeTab('lettersTab')" href="#">
                            <i class="fas fa-hands-helping" style='font-size:21px'></i>
                            <p>نامه ها</p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>