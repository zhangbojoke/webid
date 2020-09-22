<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="top">
    <div class="topDiv">
        <div class="topL">欢迎访问<?php echo $site['site_name'];?>网站</div>
    </div>
</div>
<div class="logo">
    <div class="logoL"><img src="../common/static/index/logo.png"></div>
    <div class="logoR">
        <div class="logoR1">

        </div>
        <div class="logoR2">
            <p class="p1">全国服务热线:</p>
            <p class="p2">13601357426</p>
        </div>
    </div>
</div>
<div class="nav">
    <ul class="navDiv">
        <li><a href="/" class="navone">网站首页</a></li>
        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'nav')) {$data = $tag->nav(array('field'=>'catid,catname,arrchildid,pclink','where'=>"parentid=0",'limit'=>'20',));}?>
        <?php if(is_array($data)) foreach($data as $v) { ?>
        <li><a href="<?php echo $v['pclink'];?>" class="navone"><?php echo $v['catname'];?></a></li>
        <?php } ?>
    </ul>
</div>

<div class="banner">

    <div class="b-list" style="width: 90px;"> 
    </div>
    <div class="b-img" style="width: 300%; left: 0px;">
        <a href="#"
            style="background: rgba(0, 0, 0, 0) url(&quot;<?php echo STATIC_URL;?>/index/banner.jpg&quot;) no-repeat scroll center center / 100% 100%; width: 33.3333%;"></a>
    </div>
</div>