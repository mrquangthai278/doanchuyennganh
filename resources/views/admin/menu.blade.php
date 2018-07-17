<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php 
        $url =\Request::segments();
        if(isset($url[1])){
            $high = $url[1];
        }else{
            $high = "";
        }
        ?>
        <ul class="sidebar-menu" data-widget="tree">
            @php
            $array_menu = [];


            $argv_1['header'] = 'Quản lý Sản phẩm';
            $argv_1['menu'] = [
            [
            'name' => 'Sản phẩm',
            'route' => 'frontend.home',
            'high' => 'nhan-khau',
            ],
            [
            'name' => 'Loại Sản phẩm',
            'route' => 'frontend.home',
            'high' => 'ho-khau',
            ],
            [
            'name' => 'Thương hiệu Sản phẩm',
            'route' => 'frontend.home',
            'high' => 'ho-khau',
            ],
            ];
            $array_menu[]= $argv_1;

            $argv_2['header'] = 'Quản lý Đơn hàng';
            $argv_2['menu'] = [
            [
            'name' => 'Đơn hàng ',
            'high' => 'danh-sach-dan-cu',
            'route' => 'frontend.home',
            ]
            ];
            $array_menu[]= $argv_2;

            $argv_3['header'] = 'Quản lý Người dùng';
            $argv_3['menu'] = [
            [
            'name' => 'Người dùng',
            'high' => 'to-dan-pho',
            'route' => 'frontend.home',
            ],
            [
            'name' => 'Bình luận',
            'high' => 'khu-pho',
            'route' => 'frontend.home',
            ],
            [
            'name' => 'Đánh giá',
            'high' => 'phuong',
            'route' => 'frontend.home',
            ],
            [
            'name' => 'Góp ý',
            'high' => 'quan',
            'route' => 'frontend.home',
            ],
            ];
            $array_menu[]= $argv_3;

            $argv_4['header'] = 'Quản lý Nhân viên';
            $argv_4['menu'] = [
            [
            'name' => 'Nhân viên',
            'high' => '',
            'route' => 'frontend.home',
            ],
            [
            'name' => 'Loại Nhân viên',
            'high' => '',
            'route' => 'frontend.home',
            ],
            ];
            $array_menu[]= $argv_4;

            $argv_5['header'] = 'Quản lý Chương trình  Khuyến mãi';
            $argv_5['menu'] = [
            [
            'name' => 'Khuyến mãi',
            'high' => '',
            'route' => 'frontend.home',
            ],
            ];
            $array_menu[]= $argv_5;  

            @endphp

            @php

            @endphp
            @foreach($array_menu as $item)
            <li class="header">{{ $item['header'] }}</li>
            @foreach($item['menu'] as $menu)
            <li class="">
                <a href="{{ $menu['route'] != '' ? route($menu['route']) : '#' }}">
                    <i class="fa fa-dashboard"></i> <span>{{ $menu['name'] }}</span>
                </a>
            </li>
            @endforeach

            @endforeach

            @endphp
    </ul>
</section>
<!-- /.sidebar -->
</aside>
