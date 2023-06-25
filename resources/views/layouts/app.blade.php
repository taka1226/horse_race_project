<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=1366">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="Shortcut Icon" href="{{ asset('favicon.ico') }}" type="img/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <!-- 各ページCSS -->
  @stack('css')
  <!-- /各ページCSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  @hasSection('title')
      <title>@yield('title')|競馬データベース</title>
  @else
      <title>競馬データベース</title>
  @endif
  <script>
    (function (d) {
        var config = {
                kitId: "jfj2dsj",
                scriptTimeout: 3000,
                async: true,
            },
            h = d.documentElement,
            t = setTimeout(function () {
                h.className =
                    h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
            a = this.readyState;
            if (f || (a && a != "complete" && a != "loaded")) return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config);
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
    })(document);
  </script>
</head>
<body>
    @include('components.aside')
    @include('components.header')
    <main class="main @yield('main_class')">
        @yield('content')
    </main>
     @yield('modal')

  <script src="{{ asset('js/main.js') }}"></script>
  @stack('js')
</body>

</html>
