<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $site['site_name'];?></title>
<link type="text/css" rel="stylesheet" href="<?php echo STATIC_URL;?>index/style.css">
<script type="text/javascript" src="<?php echo STATIC_URL;?>index/jquery-1.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL;?>index/banner.js"></script>
</head>
<style>
   .hide {
      width: 500px;
      height: 600px;
      display: none;
      top: 200px;
      margin-left: -250px;
      left: 50%;
      position: fixed;
      z-index: 10;
   }
</style>
<body>
<?php include template("index","header"); ?>

<div class="branknav">
  您当前位置：主页》公司简介
</div>

<div class="mainWrap">
  <div class="mainLeft">
     <div class="clear"></div>
     <div class="mainLeftCon">
      <img src="<?php echo STATIC_URL;?>index/image.jpg" class="hide" onclick="hide()" alt="">
      <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,updatetime,url,color,flag','thumb'=>'1','catid'=>$catid,'limit'=>'5','page'=>'page',));$pages = $tag->pages();}?>
      <?php if(is_array($data)) foreach($data as $v) { ?>
        <div class="news">
           <div class="newsL"><a href="javascript:;"><img onclick="show()" src="<?php echo $v['thumb'];?>"></a></div>
               <div class="newsR">
                  <a href="javascript:;" onclick="show()"><p><?php echo $v['title'];?><br>(5元/篇)</p></a>
               </div>
        </div>
      <?php } ?>
     </div>
     <div class="clear"></div>
     <div class="pagebox">
         <?php echo $pages;?>
     </div>
  </div>
</div>
<div class="clear"></div>
<div class="height20"></div>
<?php include template("index","footer"); ?>


</body></html>