<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><div class="footer">
    <a href="http://beian.miit.gov.cn"><div class="footer0"><?php echo $site['site_copyright'];?> <?php echo $site['site_filing'];?></div></a>
</div>
<script>
    function show(){
        var img = document.getElementsByClassName('hide')[0];
        img.style.display = "block";
    }
    function hide(){
        var img = document.getElementsByClassName('hide')[0];
        img.style.display = "none";
    }
</script>