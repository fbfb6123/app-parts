<!doctype html>
<html class="no-js" lang="ja">

<head>
    {{--style script用
    @include('components.parts.common')--}}
</head>

<body>

<div id='outer-frame'>
    <header>
        @include('components.header')
    </header>

    <article>
        <div class="inner-frame">
            <main>
                @yield('content')
            </main>
        </div>
    </article>

    <footer>
        <div class="inner-frame">
            @include('components.footer')
        </div>
    </footer>
</div>

</body>

</html>
