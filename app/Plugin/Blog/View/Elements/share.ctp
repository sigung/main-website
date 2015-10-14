<style>
    .social { list-style:none; }
    .social li { display:inline; float:left; }
    .social li a { display:block; width:48px; height:48px; position:relative; }
    .social li a strong { position:absolute; left:20px; top:-1px;
        text-shadow:1px 1px 0 rgba(0, 0, 0, 0.75); background-color:rgba(0, 0, 0, 0.7);
        border-radius:3px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    }

    /*li.delicious { background-image:url("../images/delicious.png"); }*/
    /*li.digg { background-image:url("../images/digg.png"); }*/
</style>
<br><br>
<ul class="social">
  <li><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a></li>
  <!--<li><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $this->Blog->permalink($blogPost); ?>&layout=button_count"-->
  <!--scrolling="no" frameborder="0"></iframe></li>-->
  <li><script src="http://platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-counter="right"></script></li>
</ul>