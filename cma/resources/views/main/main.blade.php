<!doctype html>
<html lang="en">
        @include('layout.head')
<body>
    <div class="wrapper d-flex align-items-stretch">
        @include('layout.sidebarMenu')
        <!-- Page Content  -->
        @include('main.mainContent')
    </div>
        @include('main.mainScript')
</body>
</html>