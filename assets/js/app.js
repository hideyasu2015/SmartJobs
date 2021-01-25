!function ($) {

  $(function(){
    
	var $window = $(window);
    var $body   = $(document.body);
    var navHeight = $('.navbar').outerHeight(true) + 10

    if ($.fn.scrollspy) $body.scrollspy({
      target: '#topnav',
      offset: navHeight
    })

    $window.on('load', function () {
      if ($.fn.scrollspy) $body.scrollspy('refresh')
    })
    
	if ($.fn.collapse) $('#accordion').collapse();
	
	if ($.fn.localScroll) $('#topnav').localScroll({offset: {top:0}});

	$(".browse.smo").click(function(){
		if ($.fn.scrollTo) $("html,body").scrollTo($("#categories"), 1000);
	});

	$(".newsearch").click(function(){
		if ($.fn.scrollTo) $("html,body").scrollTo($("#search"), 1000);
	});
	
	var indeed_logo = function(a){
		var logo = $('#indeed_logo');
		if (logo.length == 0){
			if (typeof a != 'undefined'){
				$('<div id="indeed_logo" class="text-center"><span id=indeed_at>Jobs by <a href="https://www.indeed.com/" title="Indeed Job Search"><img src="https://www.indeed.com/p/jobsearch.gif" style="border: 0; vertical-align: middle;" alt="Indeed job search"></a></span></div>').appendTo(a);
				return $('#indeed_logo');
			}
		}
		return logo;
	};
	$('#tabAll').click(function(e){
		e.preventDefault();
		$('#tabAll').parent().addClass('active').siblings().removeClass('active');
		$('.tab-pane .no-jobs').addClass('hide');
		$('.tab-pane').each(function(i,t){
	  		$(this).addClass('active');  
	  	});
	  	$('[data-toggle="tab"]').one('click', function(){
		  	$('.tab-pane .no-jobs').removeClass('hide');
		});
	  	indeed_logo().hide();
	});

	$('#myTabs>ul>li>a').on('click', function(e){
		var t = $(this).attr('title'), index = $(this).index();
		if (t.match(/Indeed/ig)){
			var tc = $( $(this).attr('href') );
			indeed_logo(tc).show();
		} else {
			indeed_logo().hide();
		}
			
		var idx = $(this).data('idx');
		$('#tabs-paginator .page-link').each(function(i, a){			
			var newref = $(a).attr('href');
			if (newref) {
				newref = newref.replace(/t=(\d+)/g, 't=' + idx);
				$(a).attr('href', newref);
			}
		});
	});
	
	$(document).on('click.feedres', '[data-toggle="jump2feed"]', function(e){
		if ( $.fn.scrollTo ) e.preventDefault();
		var title = $(this).attr('href');
		title = title.replace(/.*(?=#[^\s]+$)/, '');
		title = title.substring(1);
		var target = $('#myTabs a[title*="'+title+'"]');
		if ( target.length ){
			target.click();
			// go to
			if ($.fn.scrollTo) $("html,body").scrollTo($(".results"), 1000);
		}
	});
	
	$(document).on('click', '.footer-links a', function(e){
		if ( $.fn.scrollTo ) e.preventDefault();
		var target = $(this).attr('href');
		target = target.replace(/.*(?=#[^\s]+$)/, '');
		if ( $(target).length ){
			// go to
			if ( $.fn.scrollTo ) $("html,body").scrollTo($(target), 1000);
		}
	});
	
	$(document).on('click.type', '[data-active]', function(e){
		var $this = $(this), data = $this.data();
		var target = $('#accordion [data-type*="'+data.active+'"]');
		console.log(this, data, data.active, target);
		if (target.length && !target.hasClass('collapsed')){
			target.click();
		}
	});
	
	$(window).on('load', function(e){
		var current_hash = window.location.hash;
		if (current_hash && $(current_hash).length){
			if ($.fn.scrollTo) $("html,body").scrollTo($(current_hash), 1000);
		}
	});
	
	$(document).on('click.theme', '[data-toggle="theme"]', function(e){
		e.preventDefault();
		if ($(this).parent().hasClass('active')){
			return false;
		}
		var href = $(this).attr('href'), $switcher = $('#theme_switcher');
		href = href.replace(/.*(?=#[^\s]+$)/, '').substr(1);
		if ( $switcher.length ){
			var newurl = 'assets/themes/' + href + '/bootstrap.min.css';
			$switcher.attr('href', newurl);
			$('#current_theme').text(href);
		}
	});
	


  var $list = $(".language-dropdown");

  $list.children().detach().sort(function(a, b) {
    return $(a).text().localeCompare($(b).text());
  }).appendTo($list);


  });


$(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 200,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 30000,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});
	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	// Show appropriate pill based on #anchor in URL
	var url = window.location.href;
	if (url.indexOf("#") > 0){
	var activeTab = url.substring(url.indexOf("#") + 1);
	  $('.nav[role="tablist"] a[href="#'+activeTab+'"]').tab('show');
	}
	// Enable tooltips everywhere
 	 $('[data-toggle="tooltip"]').tooltip();



});

}(window.jQuery)