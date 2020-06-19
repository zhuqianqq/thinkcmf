<?php /*a:4:{s:90:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\theme\file_var_setting.html";i:1591067483;s:83:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\theme\functions.html";i:1591067483;s:75:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/public\header.html";i:1591067483;s:81:"D:\phpstudy_pro\WWW\wywl\public/themes/admin_simpleboot3/admin\theme\scripts.html";i:1591067483;}*/ ?>
<?php 
    if (!function_exists('_parse_vars')) {
        function _parse_vars($vars,$inputName,$level=1,$widget='',$file_id=''){

 if(is_array($vars) || $vars instanceof \think\Collection || $vars instanceof \think\Paginator): if( count($vars)==0 ) : echo "" ;else: foreach($vars as $varName=>$var): ?>
    <fieldset>
        <div class="form-group">
            <?php if(isset($var['title'])): ?>
                <label class="control-label">
                    <?php echo $var['title']; if(!(empty($var['rule']['require']) || (($var['rule']['require'] instanceof \think\Collection || $var['rule']['require'] instanceof \think\Paginator ) && $var['rule']['require']->isEmpty()))): ?>
                        <span class="form-required">*</span>
                    <?php endif; ?>
                </label>
            <?php endif; switch($var['type']): case "text": ?>
                    <div class="controls">
                        <?php if(isset($var['dataSource'])): ?>
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>_text_]" class="form-control"
                                   onclick="doSelectData(this)"
                                   data-source="<?php echo base64_encode(json_encode($var['dataSource'])); ?>"
                                   data-title="请选择<?php echo $var['title']; ?>"
                                   value="<?php echo (isset($vars[$varName]['valueText']) && ($vars[$varName]['valueText'] !== '')?$vars[$varName]['valueText']:''); ?>">
                            <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>">
                            <?php else: ?>
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>">
                        <?php endif; if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "textarea": ?>
                    <div class="controls">
                        <textarea name="<?php echo $inputName; ?>[<?php echo $varName; ?>]"
                                  class="form-control"><?php echo $vars[$varName]['value']; ?></textarea>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "date": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-bootstrap-date"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "datetime": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-bootstrap-datetime"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "image": ?>
                    <div class="controls">
                        <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>" id="js-<?php echo $widget; ?><?php echo $varName; ?>-input">
                        <div>
                            <a href="javascript:uploadOneImage('图片上传','#js-<?php echo $widget; ?><?php echo $varName; ?>-input');">
                                <?php if(empty($vars[$varName]['value'])): ?>
                                    <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                         id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-preview"
                                         width="135" style="cursor: pointer"/>
                                    <?php else: ?>
                                    <img src="<?php echo cmf_get_image_preview_url($vars[$varName]['value']); ?>"
                                         id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-preview"
                                         width="135" style="cursor: pointer"/>
                                <?php endif; ?>
                            </a>
                            <?php if(!empty($vars[$varName]['value'])): ?>
                                <br>
                                <button id="js-<?php echo $widget; ?><?php echo $varName; ?>-button-remove" defaultImage="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" class="removeImage btn btn-sm" type="button" onclick="removeImage('<?php echo $widget; ?><?php echo $varName; ?>')">取消图片</button>
                            <?php endif; ?>
                        </div>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "number": ?>
                    <div class="controls">
                        <input type="number" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "location": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>_text_]" class="form-control"
                               onclick="doSelectLocation(this)"
                               data-title="请选择<?php echo $var['title']; ?>"
                               value="<?php echo (isset($vars[$varName]['valueText']) && ($vars[$varName]['valueText'] !== '')?$vars[$varName]['valueText']:''); ?>">
                        <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "file": ?>
                    <div class="controls">
                        <div class="input-group">
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>" id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-file">
                            <span class="input-group-addon"> <a href="javascript:uploadOne('图片上传','#js-<?php echo $widget; ?><?php echo $varName; ?>-input-file','file');">上传</a></span>
                        </div>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "color": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-color"
                               value="<?php echo $vars[$varName]['value']; ?>" id="js-color-<?php echo $widget; ?><?php echo $varName; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "array": ?>
                    <div class="controls">
                        <?php 
                            $arrayValueText=is_array($var['value'])&&count($var['value'])>0?count($var['value']).'条数据,点击添加更多...':'';
                         ?>
                        <textarea class="form-control" placeholder="点击添加数据"
                                  onclick="doEditArrayData(this)"
                                  data-var="<?php echo $varName; ?>"
                                  data-widget="<?php echo $widget; ?>"
                                  data-title="编辑<?php echo $var['title']; ?>"
                                    data-file_id="<?php echo $file_id; ?>"><?php echo $arrayValueText; ?></textarea>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "select": ?>
                    <div class="controls">
                        <?php 
                            $value= $vars[$varName]['value'];
                            $options = $vars[$varName]['options'];
                         ?>
                        <select name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control">
                            <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): if( count($options)==0 ) : echo "" ;else: foreach($options as $optionKey=>$optionItem): $optionSelected=$optionKey==$value?"selected":""; ?>
                                <option value="<?php echo $optionKey; ?>" <?php echo $optionSelected; ?>><?php echo $optionItem; ?>
                                </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "slide": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; ?>
            <?php endswitch; ?>
        </div>
    </fieldset>
