@extends('template.app')

@section('title',$title)

@section('navbar')
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                {{ $title }}
            </a>
            <div class="navbar-burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                @if ($control['club'] === true)

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="{{ url('/club/list') }}">
                            社团
                        </a>
                        <div class="navbar-dropdown ">
                            <a class="navbar-item " href="{{ url('/club/list') }}">
                                社团列表
                            </a>
                        </div>
                    </div>

                @endif
                @if ($control['activity'] === true)
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="/Club">
                            活动
                        </a>
                        <div class="navbar-dropdown ">
                            <a class="navbar-item " href="/Club">
                                活动列表
                            </a>
                        </div>
                    </div>
                @endif
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
@endsection

