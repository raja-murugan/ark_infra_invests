<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.backend.components.auth.head')

</head>

<body onload="startTime()">

    {{-- @include('layout.backend.components.auth.pre_loder') --}}

    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('layout.backend.components.auth.topbar')

        <div class="page-body-wrapper">

            @include('layout.backend.components.auth.sidebar')

            <div class="page-body">
                @yield('content')
            </div>

            @include('layout.backend.components.auth.footer')

        </div>

    </div>

    @include('layout.backend.components.auth.script')

    </div>

</body>

</html>
