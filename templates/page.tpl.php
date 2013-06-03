<?php
// Set some variables
$tbr_base_url = "http://tbrtest.tbr.edu";

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

<div id="global-header">
  <div class="container">
    <div class="row">
      <div id="top-logo" class="span4"><a href="#" style="border: none;"><img src="/sites/all/themes/tbr_bootstrap/images/wordmark.png" width="399" height="14" alt="Tennessee Board of Regents"></a></div>
      <div id="top-menu" class="span8">
        <div id="block-user-0" class="block block-user">
          <div class="content clear-block">
            <div class="navbar">
                <div class="nav-collapse collapse" style="height: 0px;">
                  <ul class="nav">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrative Offices<b class="caret"></b></a>
                      <ul class="dropdown-menu">
						<li><a href="<?php echo $tbr_base_url; ?>/chancellor/" title="Office of the Chancellor">Office of Chancellor</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=1172">Office of Academic Affairs</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=1174">Office of Effectiveness &amp; Strategic Initiatives</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=1176">Office of Administration and Facilities Development</a></li>
						<li><a href="<?php echo $tbr_base_url; ?>/business/" title="Office of Business and Finance">Office of Business and Finance</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=7674">Office of Community Colleges</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=1118">Office of General Counsel</a</li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=1182">Office of Information Technology</a></li>
						<li><a href="/WorkArea/linkit.aspx?LinkIdentifier=ID&amp;ItemID=322">Office of Tennessee Technology Centers</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institutions<b class="caret"></b></a>
                      <ul class="dropdown-menu">
	                      <li><a href="#">Universities</a></li>
	                      <li><a href="#">Community Colleges</a></li>
	                      <li><a href="#">Technology Centers</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs &amp; Initatives<b class="caret"></b></a>
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
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">QuickLinks<b class="caret"></b></a>
                      <ul class="dropdown-menu">
						<li><a href="<?php echo $tbr_base_url; ?>/communications/news" title="News">News</a></li>
						<li><a href="<?php echo $tbr_base_url; ?>/purchasing" title="Purchasing and Contracts">Purchasing and Contracts</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /#global-header -->

<!--
<div id="secondary-menu" class="clearfix">
  <ul class="menu nav">
    <li class="first leaf"><a href="/user">Board of Regents</a></li>
    <li class="leaf"><a href="/user">The Chancellor</a></li>
    <li class="last leaf"><a href="/user/logout">Institutions</a></li>
  </ul>
</div>
<!-- /#secondary-menu -->

<?php if (!empty($page['emergency'])): ?>
<div id="emergency-header">
	<div class="container">
		<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			<?php print render($page['emergency']); ?>
		</div> <!-- /.alert alert-error -->
	</div> <!-- /.container -->
</div>
<?php endif; ?>
<!-- /#emergency-header -->

<?php if ($logo || $site_name || $site_slogan || ($page['header']) || ($page['search_box'])): ?>
<div id="header" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="<?php if ($page['search_box']): print 'span8'; else: print 'span12'; endif; ?>">
        <?php if ($page['header']): ?>
        <div id="header-content" class="row-fluid"><?php print render($page['header']); ?></div>
        <!-- /#header-content -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- /#header -->
<?php endif; ?>

<?php if ($main_menu): ?>
<div id="main-menu" class="clearfix">
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".mainbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
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
            <ul class="nav pull-right">
	        <?php
	        if (!user_is_logged_in()) : ?>
	        <li><a href="/user">Sign Up</a></li>
	        <li class="divider-vertical"></li>
            <li class="dropdown">
            	<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            	<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
	            	<?php print render($page['login']); ?>
	            	</div>
	        </li>
	        <?php endif; ?>
	        <?php if (user_is_logged_in()) : ?>
	        <li><a href="/user/logout">Logout</a></li>
	        <?php endif; ?>
        </ul>
          </nav>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- /#main-menu -->
<?php endif; ?>

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
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
<div id="global-footer" style="position: static;">
  <div class="container">
    <div class="row">
      <div id="bottom-logo" class="span2"><a href="http://www.tbr.edu" style="border: none;"><img src="/sites/all/themes/tbr_bootstrap/logo.png" alt="Tennessee Board of Regents"></a></div>
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

<div id="toTop" class="btn btn-large icon-arrow-up"></div><!-- /#to-top -->
<!-- /#global-footer --> 
