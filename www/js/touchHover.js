/**
 * touchHover.js
 *
 * Create tooltips on mouseover or on click (for supporting touch interfaces).
 * 
 * @author C. Scott Asbach
 */

$(document).ready(function() {	
	
	/**
	 * store the value of and then remove the title attributes from the
	 * abbreviations (thus removing the default tooltip functionality of
         * the abbreviations)
	 */
	$('abbr').each(function(){		
		
		$(this).data('title',$(this).attr('title'));
		$(this).removeAttr('title');
	
	});

	/**
	 * when abbreviations are mouseover-ed show a tooltip with the data from the title attribute
	 */	
	$('abbr').mouseover(function() {		
		
		// first remove all existing abbreviation tooltips
		$('abbr').next('.tooltip').remove();
		
		// create the tooltip
		$(this).after('<span class="tooltip">' + $(this).data('title') + '</span>');
		
		// position the tooltip 4 pixels above and 4 pixels to the left of the abbreviation
		var left = $(this).position().left + $(this).width() + 4;
		var top = $(this).position().top + 18;
		$(this).next().css('left',left);
		$(this).next().css('top',top);				
		
	});
	
	/**
	 * when abbreviations are clicked trigger their mouseover event then fade the tooltip
	 * (this is friendly to touch interfaces)
	 */
	$('abbr').click(function(){
		
		$(this).mouseover();
		
		// after a slight 2 second fade, fade out the tooltip for 1 second
		$(this).next().animate({opacity: 0.9},{duration: 4000, complete: function(){
			$(this).fadeOut(1000);
		}});
		
	});
	
	/**
	 * Remove the tooltip on abbreviation mouseout
	 */
	$('abbr').mouseout(function(){
			
		$(this).next('.tooltip').remove();				

	});	
	
});
