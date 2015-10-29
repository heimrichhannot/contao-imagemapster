(function($){

var IMAGEMAPSTER = {
		
		onReady : function(){
			this.initSaxonyMap();
		},
		initSaxonyMap : function(){
			var $image = $('#saxony-map');

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
					toolTip : $item.attr('data-tooltip').length > 0,
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

$(document).ready(IMAGEMAPSTER.onReady());


}(jQuery));