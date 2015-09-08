<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, userscalable=no">
<title>博文管理</title>
<link rel="stylesheet" href="/bingolife/Public/css/passage.css" style="text/css" />
</head>
<body>
<div class="whole-wrapper">
	<link rel="stylesheet" href="/bingolife/Public/css/bootstrap.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/font-awesome.min.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/admin/common.css" style="text/css" />
<script src="/bingolife/Public/js/jquery-1.11.1.js"></script>
<script src="/bingolife/Public/js/angular.min.js"></script>
<nav class="water-middle-bg navbar navbar-fixed-top" role="navigation">
<div class="row">
	<div class="brand-box water-deep-bg col-xs-12 col-lg-2">
		<a class="navbar-brand">ThinkPHP</a>
	</div>
	<div class="nav-wrapper col-xs-12 col-lg-10">
		<ul class="nav navbar-nav">
		  <li class="li-icon-navigation"><a href="javascript:void(0);" ><em class="fa icon-align-justify"></em></a></li>
                <li class="li-icon-category"><a href="javascript:void(0);"><em class="fa icon-cog"></em></a></li>
                <li><a href="javascript:void(0);" data-toggle="navbar-search">
                   <em class="fa icon-cog"></em>
                </a></li>
		</ul>
		<ul class="nav navbar-nav">
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
	<meta charset="utf-8">
<aside class="aside hidden-xs">
	<nav class="sidebar">
		<ul>
            <dl class="list-unstyled list-group">
            	<dt>心得体会</dt>
            	<dd class="list-group-item"><a href="../Blog/passagelist.html" target="_self">所有文章</a></dd>
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
            </ul>
    </nav>
</aside>	
	<script src="/bingolife/Public/js/jquery.common.js"></script>
	<script src="/bingolife/Public/js/passagelist.js"></script>
	<section id="main_content" class="main-content">
		<div class="wrapper-category-list hidden-xs hidden-lg">
			<ul class="nav-category list-group">
				<?php if(is_array($categoryList)): foreach($categoryList as $categoryIndex=>$categoryItem): ?><li class="list-group-item list-category-name">
						<a id="categoryId_<?php echo ($categoryItem["category_id"]); ?>" href="/bingolife/admin.php/blog/passageList?categoryid=<?php echo ($categoryItem["category_id"]); ?>"><?php echo ($categoryItem["category_name"]); ?></a>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<div class="wrapper-passage-list">
			<div class="col-xs-12 top-passage-list">
				<a href="javascript:void(0)" class="col-lg-1 col-xs-1 a-icon-category"><em class="fa icon-cog"></em></a>
				<span class="col-xs-8 col-lg-6"><label>分类:</label>&nbsp;<?php echo ($categoryName); ?></span>
				<a class="col-xs-3 col-lg-2 btn btn-success text-center" href="/bingolife/admin.php/blog/sendPassage" target="_self">发博文</a>		
			</div>
			<div class="hidden-lg col-xs-12">
				<?php if(is_array($passageList)): foreach($passageList as $passageId=>$passageItem): ?><div id="passage_<?php echo ($passageItem["passage_id"]); ?>" class="wrapper-passage-list-item">
					<div class="top-passage-list-item">
						<span class="col-xs-6"><?php echo (substr($passageItem["update_at"],0,16)); ?></span>
						<span class="col-xs-3 text-center"><?php echo ($passageItem["week_day"]); ?></span>
						<span class="col-xs-2 text-center"><?php echo ($passageItem["weather"]); ?></span>
						<span class="fa icon-remove-sign col-xs-1"></span>
					</div>
					<div class="midone-passage-list-item">
						<div class="wrapper-title">
							<span class="col-xs-8"><a href="/bingolife/home.php/blog/detail/passage/<?php echo ($passageItem["passage_id"]); ?>"><?php echo ($passageItem["title"]); ?></a></span>
							<span class="fa icon-edit col-xs-2"></span>
						</div>
						<ul class="list-group">
							<li class="list-group-item col-xs-4 text-center"><span>置顶</span></li>
							<li class="list-group-item col-xs-4 text-center"><span>评论</span>
							<li class="list-group-item col-xs-4 text-center"><span>修改</span></li>
						</ul>
					</div>
				</div><?php endforeach; endif; ?>
			</div>
			<table class="table hidden-xs">
				<thead>
					<tr><th class="col-lg-4 align-left">标题</th>
						<th class="col-lg-1 text-center">阅读</th><th class="col-lg-1">评论</th>
						<th class="col-lg-1 align-center">评论权限</th><th class="col-lg-4">操作</th>
				</thead>
				<tbody>
					<?php if(is_array($passageList)): foreach($passageList as $passageId=>$passageItem): ?><tr><td><a target="_blank" href="/bingolife/home.php/blog/detail/passage/<?php echo ($passageItem["passage_id"]); ?>"><?php echo ($passageItem["title"]); ?></a>(<?php echo (substr($passageItem["update_at"],0,16)); ?>)</td>
							<td></td>
							<td><?php echo ($passageItem["visibility"]); ?></td>
							<td><?php if($passageItem["is_support_comment"] == 1): ?>禁止评论
								<?php else: ?>允许评论<?php endif; ?></td>
							<td>
								<a href="">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
								<?php if($passageItem["is_top"] == 1): ?><a href="/bingolife/admin.php/blog/cancelTop/category/<?php echo ($categoryId); ?>/passage/<?php echo ($passageItem["passage_id"]); ?>" class="">取消置顶</a>
								<?php else: ?><a href="/bingolife/admin.php/blog/toTop/category/<?php echo ($categoryId); ?>/passage/<?php echo ($passageItem["passage_id"]); ?>">置顶</a><?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="delete" href="/bingolife/admin.php/blog/removePassage/category/<?php echo ($categoryId); ?>/passage/<?php echo ($passageItem["passage_id"]); ?>">删除</a>
							</td></tr><?php endforeach; endif; ?>
				</tbody>
			</table>
		</div>
		
	</section>
	<script>
		$(".a-icon-category").click(function(){
			$(".wrapper-category-list").toggleClass("hidden-xs hidden-lg");
			$("body").toggleClass("toggle-category-list");
		});
		
		$(".delete").click(function(){
			alert("hhhh");
			return false;
		});
	</script>
</div>
</body>
</html>