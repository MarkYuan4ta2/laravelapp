<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    {{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script src="http://apps.bdimg.com/libs/layer/2.0/layer.js"></script>
    <script src="http://apps.bdimg.com/libs/layer.m/1.5/layer.m.js"></script>

    <style>
        #set_editor {
            /*编辑器设定按钮布局*/
            max-height: 50px;
            min-width: 100px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online Judge</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">练兵场</a></li>
                <li><a href="#">娱乐空间</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
                    <button id="set_editor" class="btn btn-info navbar-btn">控制面板</button>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script>
    $('#set_editor').click(function () {
        layer.open({
            type: 1,
            content: '@yield("control_panel")',
            anim: true,
            style: 'position:fixed; bottom:0; left:0; width:100%; height:400px; padding:10px 0; border:none;'
        });
    });
</script>
@yield('control_panel_js')

</body>
</html>
