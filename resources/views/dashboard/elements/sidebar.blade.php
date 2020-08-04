<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('dashboard/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('dashboard/images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.blade.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i> Admins </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('admins.create')}}"> Add Admin </a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('admins.index')}}"> Admin List </a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i> Carts </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('carts.create')}}"> Add to cart </a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('carts.index')}}"> Carts List </a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

