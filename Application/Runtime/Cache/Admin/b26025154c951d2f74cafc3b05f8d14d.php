<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=divice-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>分类管理</title>
<link rel="stylesheet" href="/bingolife/Public/css/bootstrap-switch.css" />
<link rel="stylesheet" href="/bingolife/Public/css/admin/category.css" style="text/css" />
</head>
<body>
<div class="whole-wrapper">
	<link rel="stylesheet" href="/bingolife/Public/css/bootstrap.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/font-awesome.min.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/admin/common.css" style="text/css" />
<script src="/bingolife/Public/js/jquery-1.11.1.js"></script>
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
           	$(".navigation-menu").toggleClass("hidden-xs");
        });

        $("body").bind("swiperight swipeleft", function(){
		alert("haha");
        var item = $(this);
        item.toggleClass("aside-toggle");
        $(".nav-menu").toggleClass("hidden-xs");
    });




</script>
	<script src="/bingolife/Public/js/admin.js""></script>
	<script src="/bingolife/Public/js/bootstrap-switch.js""></script>
	<meta charset="utf-8">
<aside class="aside hidden-xs navigation-menu">
	<nav class="sidebar">
            <dl class="list-unstyled list-group">
            	<dt class="list-group-item">心得体会</dt>
            	<dd class="list-group-item hidden-xs"><a href="<?php echo U('Admin/Blog/passageList');?>" target="_self">所有文章</a></dd>
            	<dd class="list-group-item hidden-lg"><a href="<?php echo U('Admin/Blog/passageListMobi');?>" target="_self">所有文章</a></dd>
                <dd class="list-group-item hidden-xs"><a href="<?php echo U('Admin/Blog/sendPassage');?>" target="_self">新增文章</a></dd>
                <dd class="list-group-item"><a href="<?php echo U('Admin/Blog/category');?>" target="_self">分类管理</a></dd>
                <dd class="list-group-item"><a href="../Job/period.html" target="_self">心情说说</a></dd>
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
	<aside></aside>
	<section class="main-content">
		 <div class="edit-category col-xs-12 col-lg-12">
		 	<div class="edit-category-title col-xs-12 col-lg-12">
		 		<span class="h3">编辑分类目录</span>&nbsp;&nbsp;
		 	</div>
            <form class="form-horizontal form-category" role="form" method="post" target="_self" class="row"
                  action="/bingolife/index.php/admin/blog/saveCategory" name="categoryForm" novalidate>
                <input type="hidden" name="category_id" value="<?php echo ($categoryId); ?>" />
                <div class="form-group">
                	<label id="category_name" class="col-xs-4 col-lg-2">分类名称</label>
                	<div class="col-lg-6">
                		  <input type="text" class="form-control" id="categoryName" value="<?php echo ($categoryName); ?>" class="col-xs-10 col-lg-6"
                              name="category_name"  placeholder="请输入新分类名称" required maxlength=20 />
                	</div>
                    <span class="col-xs-12 col-lg-12">(说明：该分类名称仅供后台显示)</span>
               	</div>
               	<div class="form-group">
                	<label id="display_name" class="col-xs-4 col-lg-2">分类别名</label>
                	<div class="col-lg-6">
                		  <input type="text" class="form-control" id="categoryName" value="<?php echo ($displayName); ?>" class="col-xs-10 col-lg-6"
                              name="display_name" placeholder="请输入新分类别名" required maxlength=20 />
                	</div>
                    <span class="col-xs-12 col-lg-12">(说明：该分类名称显示在前台主页，用户可自行定义)</span>
               	</div>
               	<div class="form-group">
               		<label id="is_enable" class="col-xs-4 col-lg-2">是否禁用</label>
               		<div class="col-xs-6 col-lg-6">
               			<input type="checkbox" class="cb-category-disable col-xs-6 col-sm-6 col-md-6 col-lg-6 form-control" name="is_enable" data-label-width="50px"
							data-on-color="success" data-off-color="danger" data-on-text="是" data-off-text="否" 
							<?php if($isEnable == 0): ?>checked <?php else: ?> unchecked<?php endif; ?> />
               		</div>
                </div>
               	<div class="form-group">
               		<div class="col-xs-12 col-lg-8">
               			<button type="submit" class="btn btn-category-save water-top-bg col-xs-12">保存</button>
               		</div>
                </div>
                <script>
                	$(".cb-category-disable").bootstrapSwitch();
                </script>
            </form>
        </div>      
	</section>
</div>
</body>
</html>