<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\hj_slider;//Demo插件英文名，改成你的插件英文就行了
use cmf\lib\Plugin;
use think\Db;

//Demo插件英文名，改成你的插件英文就行了
class HjSliderPlugin extends Plugin
{

    public $info = [
        'name'        => 'HjSlider',//Demo插件英文名，改成你的插件英文就行了
        'title'       => '幻灯片插件扩展',
        'description' => '幻灯片插件扩展,增加移动端图片上传功能',
        'status'      => 1,
        'author'      => '火箭源码',
        'version'     => '1.0',
        'demo_url'    => 'http://demo.hji5.com',
        'author_url'  => 'http://www.hji5.com'
    ];

    public $hasAdmin = 0;//插件是否有后台管理界面

    // 插件安装
    public function install()
    {
        return true;//安装成功返回true，失败false
    }

    // 插件卸载
    public function uninstall()
    {
        return true;//卸载成功返回true，失败false
    }

    public function adminSlideItemAddView()
    {
        $request=request();
        $slideId = $request->param('slide_id');
        $this->assign('slide_id', $slideId);
        return $this->fetch('add');
    }

    public function adminSlideItemEditView()
    {
        $request=request();
        $id     = $request->param('id', 0, 'intval');
        $result = Db::name('slideItem')->where('id', $id)->find();

        $result['more'] = json_decode($result["more"],true);

        $this->assign('result', $result);
        $this->assign('slide_id', $result['slide_id']);
        return $this->fetch('edit');
    }
}