@include('layout.head')
<div id="wrapper">
    @include('layout.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">  
            <div class="container-fluid">
                <!-- Hiển thị nội dung của từng trang con-->
                @yield('content')
            </div>
        </div>

    @include('layout.footer')
    </div>
     
    @include('layout.js')