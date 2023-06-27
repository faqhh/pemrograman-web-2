@include('admin.layout.top')
@include('admin.layout.menu')

<div id="layoutSidenav_content">
<main>
    <div class="contrailer_fluid px_4">
    <!--  -->
    @yield('content')
    <!--  -->
</div>
</main>
</div>
</div>

@include('admin.layout.bottom')