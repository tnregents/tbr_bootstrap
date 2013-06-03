//Cosmetics

$(document).ready(function() {
   //Add twitter tooltip to images with data-toggle=tooltip
    $("img[data-toggle=tooltip]")
        .tooltip({
            offset: 10
        })
        
   // Add section-home class to the first li element in the sidebar     
   $("#sidebar-first li.first:first").addClass('section-home');
   //Add the twitter home button to the li with section-home class     
   $("li.section-home a").prepend('<i class="icon-home">');
     
      $("div.view-job-opportunities-at-tbr-universities form#views-exposed-form-job-opportunities-at-tbr-universities-page input#edit-title").replaceWith(' \
   <select name="title" id="title" size="1"> \
   <option value="">All</option> \
   <option value="UofM">Memphis</option> \
   <option value="APSU">APSU</option> \
   <option value="ETSU">ETSU</option> \
   <option value="TSU">TSU</option> \
   <option value="TTU">TTU</option> \
   <option value="MTSU">MTSU</option> \
   </select>');  
  
});
/*
// Sticky Footer
function positionFooter() {
  var Footer = $("#footer");
  if ((($(document.body).height() + Footer.height()) < $(window).height() && Footer.css("position") == "fixed") || ($(document.body).height() < $(window).height() && Footer.css("position") != "fixed")) {
	Footer.css({ position: "fixed", bottom: "120px" });
  }
  else {
	Footer.css({ position: "static" });
  }
}

// Sticky Global Footer
function positionGlobalfooter() {
  var Globalfooter = $("#global-footer");
  if ((($(document.body).height() + Globalfooter.height()) < $(window).height() && Globalfooter.css("position") == "fixed") || ($(document.body).height() < $(window).height() && Globalfooter.css("position") != "fixed")) {
	Globalfooter.css({ position: "fixed", bottom: "0px" });
  }
  else {
	Globalfooter.css({ position: "static" });
  }
}

$(document).ready(function () {
  positionFooter();
  $(window).scroll(positionFooter);
  $(window).resize(positionFooter);
  $(window).load(positionFooter); 
  positionGlobalfooter();
  $(window).scroll(positionGlobalfooter);
  $(window).resize(positionGlobalfooter);
  $(window).load(positionGlobalfooter);
});;
*/

// That lovely 'back to top' button
jQuery(function() {
	
	$('input[type=text]').attr('x-webkit-speech', 'x-webkit-speech');

	// Menu Stuff
	
	
	// Count the number of links on the page in the left-hand nav.
 // var linkCount = $('#block-menu-block-2 li').length;
 
//  if (linkCount > 2) { // If greater than 15...
    //alert('There are '+linkCount+' links in the left-hand nav.');

    // Set expanded items to collapsed by default.
    
    $("#block-menu-block-2 ul.menu li.expanded:not('.active-trail') > a").next("ul").css("display", "none");
    $("#block-menu-block-2 ul.menu li.expanded:not('.active-trail')").addClass("collapsed").removeClass("expanded");

    // Toggle the expanded/collapsed state of the list item.
    
    $("#block-menu-block-2 ul.menu li.collapsed > a").click(function() {
      // Mark the parent list item as expanded.
      $(this).parent().toggleClass('collapsed').toggleClass('expanded');
      $(this).next("ul").slideToggle('fast');
      // Also make any previously expanded list items collapse at this point.
      $(this).parent().siblings("[class*=expanded]").each(function (i) {
        $(this).toggleClass('collapsed').toggleClass('expanded'); // Change the class on the <li>.
        $(this).children("ul").slideToggle('fast'); // Make the child <ul> slide up.
      });
      return false;
    });
    $("#block-menu-block-2 ul.menu li.expanded > a").click(function() {
      // Mark the parent list item as collapsed.
      $(this).parent().toggleClass('collapsed').toggleClass('expanded');
      $(this).next("ul").slideToggle('fast');
      // Also need to run the following again because active-trail links seem to continue to be found by this function, even after their class changes to "collapsed".
      $(this).parent().siblings("[class*=expanded]").each(function (i) {
        $(this).toggleClass('collapsed').toggleClass('expanded'); // Change the class on the <li>.
        $(this).children("ul").slideToggle('fast'); // Make the child <ul> slide up.
      });
      return false;
    });
  //}
    
}); 