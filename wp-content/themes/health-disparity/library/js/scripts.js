/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function

function setGridHeight(element) {
  var currentTallest = 0,
      currentRowStart = 0,
      rowDivs = new Array(),
      $el,
      topPosition = 0;

  $(element).each(function() {

    $el = $(this);
    $el.height('auto');
    topPosition = $el.position().top;

     if (currentRowStart != topPosition) {

       // we just came to a new row.  Set all the heights on the completed row
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }

       // set the variables for the new row
       rowDivs.length = 0; // empty the array
       currentRowStart = topPosition;
       currentTallest = $el.height();
       rowDivs.push($el);

     } else {

       // another div on the current row.  Add it to the list and check if it's taller
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

    }
    // do the last row
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
};

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

  setGridHeight('.tier2 .container-filter');

  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.filter-item',
    layoutMode: 'fitRows',
    hiddenStyle: {
      opacity: 0
    },
    visibleStyle: {
      opacity: 1
    }
  });

  var gridSettings = {
    gridFilter: '',
    currentTier: 1,
    destTier: 1,
    firstTier1Click: true,
    firstTier2Click: true
  }

  $grid.isotope({ filter: ''});
  // $('.tier2-dimension').fadeIn(200);

  function filterGrid(gridObj, clickedEl) {

    console.log(clickedEl);
    console.log('tier1click = ' + gridObj.firstTier1Click);
    console.log('tier2click = ' + gridObj.firstTier2Click);

    // first tier1 click
    if (gridObj.firstTier1Click) {

      console.log('firstgridtier1');

      if (gridObj.gridFilter == '.dimension') {

        // console.log('first-dimension');
        $('.tier2-dimension').fadeIn(200);
        $('#btn-dimension').addClass('is-checked');

      } else if (gridObj.gridFilter == '.time') {

        // console.log('first-time');
        $('.tier2-time').fadeIn(200);
        $('#btn-time').addClass('is-checked');

      }

      clickedEl.addClass('is-checked');
      gridObj.firstTier1Click = false;
      gridObj.currentTier = gridObj.destTier;
      return;

    // first tier2 click
    } else if (gridObj.firstTier2Click && clickedEl.parents().hasClass('tier2')) {

      console.log('firstgridtier2');
      clickedEl.addClass('is-checked');
      $('.filters-info').hide();

      gridObj.firstTier2Click = false;

    // changing tiers
    } else if (gridObj.currentTier !== gridObj.destTier) {

      console.log('change tier');
      $('.filters button').removeClass('is-checked');
      $('.grid').hide();

      if (gridObj.currentTier == 1) {

        console.log('currentTier = 1');
        $('.tier2-dimension').fadeOut(200);

        setTimeout(function() {
          $('.tier2-time').fadeIn(200);
          clickedEl.addClass('is-checked');
        }, 200);
      }

      if (gridObj.currentTier == 2) {

        console.log('currentTier = 2');
        $('.tier2-time').fadeOut(200);

        setTimeout(function() {
          $('.tier2-dimension').fadeIn(200);
          clickedEl.addClass('is-checked');
        }, 200);
      }

      // $('.filters button').removeClass('is-checked');
      // $this.addClass('is-checked');
      gridObj.currentTier = gridObj.destTier;

      return;

    // tier 1 click
    } else if (clickedEl.parents().hasClass('tier1')) {

      $('.tier2 button').removeClass('is-checked');

    } else if (clickedEl.parents().hasClass('tier2')) {

      $('.tier2 button').removeClass('is-checked');
      clickedEl.addClass('is-checked');

    }

    console.log('catch all');

    $('.grid').show();
    $grid.isotope({ filter: gridObj.gridFilter});

    // gridObj.currentTier = gridObj.destTier;
  }

  // store filter for each group
  var filters = {};

  $('.filters').on( 'click', '.button', function() {
    var $this = $(this);
    // get group key
    var $buttonGroup = $this.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope

    var itemID = $this.attr('id');

    gridSettings.gridFilter = '.' + itemID.replace('btn-', '');

    if ($this.attr('id') == 'btn-dimension') {
      gridSettings.destTier = 1;
    } else if ($this.attr('id') == 'btn-time') {
      gridSettings.destTier = 2;
    }

    console.log('gridfilter: ' + gridSettings.gridFilter);
    console.log('currenttier: ' + gridSettings.currentTier);
    console.log('destTier: ' + gridSettings.destTier);
    filterGrid(gridSettings, $this);

  });

  // change is-checked class on buttons
    // $('.button-group button').on( 'click', function() {
    //   $('.button-group button').find('.is-checked').removeClass('is-checked');
    //   $( this ).addClass('is-checked');
    // });

});

$(window).on("load resize",function(){
  $('.tier2').height($('.tier2 .container-filter').height());
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

