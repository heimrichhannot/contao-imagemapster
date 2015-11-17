(function($){

var Imagemapster = {
		config : {
			// total duration of the resize effect, 0 is instant
			resizeTime : 100, 
			// time to wait before checking the window size again
			// the shorter the time, the more reactive it will be.
			//short or 0 times could cause problems with old browsers.
			resizeDelay : 100, 
		},
		onReady : function(){
			//$('img[usemap]').rwdImageMaps();
			this.initMap();
		},
		resizeMap : function(){
			var $image = $('img[usemap]'),
				$wrap = $('img[usemap]').parent('.mod_imagemapster'),
				newWidth = $wrap.width();
			
			$image.mapster('resize', newWidth, 0, Imagemapster.config.resizeTime);   
		},
		initMap : function(){
			var $image = $('.mod_imagemapster img[usemap]');

			if($image.length < 1) return false;
			
			var	$map = $image.next('map'),
				$input = $('#county'),
				$city = $('#city'),
				active = $map.attr('data-active');
				value = $input.val(),
				areas = [];
			
			$map.find('area').each(function(k, item){
				var $item = $(item);

				var region = {
					key : $item.attr('name'),
					fillColor : $item.attr('data-fillColor'),
					toolTip : $item.attr('data-tooltip') ? true : false,
					fillOpacity : $item.attr('data-fillOpacity'),
					selected : (value || active) == $item.attr('name') 
				};

				areas.push(region);
			});
			
			$image.mapster({
	        fillOpacity: 0.6,
	        fillColor: "d42e16",
	        singleSelect: true,
	        mapKey: 'name',
	        listKey: 'name',
	        scaleMap: true,
	        onConfigured : Imagemapster.resizeMap,
	        onClick: function(data){
	        	var $this = $(this),
	        		href = $this.attr('href');
	        	
	        	if(href.substring(0,1) == '#')
	        	{
	        		if(value == data.key){
	        			$input.attr('value', '');
	        		}else{
	        			$input.attr('value', data.key);
	        			$city.attr('value', '');
	        		}
	        	}
	        	else{
	        		window.location.href = href;
	        	}
	        	
	        },
	        showToolTip: true,
	        toolTipClose: ["area-mouseout"],
	        toolTipContainer: '<div class="tooltip fade in"></div>',
	        onShowToolTip: function(data){
	        	var $this = $(this),
	        	    replace = '<div class="tooltip-inner">' + $this.attr('data-tooltip') + '</div>';
	        	data.toolTip.html(replace);
	        },
	        areas: areas
		    });
			
			// deselect county selection
			$('#city').keyup(function(){
				if(value != ''){
					$input.attr('value', '');
					$image.mapster('set', false, $image.mapster('get'));
				}
			});
		}
}

$(document).ready(function(){
	Imagemapster.onReady();
});

$(window).bind('resize',Imagemapster.resizeMap);

}(jQuery));