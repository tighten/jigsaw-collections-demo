<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css?v1.1">
    </head>
    <body class="border-t-3 border-primary full-height">

        <nav class="navbar navbar-brand">
            <div class="container">
                <div class="navbar-content">
                    <div>
                        <a class="link-plain text-xl flex-y-center" href="/">
                            <img class="logo" src="/images/jigsaw-logo-440.png" width="220"><span class="text-xxl text-light wt-xlight">/&nbsp;</span>Collections Demo
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container m-xs-b-6">
            <div class="row">

                <div class="col-xs-4">
                    @include('_layouts.sidebar.sections')

                    @if($page->path == 'posts')
                        @include('_layouts.sidebar.post-menu')
                    @endif

                    @include('_layouts.sidebar.meta')
                    @yield('sidebar')
                </div>

                <div class="col-xs-8 demo-page">
                    @yield('body')
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
