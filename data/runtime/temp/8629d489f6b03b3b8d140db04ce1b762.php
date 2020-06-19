<?php /*a:2:{s:80:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\route\select.html";i:1591067483;s:75:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/public\header.html";i:1591067483;}*/ ?>
<?php 
    if (!function_exists('_suggest_url')) {
        function _suggest_url($action, $url)
        {
        $actionArr = explode('/', $action);

        $params = array_keys($url['vars']);

        $urlDepr1Params = [];

        $urlDepr2Params = [];

        if (!empty($params)) {

        foreach ($params as $param) {
        if(empty($url['vars'][$param]['require'])){
        array_push($urlDepr1Params, "[:$param]");
        }else{
        array_push($urlDepr1Params, ":$param");
        }

        array_push($urlDepr2Params, htmlspecialchars('<') . $param . htmlspecialchars('>'));
        }

        }

        if ($actionArr[2] == 'index') {
        $actionArr[1] = cmf_parse_name($actionArr[1]);
        return empty($params) ? $actionArr[1].'$' : ($actionArr[1] . '/' . implode('/', $urlDepr1Params) /*. '或' . $actionArr[1] . '-' . implode('-', $urlDepr2Params)*/);
        } else {
        $actionArr[2] = cmf_parse_name($actionArr[2]);
        return empty($params) ? $actionArr[2].'$' : ($actionArr[2] . '/' . implode('/', $urlDepr1Params) /*. '或' . $actionArr[2] . '-' . implode('-', $urlDepr2Params)*/);
        }

        }
    }

    if (!function_exists('_url_vars')) {
        function _url_vars($url)
        {
        if (!empty($url['vars'])) {
        return implode(',', array_keys($url['vars']));
        }

        return '';
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo app('request')->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container:'body',
                html:true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
</head>
<body>
<div class="wrap js-check-wrap">
    <form method="post" class="js-ajax-form" action="<?php echo url('AdminCategory/listorders'); ?>">
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="16">
                </th>
                <th width="50">URL</th>
                <th>URL名称</th>
                <th>参数</th>
                <th>建议优化</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($urls) || $urls instanceof \think\Collection || $urls instanceof \think\Paginator): if( count($urls)==0 ) : echo "" ;else: foreach($urls as $action=>$vo): $suggestUrl=_suggest_url($action,$vo); ?>
                <tr class="data-item-tr">
                    <td>
                        <input type="radio" name="ids[]" class="js-radio" value="" data-name="<?php echo $vo['name']; ?>"
                               data-action="<?php echo $action; ?>" data-url="<?php echo $suggestUrl; ?>" data-vars="<?php echo _url_vars($vo); ?>">
                    </td>
                    <td><?php echo $action; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td>
                        <?php if(!(empty($vo['vars']) || (($vo['vars'] instanceof \think\Collection || $vo['vars'] instanceof \think\Paginator ) && $vo['vars']->isEmpty()))): ?>
                            <?php echo _url_vars($vo); ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php echo $suggestUrl; ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </form>
</div>
<script src="/static/js/admin.js"></script>
<script>
    $('.data-item-tr').click(function (e) {

        var $this = $(this);
        if ($(e.target).is('input')) {
            return;
        }

        var $input = $this.find('input');
        if ($input.is(':checked')) {
            $input.prop('checked', false);
        } else {
            $input.prop('checked', true);
        }


    });

    function confirm() {

        var $url = $('.js-radio:checked');
        if ($url.length > 0) {
            var selectedUrl = {
                action: $url.data('action'),
                name: $url.data('name'),
                url: $url.data('url'),
                vars:$url.data('vars')
            };

            return selectedUrl;
        } else {
            return false;
        }

    }
</script>
</body>
</html>