<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar" style="background-color:rgb(191, 196, 214)">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">john</h1>
                <p>full-stack dev</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="home"> <i class="icon-home"></i>Home </a></li>

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>events </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_event')}}">add event</a></li>
                    <li><a href="{{url('view_event')}}">view event</a></li>

                </ul>
            </li>
            <li ><a href="{{url('bookings')}}"> <i class="icon-home"></i>booking </a></li>

            <li ><a href="{{url('gallery')}}"> <i class="icon-home"></i>gallery </a></li>
        </ul>
    </nav>
