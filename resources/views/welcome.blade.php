<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    <div class="wrapper">
        @include('partials._sidebar')

        @include('partials._header')

        <div class="page-wrapper">
            <div class="page-content">
                @include('partials._success')

                @include('partials._failure')

                @yield('contents')
            </div>
        </div>

        <!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        @include('partials._footer')

        @include('partials._script')
    </div>
</body>
</html>
