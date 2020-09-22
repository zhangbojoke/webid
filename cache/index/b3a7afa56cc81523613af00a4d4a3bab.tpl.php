<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $site['site_name'];?></title>
<link type="text/css" rel="stylesheet" href="<?php echo STATIC_URL;?>index/style.css">
<script type="text/javascript" src="<?php echo STATIC_URL;?>index/jquery-1.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL;?>index/banner.js"></script>
</head>

<body>
<?php include template("index","header"); ?>

<div class="branknav">
  您当前位置：<?php echo get_location($catid);?>
</div>

<div class="mainWrap">
     <div class="clear"></div>
     <div class="mainLeftCon">
        <div class="cons">
            <?php echo $content;?>
        </div>
     </div>
  </div>
<?php include template("index","footer"); ?>


</body></html>