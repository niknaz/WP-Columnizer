jQuery(
	function(){
		var divwidth = parseInt(jQuery('#columnizer').css('width'));
		jQuery('.columnize-two').columnize({width:divwidth/2});
		jQuery('.columnize-three').columnize({width:divwidth/3});
		jQuery('.columnize-four').columnize({width:divwidth/4});
		jQuery('.columnize-five').columnize({width:divwidth/5});
		jQuery('.columnize-six').columnize({width:divwidth/6});
		jQuery('.columnize-seven').columnize({width:divwidth/7});
		jQuery('.columnize-eight').columnize({width:divwidth/8});
		jQuery('.columnize-nine').columnize({width:divwidth/9});
		jQuery('.columnize-ten').columnize({width:divwidth/10});
		jQuery('.columnize-eleven').columnize({width:divwidth/11});
		jQuery('.columnize-twelve').columnize({width:divwidth/12});
	}
);
