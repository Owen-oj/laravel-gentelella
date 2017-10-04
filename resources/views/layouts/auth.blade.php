<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials._head')
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        @yield('content')
    </div>
</div>
</body>
</html>
