<?php /*a:2:{s:89:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\theme\file_array_data.html";i:1591067483;s:75:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/public\header.html";i:1591067483;}*/ ?>
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
    <ul class="nav nav-tabs">
        <li class="active"><a>所有数据</a></li>
        <li><a href="<?php echo url('theme/fileArrayDataEdit',['tab'=>$tab,'var'=>$var,'file_id'=>$file_id,'widget'=>$widget]); ?>">添加数据</a>
        </li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20">
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <?php if(is_array($array_item) || $array_item instanceof \think\Collection || $array_item instanceof \think\Paginator): if( count($array_item)==0 ) : echo "" ;else: foreach($array_item as $key=>$vo): ?>
                    <th><?php echo $vo['title']; ?></th>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <th width="120"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($array_items) || $array_items instanceof \think\Collection || $array_items instanceof \think\Paginator): if( count($array_items)==0 ) : echo "" ;else: foreach($array_items as $itemKey=>$item): ?>
                <tr>
                    <?php if(is_array($array_item) || $array_item instanceof \think\Collection || $array_item instanceof \think\Paginator): if( count($array_item)==0 ) : echo "" ;else: foreach($array_item as $key=>$vo): ?>
                        <td>
                            <?php switch($vo['type']): case "image": if(!(empty($item[$key]) || (($item[$key] instanceof \think\Collection || $item[$key] instanceof \think\Paginator ) && $item[$key]->isEmpty()))): ?>
                                        <img src="<?php echo cmf_get_image_preview_url($item[$key]); ?>" style="height:100px;"/>
                                    <?php endif; break; default: ?>
                                    <?php echo (isset($item[$key]) && ($item[$key] !== '')?$item[$key]:''); ?>
                                </default>
                            <?php endswitch; ?>
                        </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <td>
                        <a href="<?php echo url('theme/fileArrayDataEdit',['tab'=>$tab,'var'=>$var,'file_id'=>$file_id,'widget'=>$widget,'item_index'=>$itemKey]); ?>">编辑</a>
                        <a href="<?php echo url('theme/fileArrayDataDelete',['tab'=>$tab,'var'=>$var,'file_id'=>$file_id,'widget'=>$widget,'item_index'=>$itemKey]); ?>"
                           class="js-ajax-delete">删除</a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </form>
</div>
<script src="/static/js/admin.js"></script>
<script>
    function confirm() {
        return true;
    }
</script>
</body>
</html>
