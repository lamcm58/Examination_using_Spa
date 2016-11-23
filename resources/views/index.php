<!DOCTYPE html>
<html ng-app="myApp">

<script type="text/javascript" src="<?php echo asset('public/app/lib/angular.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/app/lib/angular-route.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/app/app.js'); ?>"></script>

<head>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/css/icon.css'); ?>">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo asset('public/css/materialize.min.css'); ?>"
          media="screen,projection"/>
    <title> Hocmai.vn</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>

<body class="red lighten-5">
<header>
    <!-- Nav bar -->
    <!--    <div ng-include src="'resources/views/view/nav_bar.html'"></div>-->
    <nav>
        <div class="nav-wrapper indigo ">
            <a href="#" data-activates="slide-out" class="button-collapse-1 left "><i
                    class="material-icons">view_day</i></a>
            <a href="#" class="brand-logo center"><img class="responsive-img" src="public/images/ic_launcher.png"></a>
            <a href="#" data-activates="mobile-demo" class=" button-collapse right"><i
                    class="material-icons">clear_all</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">Đăng ký</a></li>
                <li><a href="">Đăng nhập</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="">Đăng ký</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a href="">Đăng nhập</a></li>
            </ul>
        </div>
    </nav>
    <ul id="slide-out" class="side-nav" ng-controller="MonThiController ">
        <li>
            <div class="userView">
                <div class="background">
                    <img src="images/background.jpg">
                </div>
                <a href="#!user"><img class="circle" src="images/ic_launcher.png"></a>
                <a href="#!name"><span class="white-text name">Demo User</span></a>
                <a href="#!email"><span class="white-text email">demo@gmail@gmail.com</span></a>
            </div>
        </li>
        <li>
            <a href="#list_monhoc" > Tất cả môn học</a>
            <a href="#getlist/{{ mh.id}}" ng-repeat="mh in monhocs"> {{ mh.name_monthi}}</a>

        </li>
        <li>
            <div class="divider"></div>
        </li>

    </ul>

</header>


<main>
    <!-- Search -->
    <div class="container " ng-controller="SearchController">
        <div class="row">
            <div class="input-field col s4" >
                <select  class="browser-default" ng-model="selectedName" >
                    <option ng-model="value_search" value="" disabled selected>Tìm kiếm môn học</option>
                    <option ng-repeat =" slmh in search_list_monhoc" value="{{slmh.id}}">{{slmh.name_monthi}}</option>
                </select>
            </div>
            <div class="input-field col s2">
                <a href="#getlist/{{selectedName}}" class="waves-effect waves-light btn indigo"> Tìm kiếm</a>
            </div>
        </div>


    </div>


    <div class="ng-view">
        
    </div>
</main>


<footer class="page-footer indigo">
    <div ng-include src="'resources/views/view/footer.html'"></div>
</footer>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo asset('public/js/jquery-2.1.1.min.js'); ?>  "></script>
<script type="text/javascript" src="<?php echo asset('public/js/materialize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/init.js'); ?>"></script>

</body>
</html>
