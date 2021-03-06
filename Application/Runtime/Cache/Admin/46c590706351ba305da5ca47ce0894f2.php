<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
<title>发博文</title>
</head>
<body>
<div class="whole-wrapper">
	<link rel="stylesheet" href="/bingolife/Public/css/bootstrap.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/font-awesome.min.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/admin/common.css" style="text/css" />
<script src="/bingolife/Public/js/jquery-1.11.1.js"></script>
<script src="/bingolife/Public/js/angular.min.js"></script>
<nav class="navbar navbar-fixed-top" role="navigation">
<div class="row">
	<div class="brand-box water-deep-bg col-xs-12 col-lg-2">
		<a class="navbar-brand">ThinkPHP</a>
	</div>
	<div class="nav-wrapper col-xs-12 col-lg-10">
		<ul class="nav navbar-nav nav-one">
		  <li class="li-icon-navigation"><a href="javascript:void(0);" ><em class="fa icon-align-justify"></em></a></li>
                <li class="li-icon-category"><a href="javascript:void(0);"><em class="fa icon-cog"></em></a></li>
                <li><a href="javascript:void(0);" data-toggle="navbar-search">
                   <em class="fa icon-cog"></em>
                </a></li>
		</ul>
		<ul class="nav navbar-nav nav-two">
			<li><a href="javascript:void(0);" data-toggle="navbar-search">
                   <em class="fa fa-search">R</em>
                </a></li>
                <li><a href="javascript:void(0);" data-toggle="navbar-search">
                   <em class="fa fa-search">S</em>
                </a></li>
                <li><a href="javascript:void(0);" data-toggle="navbar-search">
                   <em class="fa fa-search">T</em>
                </a></li>
		</ul>
	</div>
</div>
</nav>

<script>
    //$("body").css("width", deviceWidth);

        $(document).on("click", ".li-icon-navigation", function(){
            var item = $("body");
//            var className = item.attr("class");
            item.toggleClass("aside-toggle");
           	$(".nav-menu").toggleClass("hidden-xs");
        });

        $("body").bind("swiperight swipeleft", function(){
		alert("haha");
        var item = $(this);
        item.toggleClass("aside-toggle");
        $(".nav-menu").toggleClass("hidden-xs");
    });




</script>
	<script src="/bingolife/Public/js/jquery.common.js""></script>
	<script src="/bingolife/Public/js/bootstrap.js"></script>
	<script src="/bingolife/Public/js/bootstrap-switch.js""></script>
	<script src="/bingolife/Public/js/bootstrap-multiselect.js""></script>
	<meta charset="utf-8">
<aside class="aside hidden-xs">
	<nav class="sidebar">
            <dl class="list-unstyled list-group">
            	<dt class="list-group-item">心得体会</dt>
            	<dd class="list-group-item"><a href="<?php echo U('Admin/Blog/passageList');?>" target="_self">所有文章</a></dd>
                <dd class="list-group-item"><a href="../Blog/sendpassage.html" target="_self">新增文章</a></dd>
                <dd class="list-group-item"><a href="../Blog/category.html" target="_self">分类管理</a></dd>
                <dd class="list-group-item"><a href="../Job/period.html" target="_self">工作阶段</a></dd>
            </dl>
            <dl class="list-unstyled list-group">
            	<dt>衣食住行</dt>
                <dd class="list-group-item"><a href="../Blog/category.html" target="_self"></a></dd>
            </dl>  
             
                <dd class="list-group-item">
                    环球财经
                </dd>
                <dd class="list-group-item">
                    天气预报
                </dd>
                <dd class="list-group-item">
                    房产家居
                </dd>
                <dd class="list-group-item">
                    网络游戏
                </dd>a
                <dd class="list-group-item">
                    网络游戏
                </dd>
                <dd class="list-group-item">
                网络游戏
            </dd>  <dd class="list-group-item">
                网络游戏
            </dd>
                <dd class="list-group-item">
                网络游戏
            </dd>
                <dd class="list-group-item">
                    网络游戏
                </dd>
                <dd class="list-group-item">
                    网络游戏
                </dd>
                <dd class="list-group-item">
                    网络游戏
                </dd>
    </nav>
