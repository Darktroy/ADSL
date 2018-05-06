<!DOCTYPE html>
<!-- saved from url=(0034)http://www.tacitapp.com/dermazone/ -->
<html class="full" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{url('/assets/images/favicon.png')}}">
    
    <title>{{ config('app.name', 'App') }}</title>


    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="./main/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./main/bootstrap-datetimepicker.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./main/mediaqueries.css">

    <link media="all" type="text/css" rel="stylesheet" href="./main/mediaqueries2.css">

    <link media="all" type="text/css" rel="stylesheet" href="./main/tinydropdown.css">

    <link media="all" type="text/css" rel="stylesheet" href="./main/custom.css">

    <link rel="stylesheet" href="./main/print.css" type="text/css" media="print">


    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<!--[endif]-->

    <script src="./main/tinydropdown.js"></script>



    

</head>
<body ng-app="myApp" ng-controller="gridCtrl">
    

<!-- Header -->
<header class="page-head" role="header">
    <div class="row">

        <div class="col-md-8 col-xs-12">
            <nav class="mainmenubg mainmenubg-mocab mainmenubg-mob" role="navigation">
    <div class="mainmenu">
        <div class="menu_mob_btn"></div>
        <ul class="menu" id="menu">
            <li class=" current "><a href="http://www.tacitapp.com/dermazone"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="insights "><a href="{{url('/Insights')}}"><span class="glyphicon glyphicon-search"></span> INSIGHTS</a></li>
            <li class="plan "><a href="http://www.tacitapp.com/dermazone/plan"><span class="glyphicon glyphicon-road"></span> PLAN</a></li>
            <li class="kpi "><a href="http://www.tacitapp.com/dermazone/kpi"><span class="glyphicon glyphicon-stats"></span> KPI</a></li>
            <li class="customers "><a href="http://www.tacitapp.com/dermazone/customers"><span class="glyphicon glyphicon-user"></span> CUSTOMERS</a></li>
            <li class="applications "><a href="http://www.tacitapp.com/dermazone/applications"><span class="glyphicon glyphicon-download-alt"></span> APPS</a></li>
            
        </ul>
        
        <script type="text/javascript">
                    var dropdown = new TINY.dropdown.init("dropdown", {id: 'menu', active: 'menuhover'});
                </script>
            </div>
        </nav>


        </div>

        <div class="col-md-4 col-xs-12 topuserpart">
             <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
           <!--*********************-->
            <img src="./main/logo-inner.png" border="0" alt="">
        </div>
    </div>
    <!-- /.container -->
    <div class="container-fluid subMenu">
                    <div class="col-sm-2">
                <b>From:</b> 2017-12-12<br>
                <b>To:</b> 2018-02-12
            </div>
            <div class="col-sm-9">
                            </div>
            </div>
</header>

<div class="container-fluid  page-content ">
    <div class="row">
        
            <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xs-12 slogintxt">
            </div>
            <div class="col-sm-6 col-xs-12 text-right buttons2top">
                <div class="pull-right"><img src="./main/support-btn.png" id="support" border="0" alt="">
                    <div id="supportmenu">
                        <a href="javascript:;" data-toggle="modal" data-target="#myModal">Contact Us</a>
                        <!-- <a href="javascript:;" class="last">FAQ</a>-->
                    </div>
                </div>
                <div class="pull-right" style="margin-right: 10px"><img src="./main/notifications_btn.png" id="notification" border="0" alt="">
                    <div id="notificationmenu">
                                                    <p>0 Notifications</p>
                                                    <p>
                        
                    </p></div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container" id="submenuDate">
        <div class="row">
            <form method="GET" action="{{url('/Insights')}}"
                  accept-charset="UTF-8">
                <input name="_token" type="hidden" value="igBStHlyWqxkoUpMjgqCr8xGrSypImA66nPUqDez">
            <div class="col-md-4">
                From
                <div class="form-group">

                    <div class="daybg" id="dayfrom">TUE</div>
                    <div class="input-group date" id="datetimepicker6">
                        <input type="text" id="datefrom" class="form-control" name="startDate" value="2017-12-12">
                                    <span class="input-group-addon newbg">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                to
                <div class="form-group">

                    <div class="daybg" id="dayto">MON</div>
                    <div class="input-group date" id="datetimepicker7">
                        <input type="text" id="dateto" class="form-control" name="endDate" value="2018-02-12">
                                    <span class="input-group-addon newbg">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <input class="lgnbtn buttonnews" type="submit" value="Show insights">
            </div>
            </form>
        </div>
    </div>
        </div>
