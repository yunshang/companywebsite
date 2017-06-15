@extends('admin.layouts.app')

{{--顶部导航--}}
@section('main-header')
    @inject('admin','App\AdminUser\User')
    <header class="main-header" id="app">
        <a href="{{url('/dashboard')}}" class="logo">
            <span class="logo-mini">ADL</span>
            <span class="logo-lg"><b>AdminLara</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="/">
                            <i class="fa fa-home"></i>
                            <span class="label label-info">H</span>
                        </a>
                    </li>

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('dist/img/avatar.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{$admin->info()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{url('dist/img/avatar.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    changhe
                                    <small>Member since Nov. 2017</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">退出登录
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
@endsection

{{--主导航栏--}}
@section('main-sidebar')
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('dist/img/avatar.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{$admin->info()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">主导航栏</li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>控制面板</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>用户管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/profile')}}"><i class="fa fa-circle-o"></i>管理员</a></li>
                        <li><a href="{{url('/admin/users')}}"><i class="fa fa-circle-o"></i>系统用户</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>用户角色</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>用户权限</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>内容管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin/articles/index')}}"><i class="fa fa-circle-o"></i>新闻</a></li>
                        <li><a href="{{url('admin/articlekind/index')}}"><i class="fa fa-circle-o"></i>新闻分类</a></li>
                        <li><a href="{{url('admin/resume/index')}}"><i class="fa fa-circle-o"></i>简历管理</a></li>
                        <li><a href="{{url('admin/positions/index')}}"><i class="fa fa-circle-o"></i>职位管理</a></li>
                        <li><a href="{{url('admin/enterprisestyles/index')}}"><i class="fa fa-circle-o"></i>企业风采管理</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
@endsection

{{--底部--}}
@section('main-footer')
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017</strong> All rights
        reserved.
    </footer>
@endsection

{{--右侧边栏--}}
@section('control-sidebar')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab">
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
@endsection
