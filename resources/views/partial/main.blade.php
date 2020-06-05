<!DOCTYPE html>
<html class="no-js" lang="en">

@include('partial.headtag')

<body>
    @include('partial.navbar')

    @yield('content')

    @include('partial.contact')

    @include('partial.backtotop')

    @include('partial.scripts')

</body>
</html>
