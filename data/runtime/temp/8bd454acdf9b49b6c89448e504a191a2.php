<?php /*a:1:{s:63:"D:\phpstudy_pro\WWW\wywl\public/plugins/hj_slider/view/add.html";i:1585281542;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<link rel="shortcut icon" href="/plugins/hj_slider/view/public/assets/images/favicon.ico" type="image/x-icon">

<link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
<link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
<link href="/static/font-awesome/css/font-awesome.min.css?page=index" rel="stylesheet" type="text/css">

<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/",
        WEB_ROOT: "/",
        JS_ROOT: "static/js/"
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
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('SlideItem/index',['slide_id'=>$slide_id]); ?>">幻灯片页面列表</a></li>
        <li class="active"><a href="<?php echo url('SlideItem/add',['slide_id'=>$slide_id]); ?>">添加幻灯片页面</a></li>
    </ul>
    <form action="<?php echo cmf_plugin_url('HjSlider://Index/addPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>标题<span class="form-required">*</span></th>
                        <td>
                            <input class="form-control" type="text" style="width:400px;" name="post[title]" id="title"
                                   required value="" placeholder="请输入标题"/>
                        </td>
                    </tr>
                    <tr>
                        <th>链接</th>
                        <td>
                            <input class="form-control" type="text" name="post[url]" id="keywords" value=""
                                   style="width: 400px" placeholder="请输入链接">
                        </td>
                    </tr>
                    <tr>
                        <th>打开方式</th>
                        <td>
                            <select class="form-control" name="post[target]" id="target" style="width: 400px">
                                <option value="_blank" selected="selected">新窗口(_blank)</option>
                                <option value="_self">当前窗口(_self)</option>
                                <option value="_parent">父窗口(_parent)</option>
                                <option value="_top">主窗口(_top)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>描述</th>
                        <td><input class="form-control" type="text" name="post[description]" id="source" value=""
                                   style="width: 400px" placeholder="请输入描述"></td>
                    </tr>
                    <tr>
                        <th>幻灯片内容</th>
                        <td>
                            <textarea class="form-control" name="post[content]" id="description"
                                      style="width: 47%; height: 100px;" placeholder="请填写幻灯片内容"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr>
                        <th><b>背景图</b></th>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <input type="hidden" name="post[image]" id="thumb" value="">
                                <a href="javascript:uploadOneImage('图片上传','#thumb');">
                                    <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="thumb-preview"
                                         width="135" style="cursor: hand"/>
                                </a>
                                <input type="button" class="btn btn-sm"
                                       onclick="$('#thumb-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#thumb').val('');return false;"
                                       value="取消图片">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><b>缩略图</b></th>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <input type="hidden" name="post[more][thumbnail]" id="mobile_thumb" value="">
                                <a href="javascript:uploadOneImage('图片上传','#mobile_thumb');">
                                    <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="mobile_thumb-preview"
                                         width="135" style="cursor: hand"/>
                                </a>
                                <input type="button" class="btn btn-sm"
                                       onclick="$('#mobile_thumb-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#mobile_thumb').val('');return false;"
                                       value="取消图片">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="post[slide_id]" value="<?php echo $slide_id; ?>">
                <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('ADD'); ?></button>
                <a class="btn btn-default" href="<?php echo url('SlideItem/index',['slide_id'=>$slide_id]); ?>"><?php echo lang('BACK'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin.js"></script>
</body>
</html>