</aside>
	<aside>
	</aside>
	<link rel="stylesheet" href="/bingolife/Public/css/bootstrap-switch.css" />
	<link rel="stylesheet" href="/bingolife/Public/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="/bingolife/Public/css/kindeditor/default/default.css" />
	<link rel="stylesheet" href="/bingolife/Public/css/passage.css" />
	<script src="/bingolife/Public/js/kindeditor/kindeditor.js"></script>
	<script src="/bingolife/Public/js/kindeditor/lang/zh_CN.js"></script>
	<section class="main-content">
		<form role="form" class="form-horizontal form-sendpassage"  action="/bingolife/admin.php/blog/releasePassage"
			method="post" target="_self">
			<input type="hidden" name="keyword" />
			<div class="row">
				<div class="col-xs-12 col-lg-8 top-passages-style">
					<div class="form-group col-xs-12 col-lg-4 hidden-lg box-passage-style">	
						<select class="form-control" name="passage_style">
							<option value="O">原创</option>
							<option value="R">转载</option>
							<option value="T">翻译</option>
						</select>
					</div>		
					<div id="passageTitle" class="form-item input-group col-xs-12 col-lg-12">
						<span class="input-group-addon hidden-xs">
							<select name="passage_style">
								<option value="O">原创</option>
								<option value="R">转载</option>
								<option value="T">翻译</option>
							</select>
						</span>	
						<input class="form-control required" name="title" placeholder="请填写博文标题" maxlength=20 />
						<span class="input-group-addon"><span class="fa icon-remove"></span></span>							
					</div>
					
					<div class="form-group form-item">
						<textarea id="passageEditor" name="content" class="form-control" style="height:400px;" placeholder="请撰写博文内容"></textarea>
					</div>
				</div>
				<div class="col-xs-12 col-lg-4 top-passages-style column-form-option-outer">
					<div class="column-form-option-inner col-xs-12 col-lg-12">
					<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<select class="form-control" name="category_id">
							<option value="0">请选择博文类别</option>
							<?php if(is_array($categoryList)): foreach($categoryList as $key=>$categoryItem): ?><option value="<?php echo ($categoryItem["category_id"]); ?>"><?php echo ($categoryItem["category_name"]); ?></option><?php endforeach; endif; ?>
						</select>
						<span class="input-group-addon hint-danger hidden hidden-xs"><span>请选择博文类别</span></span>	
					</div>		
					<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<select class="form-control" name="weather">
							<option value="0">请选择当时天气</option>
							<option value="sunny">阳光明媚</option>
							<option value="cloudy">惬意阴天</option>
							<option value="windy">微风阵阵</option>
							<option value="gale">狂风怒号</option>
							<option value="rainy">细雨蒙蒙</option>
							<option value="storm">倾盆大雨</option>
							<option value="snowy">雪花飘飘</option>
						</select>
						<span class="input-group-addon hint-danger hidden hidden-xs"><span>请选择当时天气</span></span>	
					</div>
					<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label class="col-xs-6 col-sm-6 col-md-6 col-lg-6 label-spend-time">文章撰写时长</label>
						<input type="text" class="col-xs-6 col-lg-6 col-sm-5 input-spend-time form-control" name="spend_time" maxlength="10" />
						<span class="hint-danger hidden hidden-xs"><span>请填写文章用时</span></span>	
					</div>
		
					<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label class="label-switch col-xs-6 col-sm-6 col-md-6 col-lg-6">是否允许评论</label>
						<input type="checkbox" class="cb-is-support-comment col-xs-6 col-sm-6 col-md-6 col-lg-6 form-control" name="is_support_comment" data-label-width="50px"
							data-on-color="success" data-off-color="danger" data-on-text="是" data-off-text="否" checked>
					</div>
					<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label class="label-switch  col-xs-6 col-sm-6 col-md-6 col-lg-6">是否存为草稿</label>
						<input type="checkbox" class="cb-is-draft col-xs-6 col-sm-6 col-md-6 col-lg-6 form-control" name="passageDraft" data-on-text="是" data-off-text="否"
						data-on-color="success" data-off-color="danger" data-label-width="50px" checked>
					</div>
				</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-lg-8">
					<div class="row form-item">
						<label class="label-dropdown-multiselect col-xs-12 col-lg-4">你的文章谁可见</label>
						<div class="box-passage-visible btn-group col-xs-12 col-lg-8">
							<select class="multiselect-visibility form-control"  name="visibility" multiple="multiple">
								<option value="1">家人</option>
								<option value="2">朋友</option>
								<option value="3">亲戚</option>
								<option value="4">同学</option>
								<option value="5">熟人</option>
								<option value="6">公开</option>
								<option value="7">私人</option>
							</select>
							<button class="multiselect-toggle btn btn-primary">全选</button>		
						</div>
					</div>	
					<div class="row form-item">
						<label class="col-xs-12 col-lg-4 label-keyword">文章关键字</label>
						<div class="col-xs-12 col-lg-8" >
							<input type="text" class="col-xs-12 col-lg-4" id="input-passage-keyword" placeholder="请输入文章关键字"/>
						</div>
					</div>		
				</div>
				<div class="col-xs-12 col-lg-4">
					<div class="form-group col-lg-12 col-xs-12 col-sm-10 col-xs-zhai bottom-sendpassage">
						<button class="btn btn-default col-xs-4 col-sm-3 col-lg-3 cancel-sendpassage">取消</button>
						<button class="btn btn-info col-xs-4 col-sm-3 col-lg-3 save-sendpassage">保存</button>
						<button class="btn btn-success col-xs-4 col-sm-3 col-lg-3 sure-sendpassage" type="submit">发表</button>
					</div>
				</div>	
			</div>
			
			
			
	
		</form>
	</section>
	<script>
		KindEditor.ready(function(K){
			//remove 
			var options = {
					items:[
					        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
					        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
					        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
					        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
					        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
					        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
					        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
					        'anchor', 'link', 'unlink', '|', 'about'
					],
					uploadJson : '/bingolife/Public/js/kindeditor/php/upload_json.php',
					fileManagerJson : '/bingolife/Public/js/kindeditor/php/file_manager_json.php',
					allowFileManager : true,
					afterCreate : function() {
						console.log(K('form[name=imgFile]'));
						var self = this;
						K.ctrl(document, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
						K.ctrl(self.edit.doc, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
					}
			};
			var deviceWidth = document.body.clientWidth;
			window.editor = K.create("#passageEditor", options);
			if($.isPC()){
				$(".ke-container").css('width', deviceWidth*0.52);
			}else{
				$(".ke-container").css('width', deviceWidth*0.93);
			}
		});
		
		$(".cb-is-support-comment, .cb-is-draft").bootstrapSwitch();
		$('.cb-is-support-comment, .cb-is-draft').on('switchChange.bootstrapSwitch', function(event, state) {
			//$(this).prop("checked", state);
		});
		   
		  /**
		   * Selects all the options
		   * @param {jQuery} $el
		   * @returns {undefined}
		   */
		  function multiselect_selectAll($el) {
		    $('option', $el).each(function(element) {
		      $el.multiselect('select', $(this).val());
		    });
		  }
		  /**
		   * Deselects all the options
		   * @param {jQuery} $el
		   * @returns {undefined}
		   */
		  function multiselect_deselectAll($el) {
		    $('option', $el).each(function(element) {
		      $el.multiselect('deselect', $(this).val());
		    });
		  }
		   
		  /**
		   * Clears all the selected options
		   * @param {jQuery} $el
		   * @returns {undefined}
		   */
		  function multiselect_toggle($el, $btn) {
			   if($el.hasClass("all-selected")){
				   multiselect_deselectAll($el);
				   $el.toggleClass("all-selected");
				      $btn.text("全选");
			   }else{
				   multiselect_selectAll($el);
				   $el.toggleClass("all-selected");
				   $btn.text("撤消"); 
			   }
		  }
		  //get all the keyword and join them with comma
		  function getKeywordText(obj)
		  {
			  var wholeKeyword = "";
			  obj.each(function(){
				  wholeKeyword += $(this).children("span").text()+",";
			  });
			  wholeKeyword = wholeKeyword.substring(0, wholeKeyword.length-1);
			  return wholeKeyword;
		  }
		  
		  $(document).ready(function() {
		    $('.multiselect-visibility').multiselect({numberDisplayed:7});
		    $(".multiselect-toggle").click(function(e) {
		      e.preventDefault();
		      multiselect_toggle($(".multiselect-visibility"), $(this));
		    });
		    
		    if($.isPC()){
		    	$("#input-passage-keyword").keyup(function(){
			    	var item = $(this);
			    	var keywordItem = $("input[name='keyword']");
			    	var keywordText = item.val().replace(/[\s,，]+/g, ""); //remove the spaces and comma in the string
			    	if(item.val().indexOf(" ") > -1 && "" != keywordText){
			    		var str="<div class='passage-tag'><span>"+keywordText+"</span><a class='close'>×</a></div>";
			    		item.val("");
			    		if("" !== keywordItem.val()){
			    			keywordItem.val(keywordItem.val()+","+keywordText);
			    		}else{
			    			keywordItem.val(keywordText);
			    		}
			    		item.before(str);
			    	}
			    });
		    }else{
		    	$("#input-passage-keyword").focus(function(){
			    	var item = $(this);
			    	item.val("");
			    });
		    	
		    	$("#input-passage-keyword").blur(function(){
		    		var item = $(this);
		    		var normalText = item.val().replace(/[\s,，]+/g, ""); 
		    		var keywordItem = $("input[name='keyword']");
		    		if("" !== normalText ){
		    			var str="<div class='passage-tag'><span>"+normalText+"</span><a class='close'>×</a></div>";
		    			if("" !== keywordItem.val()){
			    			keywordItem.val(keywordItem.val()+","+normalText);
			    		}else{
			    			keywordItem.val(normalText);
			    		}
			    		item.val("");
			    		item.before(str);
		    		}		    		
		    	});	
		    }	
		    
		    $(".form-sendpassage").submit(function(event){
		    	
		    	//validate the form
		    	var formFlag = true;
		    	$("form input,form select, form textarea").each(function(){
		    		var nowItem = $(this);
		    		var normalText = nowItem.val();
		    		
		    		if(0 == normalText || "" == normalText){
		    			if("undefined" !== typeof(nowItem.attr("name"))){
		    				console.log(nowItem);
							nowItem.nextAll(".hint-danger").removeClass("hidden");
							formFlag = false;
		    			}
		    		}else{
		    			nowItem.nextAll(".hint-danger").addClass("hidden");  //if not empty,then hidden the hint
		    		}
		    	});
		    	if(!formFlag){
	    			event.preventDefault();
		    	}
		    });
		  });
		  
		  //remove a certain keyword
		    $(document).on("click", ".close", function(){
		    	var item = $(this);
	    		item.closest(".passage-tag").remove();
	    		var wholeKeyword = getKeywordText($(".passage-tag"));
	    		$("input[name='keyword']").val(wholeKeyword);
		    });
	</script>
	
</div>
</body>
</html>