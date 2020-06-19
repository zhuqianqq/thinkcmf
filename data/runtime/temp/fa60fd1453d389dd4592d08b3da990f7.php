<?php /*a:2:{s:78:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\link\index.html";i:1591067483;s:75:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/public\header.html";i:1591067483;}*/ ?>
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
        <li class="active"><a href="<?php echo url('link/index'); ?>">所有友情链接</a></li>
        <li><a href="<?php echo url('link/add'); ?>">添加友情链接</a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20" action="<?php echo url('Link/listOrder'); ?>">
        <div class="table-actions">
            <button class="btn btn-sm btn-primary js-ajax-submit" type="submit"><?php echo lang('SORT'); ?></button>
            <button class="btn btn-sm btn-success js-ajax-submit" type="submit"
                    data-action="<?php echo url('link/toggle',array('display'=>1)); ?>" data-subcheck="true"><?php echo lang('DISPLAY'); ?>
            </button>
            <button class="btn btn-sm btn-danger js-ajax-submit" type="submit"
                    data-action="<?php echo url('link/toggle',array('hide'=>1)); ?>" data-subcheck="true"><?php echo lang('HIDE'); ?>
            </button>
        </div>
        <?php $status=array("1"=>lang('DISPLAY'),"0"=>lang('HIDDEN')); ?>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="16"><label><input type="checkbox" class="js-check-all" data-direction="x"
                                             data-checklist="js-check-x"></label></th>
                <th width="50"><?php echo lang('SORT'); ?></th>
                <th width="50">ID</th>
                <th><?php echo lang('NAME'); ?></th>
                <th>链接地址</th>
                <th width="50"><?php echo lang('STATUS'); ?></th>
                <th width="120"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): if( count($links)==0 ) : echo "" ;else: foreach($links as $key=>$vo): ?>
                <tr>
                    <td><input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]"
                               value="<?php echo $vo['id']; ?>"></td>
                    <td><input name='list_orders[<?php echo $vo['id']; ?>]' class="input input-order mr5" type='text' size='3'
                               value='<?php echo $vo['list_order']; ?>'></td>
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><a href="<?php echo $vo['url']; ?>" target="_blank"><?php echo $vo['url']; ?></a></td>
                    <td>
                        <?php if(empty($vo['status']) || (($vo['status'] instanceof \think\Collection || $vo['status'] instanceof \think\Paginator ) && $vo['status']->isEmpty())): ?>
                            <span class="label label-default">
                                <?php echo $status[$vo['status']]; ?>
                            </span>
                            <?php else: ?>
                            <span class="label label-success">
                                <?php echo $status[$vo['status']]; ?>
                            </span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo url('link/edit',array('id'=>$vo['id'])); ?>"><?php echo lang('EDIT'); ?></a>
                        <a class="btn btn-xs btn-danger" href="<?php echo url('link/delete',array('id'=>$vo['id'])); ?>" class="js-ajax-delete">
                            <?php echo lang('DELETE'); ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="16">
                    <label>
                        <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                    </label>
                </th>
                <th width="50"><?php echo lang('SORT'); ?></th>
                <th width="50">ID</th>
                <th><?php echo lang('NAME'); ?></th>
                <th>链接地址</th>
                <th width="50"><?php echo lang('STATUS'); ?></th>
                <th width="120"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </tfoot>
        </table>
        <div class="table-actions">
            <button class="btn btn-sm btn-primary js-ajax-submit" type="submit"><?php echo lang('SORT'); ?></button>
            <button class="btn btn-sm btn-success js-ajax-submit" type="submit"
                    data-action="<?php echo url('link/toggle',array('display'=>1)); ?>" data-subcheck="true"><?php echo lang('DISPLAY'); ?>
            </button>
            <button class="btn btn-sm btn-danger js-ajax-submit" type="submit"
                    data-action="<?php echo url('link/toggle',array('hide'=>1)); ?>" data-subcheck="true"><?php echo lang('HIDE'); ?>
            </button>
        </div>
    </form>
</div>
<script src="/static/js/admin.js"></script>
</body>
</html>