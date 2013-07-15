<?php
// Set some variables
//$tbr_base_url = "http://tbrtest.tbr.edu";
$tbr_base_theme = path_to_theme();
?>

<div id="skipnav" class="element-invisible">
  <div class="container">
    <p>Skip to:</p>
    <ul>
      <li><a href="#content" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a></li>
      <?php if ($main_menu): ?>
      <li><a href="#main-menu" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!-- /#skipnav -->

<div id="global-search">
  <div class="container">
	  <div class="global-search-inner">
	  <form action="#" method="get" id="global-search-form">
		  <fieldset>
			  <div class="global-search-left">
			  <input type="text" name="s" placeholder="Enter your search terms here">
			  </div>
			  <div class="global-search-right">
			  <label for="people"><input type="radio" class="radiosearch" onclick="this.form.action='/people';" id="people" value="people" name="searchme">All of TBR.edu</label>
			  <label for="people"><input type="radio" class="radiosearch" onclick="this.form.action='/people';" id="people" value="people" name="searchme">This Site Section</label>
			  <label for="people"><input type="radio" class="radiosearch" onclick="this.form.action='/people';" id="people" value="people" name="searchme">System Office Staff</label>
			  <button>Search</button>
			  </div>
		  </fieldset>
	  </form>
	  </div>
  </div>
</div>
<div id="global-header">
  <div class="container">
    <div id="global-nav" class="span8">
      <div class="navbar global-nav-navi">
        <div class="navbar-inner">
          <ul class="nav">
            <li><a href="#">Institutions</a></li>
            <li><a href="#">Programs &amp; Initiatives</a></li>
            <li class="show-search-list"><a href="#" id="show-search">Search <img src="/<?php echo $tbr_base_theme; ?>/images/search.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="top-logo" class="span4"> <a href="#" style="border: none;"><img src="/<?php echo $tbr_base_theme; ?>/images/wordmark.png" width="399" height="14" alt="Tennessee Board of Regents"></a> </div>
    <!-- #top-logo --> 
  </div>
  <!-- .container --> 
  
</div>
<!-- /#global-header --> 

<?php if (!empty($page['emergency'])): ?>
<div id="emergency-header">
  <div class="container">
    <div class="alert alert-error">
      <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
      <?php print render($page['emergency']); ?> </div>
    <!-- /.alert alert-error --> 
  </div>
  <!-- /.container --> 
</div>
<?php endif; ?>
<!-- /#emergency-header -->



<div id="header" class="clearfix">
  <div class="container">
    <div class="row">
      <div id="logo" class="site-logo span4"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> 
      	<img src="/<?php echo $tbr_base_theme; ?>/images/tbr_seal_edu.png" alt="<?php print $site_name; ?>" role="presentation" /> </a> 
      </div>
      <div id="main-menu" class="span9">
        <div class="navbar main-menu-navi">
          <div class="navbar-inner"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".mainbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <div class="nav-collapse mainbar">
              <nav role="navigation">
              	<?php //print render($primary_nav); ?> 
              <ul class="menu nav">
              	<?php /*<li class="dropdown first">
              		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Board of Regents <b class="caret"></b></a>
              		<ul class="dropdown-menu">
              			<li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
              	</li>
              	*/ ?>
              	<li><a href="/">Board of Regents</a></li>
              	<li><a href="/">Chancellor</a></li>
              	<li><a href="/">Academics</a></li>
              	<li><a href="/">Administration</a></li>
              	<li><a href="/">Policies &amp; Guidelines</a></li>              	
              	<li><a href="/">News & Reports</a></li>
              	<li><a href="/">Especially For...</a></li> 	  
			  </ul>
			
              <!-- /#primary-menu -->
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
                          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /#header -->

<?php /*
<div id="header" class="clearfix">
  <div class="container">
    <div class="row">
      <div id="logo" class="site-logo span4"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> 
      	<img src="/<?php echo $tbr_base_theme; ?>/images/tbr_seal_edu.png" alt="<?php print $site_name; ?>" role="presentation" /> </a> 
      </div>
      <div id="main-menu" class="span9">
        <div class="navbar">
          <div class="navbar-inner"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".mainbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <?php if ($primary_nav || !empty($page['navigation'])): ?>
            <div class="nav-collapse mainbar">
              <nav role="navigation">
              <?php if (($primary_nav) && empty($page['navigation'])): ?>
              <?php print render($primary_nav); ?> 
              <!-- /#primary-menu -->
              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
              
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /#header -->

*/ ?>

<?php if ($page['header_unit']): ?>
<div id="header-unit" class="clearfix">
  <div class="container">
  	<div id="header-unit-inner" class="row">
  		<div class="header-unit-content">
	  		<?php print render($page['header_unit']); ?>
  		</div>
  	</div>
  </div>
</div>
<!-- /#header_unit -->
<?php endif; ?>

<!--/#header-unit -->

