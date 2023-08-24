<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>@yield('titlePage')</title>

    @include('includes.admin.style')

</head>

<body>
    <div class="page-wrapper">
        @include('includes.admin.navbar')

        @include('includes.admin.sidebar')

        @yield('content')

        @include('includes.admin.footer')
    </div>
    @include('includes.admin.script')
</body>

</html>