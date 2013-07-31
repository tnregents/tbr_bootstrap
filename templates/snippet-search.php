<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
?>

<form action="/search/google/" method="get" id="global-search-form">
  <fieldset>
    <div class="global-search-left">
      <input name="q" type="text" placeholder="Enter your search terms here">
    </div>
    <div class="global-search-right">
      <label for="search-all-tbr">
        <input type="radio" class="radiosearch" id="search-all-tbr" value="" name="sitesearch" checked="yes">
        All of TBR.edu</label>
      <!--
			  <?php if ($host = "policies-tbr-edu") { ?>
			  <label for="emerging"><input type="radio" class="radiosearch" id="search-emerging-tech" value="site:policies.tbr.edu" name="sitesearch">Emerging Tech</label>  
			  <?php } ?>
			  
            <label for="emerging">
              <input type="radio" class="radiosearch" id="search-emerging-tech" value="site:emergingtech.tbr.edu" name="sitesearch">
              Emerging Tech</label>
            -->
      <?php if($tbr_host == "policies-tbr-edu") { ?>
      <label for="search-site-section">
        <input type="radio" class="radiosearch" id="search-site-section" value="site:policies.tbr.edu" name="sitesearch">
        All Policies &amp; Guidelines</label>
      <?php } 
            else { ?>
      <label for="search-site-section">
        <input type="radio" class="radiosearch" id="search-site-section" value="xxxx" name="sitesearch">
        This Site Section</label>
      <?php } ?>
      <label for="search-people">
        <input type="radio" class="radiosearch" id="search-people" value="search-people" name="sitesearch">
        System Office Staff</label>
      <button id="do-site-search">Search</button>
    </div>
  </fieldset>
</form>
<!-- /form#global-search-form -->