</div>


<script src="./main/jquery-1.11.0.js"></script>

<script src="./main/bootstrap.min.js"></script>

<script src="./main/moment.min.js"></script>

<script src="./main/bootstrap-datetimepicker.js"></script>

<script src="./main/custom.js"></script>


<script>


    


    
    function generate_notification(type, text, more_options) {


        if (typeof(more_options) == 'undefined') more_options = {};

        var options = {
            text: text,
            type: type,
            layout: 'center',
            closeWith: ['click'],
            theme: 'relax',
            //            maxVisible: 1,
            //            killer: true,
            dismissQueue: false,
            animation: {
                open: 'animated shake',
                close: 'animated bounceOutUp',
                easing: 'swing',
                speed: 300
            }
        };

        $.each(more_options, function (option, value) {
            if (option == 'button')
                options['buttons'] = [{
                    addClass: 'btn btn-primary', text: 'Ok', onClick: function ($noty) {
                        $noty.close();
                    }
                }];
            else
                options[option] = value;
        });

        var n = noty(options);

        $(document).keyup(function (e) {
            if ($('.noty_bar').length > 0) {
                e = e || window.event;
                if (event.which == 13 || event.keyCode == 13 || e.keyCode == 27) {
                    n.close();
                    console.log(e.keyCode);
                }
            }

        });


    }

    function sure(message) {
        var n = noty({
            text: message,
            type: 'confirm',
            dismissQueue: false,
            layout: 'center',
            theme: 'relax',
            animation: {
                open: 'animated bounceInDown',
                close: 'animated bounceOutDown'
            },
            buttons: [
                {
                    addClass: 'btn btn-primary confirm_yes', text: 'Yes',
                    onClick: function ($noty) {
                        $noty.close();
                    }
                },
                {
                    addClass: 'btn btn-danger', text: 'No',
                    onClick: function ($noty) {
                        $noty.close();
                    }
                }
            ]
        })
    }

    function getEqual(valType, valIndex) {
        if (valType == 'status_class') {
            var valArray = {0: 'danger', 1: 'success'};
        } else if (valType == 'status_toggle_class') {
            var valArray = {0: 'off', 1: 'on'};
        } else if (valType == 'fav_star') {
            var valArray = {0: 'fa-star-o', 1: 'fa-star'};
        } else if (valType == 'title') {
            var valArray = {"":" ","0":" ","1":"Dr.","2":"Miss","3":"Mr.","4":"Mrs.","5":"Ms.","6":"Eng.","7":"Board","8":"Company","9":"Institutes Presidents"};
        } else if (valType == 'contact_type') {
            var valArray = {"1":"Buyer","2":"Vendor"};
        }
        if (valIndex in valArray) {
            return valArray[valIndex];
        } else {
            return valIndex;
        }
    }

    $(document).on('click', '.treeview-menu>li>a', function () {
        if (!window.event.ctrlKey) {
            $(this).find('i').attr('class', '').addClass('fa fa-spinner fa-spin');
        }

    });


    $(document).on('keypress', function (e) {

        if ($("input, textarea").is(":focus")) {
            return;
        }
        e = e || window.event;

        if (e.keyCode == '63' || e.keyCode == '47') {
            // shift (+) /
            window.location.href = 'http://www.tacitapp.com/dermazone';

        } else if (e.keyCode == '80') {
            // shift+p
            window.location.href = 'http://www.tacitapp.com/dermazone/plan';
        }
    });
</script>

            <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <form action="http://www.tacitapp.com/dermazone/home/contact" method="post" enctype="multipart/form-data">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-xs-12 selectContainer">
                                <div class="form-group">
                                    <select id="disabledSelect" name="disabledSelect" class="form-control">
                                        <option>Type of problem</option>
                                        <option>Installing</option>
                                        <option>Login</option>
                                        <option>During Call</option>
                                        <option>Compatibility of customers list</option>
                                        <option>Feedback</option>
                                        <option>Synchronization</option>
                                        <option>Appearance on tacitapp.com</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 selectContainer">
                                <textarea class="form-control" rows="10" name="message" id="message"></textarea>
                                <p id="comments" style="height:30px;color:white;"></p>

                                Your Photo: <input name="image" type="file" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default buttonallsite2" style="margin-top:20px;">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<div class="loader-modal"></div>

</body>
</html>