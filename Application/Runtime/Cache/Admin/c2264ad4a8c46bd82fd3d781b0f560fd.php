<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=divice-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>分类管理</title>
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
		 <div class="add-category col-xs-12 col-lg-12">
		 	<div class="add-category-row-1 col-xs-12 col-lg-12">
		 		<span class="h3">分类列表管理</span>&nbsp;&nbsp;
		 		<a href="<?php echo U('Admin/Blog/editCategory');?>" target="_blank" class="btn water-top-bg">新增</a>
		 	</div>
            <form class="form-horizontal form-category" role="form" method="post" target="_self"
                  action="/bingolife/index.php/admin/blog/addCategory" name="categoryForm" novalidate>
                <div class="form-group">                  
                    <div class="col-xs-8 col-lg-6">
                        <input type="text" class="form-control" id="categoryName"
                               name="category_name" ng-model="categoryName" placeholder="请输入新分类名称" required maxlength=20 />
                    </div>
                    <button type="submit" class="col-xs-4 col-lg-2 btn water-top-bg">保存</button>
                </div>
            </form>
        </div>
        <div class="category-list col-xs-12 col-lg-12">
        	 <table class="table table-hover">
	            <thead>
	                <tr><th class="col-xs-6 col-lg-2">分类名称</th>
	                    <th class="col-xs-2 col-lg-2 text-center hidden-xs">文章数</th>
	                    <th class="col-xs-4 col-lg-2">上移/下移</th>
	                    <th class="col-xs-1 col-lg-2 hidden-xs"></th>
	                    <th class="col-xs-1 col-lg-2 hidden-xs"></th>
	                    <th class="col-xs-2 col-lg-2"></th>
	                </tr>
	            </thead>
	            <tbody>
	                <?php if(is_array($categoryList)): foreach($categoryList as $key=>$item): ?><tr <?php if($item["position"] == $topPosition): ?>class="tr-top"<?php endif; ?> >
	                        <td id="categoryid_<?php echo ($item["category_id"]); ?>" class="category-name"><?php echo ($item["category_name"]); ?></td>
	                        <td class="text-center hidden-xs"><?php echo ($item["blog_num"]); ?></td>
	                        <td><?php if($item["position"] == $topPosition): ?><a href="" class="move-down arrow-link"><img src="/bingolife/Public/img/admin/down-arrow.png" /></a>
	                        	<?php elseif($item["position"] == $footPosition): ?>
	                        		<a href="" class="move-up arrow-link"><img src="/bingolife/Public/img/admin/up-arrow.png" /></a>
	                        	<?php else: ?>
	                        		<a href="" class="move-up arrow-link"><img src="/bingolife/Public/img/admin/up-arrow.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
	                        		<a href="" class="move-down arrow-link"><img src="/bingolife/Public/img/admin/down-arrow.png" /></a><?php endif; ?>
	                        </td>
	                        <td class="hidden-xs"><?php if($item["is_visible"] == 1): ?>隐藏
	                        	<?php else: ?>显示<?php endif; ?>
	                        </td>
	                        <td class="hidden-xs"><?php if($item["is_enable"] == 1): ?>禁用
	                        	<?php else: ?>启用<?php endif; ?>
	                        </td>
	                        <td><a href="/bingolife/Admin/Blog/editCategory/category/<?php echo ($item["category_id"]); ?>" target="_self"><em class="fa icon-edit"></em></a>
	                    </tr><?php endforeach; endif; ?>
	            </tbody>
        	</table>
        </div>
	</section>
</div>
</body>
</html>