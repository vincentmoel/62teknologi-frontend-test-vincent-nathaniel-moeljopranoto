<div class="sidebar-wrapper sidebar-theme">
            
    <nav id="sidebar">

        

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> CORK </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>

        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="/src/assets/img/profile-30.png" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">{{ Session::get('user.name') }}</h6> 
                    <p class="">{{ Session::get('roles') }}</p>
                </div>
            </div>
        </div>

        <ul class="list-unstyled menu-categories ps ps--active-y" id="accordionExample">
                    
            <li class="menu {{ Request::segment(1) == '' || Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                <a href="/dashboard" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::segment(1) == 'hospitals' ? 'active' : ''}}">
                <a href="/hospitals" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke="currentColor" ><g id="Layer_3" data-name="Layer 3"><path d="M50.35,5.73H42.92V4a1,1,0,0,0-1-1H22.08a1,1,0,0,0-1,1V5.73H13.65a3.49,3.49,0,0,0-3.54,3.43V57.57A3.49,3.49,0,0,0,13.65,61h36.7a3.49,3.49,0,0,0,3.54-3.43V9.16A3.49,3.49,0,0,0,50.35,5.73ZM23.08,5H40.92V8.45H23.08ZM51.89,57.57A1.49,1.49,0,0,1,50.35,59H13.65a1.49,1.49,0,0,1-1.54-1.43V9.16a1.49,1.49,0,0,1,1.54-1.43h7.43V9.45a1,1,0,0,0,1,1H41.92a1,1,0,0,0,1-1V7.73h7.43a1.49,1.49,0,0,1,1.54,1.43Z"/><path d="M27.82,21.73H31v3.18a1,1,0,0,0,2,0V21.73h3.18a1,1,0,0,0,0-2H33V16.54a1,1,0,0,0-2,0v3.19H27.82A1,1,0,0,0,27.82,21.73Z"/><path d="M16.86,33H32a1,1,0,0,0,0-2H16.86A1,1,0,0,0,16.86,33Z"/><path d="M47.14,37.35H16.86a1,1,0,0,0,0,2H47.14A1,1,0,0,0,47.14,37.35Z"/><path d="M47.14,43.7H16.86a1,1,0,0,0,0,2H47.14A1,1,0,0,0,47.14,43.7Z"/><path d="M47.14,50.06H16.86a1,1,0,0,0,0,2H47.14A1,1,0,0,0,47.14,50.06Z"/></g></svg>
                        <span>Hospitals</span>
                    </div>
                </a>
            </li>

            
            <li class="menu {{ Request::segment(1) == 'patients' ? 'active' : ''}}">
                <a href="/patients" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>Patients</span>
                    </div>
                </a>
            </li>
            
            <li class="menu {{ Request::segment(1) == 'doctors' ? 'active' : ''}}">
                <a href="/doctors" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Doctors</span>
                    </div>
                </a>
            </li>

            
            <li class="menu {{ Request::segment(1) == 'appointments' ? 'active' : ''}}">
                <a href="/appointments" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Appointments</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Request::segment(1) == 'attendances' ? 'active' : ''}}">
                <a href="/attendances" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>Attendances</span>
                    </div>
                </a>
            </li>

            
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Treatments</span></div>
            </li>


            <li class="menu {{ Request::segment(1) == 'treatments' ? 'active' : ''}}">
                <a href="/treatments" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        <span>Treatment List</span>
                    </div>
                </a>
            </li>

            
            
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 226px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div></div></ul>
        
    </nav>

</div>