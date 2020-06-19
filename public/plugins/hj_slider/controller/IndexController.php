<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\hj_slider\controller; //Demo插件英文名，改成你的插件英文就行了
use cmf\controller\PluginBaseController;
use app\admin\model\SlideItemModel;
use think\Db;

class IndexController extends PluginBaseController
{

    public function addPost()
    {
        $data = $this->request->param();

        $data = $data["post"];

        if (!empty($data['more']['thumbnail'])) {
            $data['more']['thumbnail'] = cmf_asset_relative_url($data['more']['thumbnail']);
        }
        else{
        	 unset($data['more']['thumbnail']);
        }
        
        $data['more'] = json_encode($data['more']);
        Db::name('slideItem')->insert($data);
        $this->success("添加成功！", url("admin/slideItem/index", ['slide_id' => $data['slide_id']]));
    }


    public function editPost()
    {
        $data = $this->request->param();

        $data = $data["post"];

        if (!empty($data['more']['thumbnail'])) {
            $data['more']['thumbnail'] = cmf_asset_relative_url($data['more']['thumbnail']);
        }
        else{
        	 unset($data['more']['thumbnail']);
        }

        $data['more'] = json_encode($data['more']);

        Db::name('slideItem')->update($data);
        $this->success("编辑成功！", url("admin/slideItem/index", ['slide_id' => $data['slide_id']]));
    }

}