<?php endforeach; endif; else: echo "" ;endif; 
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
<div class="wrap">
    <ul class="nav nav-tabs">
        <li>
            <a href="<?php echo url('theme/fileSetting',['file_id'=>$file_id,'tab'=>'widget']); ?>">
                组件
            </a>
        </li>
        <?php if(!(empty($file['more']['vars']) || (($file['more']['vars'] instanceof \think\Collection || $file['more']['vars'] instanceof \think\Paginator ) && $file['more']['vars']->isEmpty()))): ?>
            <li class="active">
                <a href="<?php echo url('theme/fileSetting',['file_id'=>$file_id,'tab'=>'var']); ?>">
                    设置
                </a>
            </li>
        <?php endif; if(!(empty($has_public_var) || (($has_public_var instanceof \think\Collection || $has_public_var instanceof \think\Paginator ) && $has_public_var->isEmpty()))): ?>
            <li>
                <a href="<?php echo url('theme/fileSetting',['file_id'=>$file_id,'tab'=>'public_var']); ?>">
                    全局设置
                </a>
            </li>
        <?php endif; ?>
    </ul>

    <form method="post" class="js-ajax-form  margin-top-20" action="<?php echo url('theme/settingPost'); ?>">
        <?php if(!(empty($file['more']['vars']) || (($file['more']['vars'] instanceof \think\Collection || $file['more']['vars'] instanceof \think\Paginator ) && $file['more']['vars']->isEmpty()))): ?>
            <?php echo _parse_vars($file['more']['vars'],'files['.$file['id'].'][vars]'); else: ?>
        <?php endif; ?>
        <div class="form-group text-center" style="display: none;">
            <!--<input type="hidden" name="id" value="<?php echo $file['id']; ?>">-->
            <button type="submit" class="btn btn-primary js-ajax-submit" id="submit-btn" data-success="successCallback">
                <?php echo lang('SAVE'); ?>
            </button>
        </div>
    </form>

</div>
<script src="/static/js/admin.js"></script>
<script>

    Wind.use('colorpicker', function () {
        $('.js-color').each(function () {
            var $this = $(this);
            $this.ColorPicker({
                livePreview: true,
                onChange: function (hsb, hex, rgb) {
                    $this.val('#' + hex);
                },
                onBeforeShow: function () {
                    $(this).ColorPickerSetColor(this.value);
                }
            });
        });

    });

    function doSelectData(obj) {
        var $obj              = $(obj);
        var $realInput        = $obj.next();
        var selectedObjectsId = $realInput.val();
        var dataSource        = $obj.data('source');
        var title             = $obj.data('title');
        parent.openIframeLayer("<?php echo url('theme/dataSource'); ?>?ids=" + selectedObjectsId + '&data_source=' + dataSource, title, {
            area: ['95%', '90%'],
            btn: ['确定', '取消'],
            yes: function (index, layero) {
                var iframeWin       = parent.window[layero.find('iframe')[0]['name']];
                var selectedObjects = iframeWin.confirm();
                if (selectedObjects.selectedObjectsId.length == 0) {
                    layer.msg('您没有选择任何数据!');
                    return;
                }
                $realInput.val(selectedObjects.selectedObjectsId.join(','));
                $obj.val(selectedObjects.selectedObjectsName.join(','));
                parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
            }
        });
    }

    function doEditArrayData(obj) {
        var $obj   = $(obj);
        var mVar   = $obj.data('var');
        var title  = $obj.data('title');
        var widget = $obj.data('widget');
        widget     = widget ? '&widget=' + widget : '';
        var fileId = $obj.data('file_id');
        if (!fileId) {
            fileId = '<?php echo $file_id; ?>';
        }

        parent.openIframeLayer(
            "<?php echo url('theme/fileArrayData'); ?>?tab=<?php echo $tab; ?>&file_id="+fileId+"&" + 'var=' + mVar + widget,
            title,
            {
                area: ['95%', '90%'],
                btn: ['确定', '取消'],
                yes: function (index, layero) {
                    var iframeWin = parent.window[layero.find('iframe')[0]['name']];
                    var result    = iframeWin.confirm();

                    if (result) {
                        parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
                    }

                }
            }
        );
    }

    function doSelectLocation(obj) {
        var $obj       = $(obj);
        var title      = $obj.data('title');
        var $realInput = $obj.next();
        var location   = $realInput.val();

        parent.openIframeLayer(
            "<?php echo url('dialog/map'); ?>?location=" + location,
            title,
            {
                area: ['95%', '90%'],
                btn: ['确定', '取消'],
                yes: function (index, layero) {
                    var iframeWin = parent.window[layero.find('iframe')[0]['name']];
                    var location  = iframeWin.confirm();
                    $realInput.val(location.lng + ',' + location.lat);
                    $obj.val(location.address);
                    parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
                }
            }
        );
    }

    function confirm() {
        $('#submit-btn').click();
    }

    function removeImage(wigetVarName) {
        //需要定位input和image
        //清空Input
        $('#js-' + wigetVarName + '-input').val('');
        //修改Image为原图。
        var defaultImage = $('#js-' + wigetVarName + '-button-remove').attr('defaultImage');
        $('#js-' + wigetVarName + '-input-preview').attr('src', defaultImage);
        //移除自身
        $('#js-' + wigetVarName + '-button-remove').remove();

    }

</script>
<script>
    function successCallback(data, statusText, xhr, $form) {
        function _refresh() {
            if (data.url) {
                //返回带跳转地址
                window.location.href = data.url;
            } else {
                if (data.code == 1) {
                    //刷新当前页
                    reloadPage(window);
                }
            }
        }

        noty({
            text: data.msg,
            type: 'success',
            layout: 'topCenter',
            modal: true,
            // animation: {
            //     open: 'animated bounceInDown', // Animate.css class names
            //     close: 'animated bounceOutUp', // Animate.css class names
            // },
            timeout: 800,
            callback: {
                afterClose: function () {
                    if (parent.afterSaveSetting) {
                        parent.afterSaveSetting();
                    }
                    _refresh();
                }
            }
        });
    }
</script>
</body>
</html>