<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html
   PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title><?php echo $site['site_name'];?></title>
   <link type="text/css" rel="stylesheet" href="<?php echo STATIC_URL;?>index/style.css">
   <script type="text/javascript" src="<?php echo STATIC_URL;?>index/jquery-1.js"></script>
   <script type="text/javascript" src="<?php echo STATIC_URL;?>index/banner.js"></script>
</head>
<style>
   .hide{
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
   <div class="part1">
      <div class="part1tit">
         <div class="part1img">
            <div class="line0"></div>
            <img src="<?php echo STATIC_URL;?>index/1.jpg">
            <div class="line0"></div>
            <div class="clear"></div>
         </div> 
      </div>
      <img src="<?php echo STATIC_URL;?>index/image.jpg" class="hide" onclick="hide()" alt="">
      <div class="part1con">
         <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,thumb,catid,color,url,updatetime','thumb'=>'1','catid'=>'6','limit'=>'10',));}?>
         <?php if(is_array($data)) foreach($data as $K=>$v) { ?>
         <div class="part1con1">
            <a href="javascript:;" onclick="show()">
               <img src="<?php echo $v['thumb'];?>">
               <p class="tit"><?php echo $v['title'];?><br><span>(5元/篇)</span></p>
            </a>
         </div>
         <?php } ?>
      </div>
   </div>
   <div class="clear"></div>
   <?php include template("index","footer"); ?>


</body>

</html>