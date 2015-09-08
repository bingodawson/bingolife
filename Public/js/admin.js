$(document).ready(function(){
	$(".arrow-link").click(function(){

		var nowItem	  = $(this);
		var className = nowItem.attr("class");
		var nowTrItem = nowItem.closest("tr");
//		alert(nowTrItem.children("td:first").prop('outerHTML'));
		
		var categoryId = nowTrItem.children("td.category-name").attr("id").split("_")[1];
		
		var action = "moveup";
		//the top tr item has no prev item
		if("undefined" ===  typeof(nowTrItem.attr("class"))){
				var secondaryCategoryId = nowTrItem.prev().children("td.category-name").attr("id").split("_")[1];
		}

		if(-1 !== className.indexOf("move-down")){
			secondaryCategoryId = nowTrItem.next().children("td.category-name").attr("id").split("_")[1];
			action = "movedown";
		}
		
		var url = window.location.href;
		var urlPrefix = url.match(/http:\/\/[\w.]+\/\w+/);
	
		var ajaxUrl	= urlPrefix+"/admin/blog/moveUpDown";
		alert(action+" "+categoryId+" "+secondaryCategoryId);
		alert(ajaxUrl);
		$.ajax({
			type: "post",
			url:  ajaxUrl,
			data: {"action":action, "categoryId":categoryId, "secondaryId":secondaryCategoryId},
			success: function(data){
				alert("end:"+data);
//				if(-1 !== data.indexOf("success")){
////					window.location.href = window.location.href;
//					var nowfirstChild = nowTrItem.children("td:first");
//					var temp = nowfirstChild.prop("outerHTML");
//					if(-1 !== action.indexOf("moveup")){
//						 nowfirstChild.prop("outerHTML", nowTrItem.prev().children("td:first").prop("outerHTML"));
//						 nowTrItem.prev().children("td:first").prop("outerHTML", temp);	 
//					}else{
//						 nowfirstChild.prop("outerHTML", nowTrItem.next().children("td:first").prop("outerHTML"));
//						 nowTrItem.next().children("td:first").prop("outerHTML", temp);		
//					}
//				}
			},
			error: function(){
				alert("fail");
			}
		});
	});
	
});

/*
 * judge the device is pc or mobile
 */
$.extend({
	isPC: function(){
		 var browserAgent = navigator.userAgent;
		    var mobileAgent = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
		    var flag = true;
		    for(var i=0; i<mobileAgent.length; i++)
		    {
		        if(-1 !== browserAgent.indexOf(mobileAgent[i])){
		            flag = false;
		            break;
		        }
		    }
		    return flag;
	}
});
