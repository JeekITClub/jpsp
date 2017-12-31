<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>建平中学学生平台</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
</head>
<body>
<div>
    <div class="container">
        <nav class="navbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="">
                    建平中学学生平台
                </a>
                <div class="navbar-burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="/Club">
                            社团
                        </a>
                        <div class="navbar-dropdown ">
                            <a class="navbar-item " href="/Club">
                                社团列表
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="/User/Dashboard">
                            欢迎你
                        </a>
                        <div class="navbar-dropdown" data-style="width: 18rem;">
                            <a href="/User/Dashboard" class="navbar-item ">个人中心</a>
                            <a class="navbar-item ">注销</a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="/Login">
                            登录
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/Login">
                                学生登录
                            </a>
                            <!--TODO: Link to admin_club & admin_cd-->
                            <a class="navbar-item " href="http://119.23.49.42/admin_club/">
                                社长登录
                            </a>
                            <a class="navbar-item " href="http://119.23.49.42/admin_cd/">
                                社团部登录
                            </a>
                        </div>
                    </div>
                    <a class="navbar-item" href="/About">
                        关于
                    </a>
                </div>
            </div>
        </nav>
    </div>
        @yield('content')
    </div>
</div>
</body>
</html>
