<?php /*a:2:{s:94:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/admin_simpleboot3/admin\theme\data_source.html";i:1591067483;s:84:"D:\phpstudy_pro\WWW\thinkcmf5_1_5\public/themes/admin_simpleboot3/public\header.html";i:1591067483;}*/ ?>
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
<style>
    .data-item-tr, .search-btn {
        cursor: pointer;
    }

    .col-xs-3 {
        padding-right: 0;
    }
</style>
</head>
<body>
<div class="wrap js-check-wrap">
    <?php if(!(empty($filters) || (($filters instanceof \think\Collection || $filters instanceof \think\Paginator ) && $filters->isEmpty()))): ?>
        <form method="post" action="<?php echo url('theme/dataSource'); ?>" id="search-form">
            <div class="row">
                <?php if(is_array($filters) || $filters instanceof \think\Collection || $filters instanceof \think\Paginator): if( count($filters)==0 ) : echo "" ;else: foreach($filters as $filterName=>$filter): switch($filter['type']): case "text": ?>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="sr-only"><?php echo (isset($filter['title']) && ($filter['title'] !== '')?$filter['title']:''); ?></label>
                                    <input type="text" class="form-control" name="<?php echo $filterName; ?>"
                                           placeholder="<?php echo (isset($filter['placeholder']) && ($filter['placeholder'] !== '')?$filter['placeholder']:''); ?>"
                                           value="<?php echo (isset($form[$filterName]) && ($form[$filterName] !== '')?$form[$filterName]:''); ?>">
                                </div>
                            </div>
                        <?php break; case "select": ?>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label class="sr-only"><?php echo (isset($filter['title']) && ($filter['title'] !== '')?$filter['title']:''); ?></label>
                                    <select class="form-control" name="<?php echo $filterName; ?>">
                                        <?php if(!(empty($filter['placeholder']) || (($filter['placeholder'] instanceof \think\Collection || $filter['placeholder'] instanceof \think\Paginator ) && $filter['placeholder']->isEmpty()))): ?>
                                            <option value=""><?php echo (isset($filter['placeholder']) && ($filter['placeholder'] !== '')?$filter['placeholder']:''); ?></option>
                                        <?php endif; if(is_array($filter['options']) || $filter['options'] instanceof \think\Collection || $filter['options'] instanceof \think\Paginator): if( count($filter['options'])==0 ) : echo "" ;else: foreach($filter['options'] as $key=>$option): 
                                                $option_selected='';
                                                if(isset($form[$filterName]) &&  $form[$filterName]==$option['id']){
                                                    $option_selected='selected';
                                                };
                                             ?>
                                            <option value="<?php echo $option['id']; ?>" <?php echo $option_selected; ?>><?php echo $option['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        <?php break; ?>
                    <?php endswitch; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="col-xs-3">
                    <input type="hidden" value="<?php echo $data_source; ?>" name="data_source">
                    <button type="submit" class="btn btn-primary">搜索</button>
                    <a class="btn btn-danger" href="<?php echo url('theme/dataSource'); ?>?data_source=<?php echo $data_source; ?>">清空</a>
                </div>
            </div>
            <!--<div class="form-group">-->
            <!--<div class="input-group">-->
            <!--<input type="text" class="form-control" name="keyword" value="<?php echo (isset($keyword) && ($keyword !== '')?$keyword:''); ?>"-->
            <!--placeholder="请输入关键字">-->
            <!--<input type="hidden" value="<?php echo $data_source; ?>" name="data_source">-->
            <!--<span class="input-group-addon search-btn" onclick="submitSearchForm()">GO!</span>-->
            <!--</div>-->
            <!--</div>-->
        </form>
    <?php endif; ?>
    <form method="post" class="js-ajax-form">

        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="16">
                    <?php if($multi): ?>
                        <label>
                            <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                        </label>
                    <?php endif; ?>
                </th>
                <th width="50">ID</th>
                <th>名称</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $items_tree; ?>
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

    function submitSearchForm() {
        $('#search-form').get(0).submit();
    }

    function confirm() {
        var selectedObjectsId   = [];
        var selectedObjectsName = [];
        var selectedObjects     = [];
        $('.js-select-box:checked').each(function () {
            var $this = $(this);
            selectedObjectsId.push($this.val());
            selectedObjectsName.push($this.data('name'));

            selectedObjects.push({
                id: $this.val(),
                name: $this.data('name')
            });
        });

        return {
            selectedObjects: selectedObjects,
            selectedObjectsId: selectedObjectsId,
            selectedObjectsName: selectedObjectsName
        };
    }
</script>
</body>
</html>