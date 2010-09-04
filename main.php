<?php 
/**
 * DokuWiki Sidebar Template
 * @author Christopher Smith <chris@jalakai.co.uk>
 *
 * This template is the Dokuwiki Default Template with
 * a few alterations
 *
 * @link   http://wiki.splitbrain.org/wiki:tpl:templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

// include functions that provide sidebar functionality
@require_once(dirname(__FILE__).'/tplfn_sidebar.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body<?php if (tpl_getConf('enable')) echo " class='$sidebar_class'"; ?>>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  
    <div class="stylehead">

    <!-- // header has the bluebox + border -->
    <div class="header">
	<div class="curveleft"></div>

    <!-- //src2pkg logo + text in one image  -->
	<div class="titleimage">
    <a href="<?php echo wl() ?>"><img src="<?php echo DOKU_TPL; ?>images/src2pkg.png"></img></a>
	</div>

	<div class="curveright"></div>    

    <!-- link set two (about/download) -->
    <div class="linkstwo">
      <a href="doku.php?id=manual:00_introduction">About</a><br />
      <a href="http://distro.ibiblio.org/pub/linux/distributions/amigolinux/download/src2pkg/">Download</a>
    </div>
    
    <!-- link set one (off the main page) -->
    <div class="linksone">
      <a href="doku.php?id=manual">The manual</a><br />
      <a href="doku.php?id=developers">For developers</a><br />
      <a href="doku.php?id=tutorials">Tutorials and samples</a>
    </div>
	
    </div> <!-- // header -->

	<div class="pagename">
		[[<?php tpl_link(wl($ID,'do=backlink'),tpl_pagename($ID)) ?>]]
	</div>
	
	<div class="pageinfo">
       <?php tpl_actionlink('history')?><br />
        <?php tpl_actionlink('edit')?>
	</div>
    
	<div class="clearer"></div>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)
	?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  </div> <!-- //stylehead -->
  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

<?php if (tpl_getConf('enable')) { ?>
  <div id="sidebar">
    <?php 
		if($conf['breadcrumbs']){?>    
		<div class="crumbs" id="sidebartop"><?php tpl_sidebar_editbtn(); ?> &nbsp;</div>
	<?php } 
		if($conf['youarehere']){?>
		<div class="youarehere" id="sidebartop">&nbsp;</div>
	<?php } ?>
    <div id="sidebar_content">
      <?php tpl_sidebar_content(); ?>
    </div>
		<hr>
	<div id="sidebar_pagelinks">
		<?php tpl_userinfo()?><br />
        <?php tpl_actionlink('profile')?><br />
        <?php tpl_actionlink('login')?><br />
		
        <?php tpl_actionlink('admin')?><br />
		<br /><br />
		<?php tpl_actionlink('subscription')?>
	 </div>
  </div>
<?php } ?>

  <div class="clearer">&nbsp;</div>

  <?php flush()?>

  <div class="doc"><?php tpl_pageinfo()?></div>

<!--
  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
    </div>

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

  </div>
-->

</div>

  <div class="stylefoot">
    <div class="lowleft"></div>
	  <div class="lowmid">
	    <div class="footlink">
		  <?php tpl_actionlink('index')?> &#149; <?php tpl_actionlink('recent')?>

		</div>
	  <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>
      </div>
	<div class="lowright"></div>
  </div>

<div class="no"><?php tpl_indexerWebBug()?></div>

</body>
</html>