<div id="main" class="clearfix">
  <div class="container">
    <?php //if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php //endif; ?>
    <?php if ($page['main_top']): ?>
    <div id="main-top" class="row-fluid"> <?php print render($page['main_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_upper']): ?>
    <div id="main-upper" class="row-fluid"> <?php print render($page['main_upper']); ?> </div>
    <?php endif; ?>
    <div id="main-content" class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
        
        <?php if (user_is_logged_in()) : ?>

        <ul class="menu nav">
        <li><a href="/user/logout">Logout</a></li>
        </ul>
<?php endif; ?>

      
      
      
      
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
        <div id="content-wrapper">
          <div id="content-head" class="row-fluid">
            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
            <div class="tabs"> <?php print render($tabs); ?> </div>
            <?php endif; ?>
            <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($page['help']): ?>
            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="row-fluid"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="row-fluid"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="row-fluid"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_row2']): ?>
          <div id="content-row2" class="row-fluid"> <?php print render($page['content_row2']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
          <div id="content-col2" class="row-fluid">
            <?php if ($page['content_col2-1']): ?>
            <div class="span6">
              <div id="content-col2-1" class="span12 clearfix clear-row"> <?php print render($page['content_col2-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col2-2']): ?>
            <div class="span6">
              <div id="content-col2-2" class="span12 clearfix clear-row"> <?php print render($page['content_col2-2']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row3']): ?>
          <div id="content-row3" class="row-fluid"> <?php print render($page['content_row3']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
          <div id="content-col3" class="row-fluid">
            <?php if ($page['content_col3-1']): ?>
            <div class="span4">
              <div id="content-col3-1" class="span12 clearfix clear-row"> <?php print render($page['content_col3-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-2']): ?>
            <div class="span4">
              <div id="content-col3-2" class="span12 clearfix clear-row"> <?php print render($page['content_col3-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-3']): ?>
            <div class="span4">
              <div id="content-col3-3" class="span12 clearfix clear-row"> <?php print render($page['content_col3-3']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row4']): ?>
          <div id="content-row4" class="row-fluid"> <?php print render($page['content_row4']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
          <div id="content-col4" class="row-fluid">
            <?php if ($page['content_col4-1']): ?>
            <div class="span3">
              <div id="content-col4-1" class="span12 clearfix clear-row"> <?php print render($page['content_col4-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-2']): ?>
            <div class="span3">
              <div id="content-col4-2" class="span12 clearfix clear-row"> <?php print render($page['content_col4-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-3']): ?>
            <div class="span3">
              <div id="content-col4-3" class="span12 clearfix clear-row"> <?php print render($page['content_col4-3']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-4']): ?>
            <div class="span3">
              <div id="content-col4-4" class="span12 clearfix clear-row"> <?php print render($page['content_col4-4']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="row-fluid"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="row-fluid"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap --> 
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['main_lower']): ?>
    <div id="main-lower" class="row-fluid"> <?php print render($page['main_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_bottom']): ?>
    <div id="main-bottom" class="row-fluid"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<div id="footer-logo">
	<img src="/<?php echo $tbr_base_theme; ?>/images/footer_logo.png" alt="TBR Seal" title="TBR Seal">
</div>
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
<div id="global-footer" style="position: static;">
	<div id="institution-logos">
      	<div class="container institutions">
		  	<div class="row">
			  	<div class="span12">
			  		<div id="institution-logos-inner">
				  		<img src="/<?php echo $tbr_base_theme; ?>/images/institution_logos.png" alt="TBR Institutions" title="TBR Seal">
			  		</div>
				</div>
			</div>
		</div>
  </div>

  <div id="other-footer">
  <div class="container">
    <div class="row">
      <div id="bottom-text" class="span10">
        <div id="bottom-menu" class="clear-block">
          <ul>
            <li><a href="#">TBR Home</a></li>
            <li><a href="#">Maps &amp; Directions</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Copyright Complaints</a></li>
          </ul>
        </div>
        <div id="copyright-eeo">
          <p>The Tennessee Board of Regents (TBR) is the nation's sixth largest higher education system, governing 46 post-secondary educational institutions.
            The TBR system includes six universities, 13 two-year colleges and 27 technology centers, providing programs to more than 200,000 students across the state.</p>
          <p>The TBR is an AA/EEO employer and does not discriminate on the basis of race, color, national origin, sex, disability, or age in its programs and activities.
            Full Non-Discrimination Policy.</p>
        </div>
        <div id="vcard">
          <p>&copy; <?php echo date("Y"); ?> <span class="fn org">Tennessee Board of Regents</span>, <span class="adr"><span class="locality">Nashville</span>, <span class="region">Tennessee</span> <span class="postal-code">37217</span></span></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<div id="toTop" class="btn btn-large icon-arrow-up"></div>
<!-- /#to-top --> 
<!-- /#global-footer --> 
