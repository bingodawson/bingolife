<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, userscalable=no">
<title>博文管理</title>
<link rel="stylesheet" href="/bingolife/Public/css/admin/common.css" style="text/css" />
<link rel="stylesheet" href="/bingolife/Public/css/admin/passage.css" style="text/css" />
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
	<script src="/bingolife/Public/js/jquery.common.js"></script>
	<script src="/bingolife/Public/js/passagelist.js"></script>
	<section id="main_content" class="main-content">
		<div class="row passagelist-row-1">
			<div class="col-xs-12 col-lg-6 passagelist-row-1-1">
				<span class="h3">所有在线文章</span>&nbsp;&nbsp;
				<a href="<?php echo U('Admin/Blog/sendPassage');?>" target="_blank" class="btn water-top-bg hidden-xs">写文章</a>
			</div>
			<div class="col-xs-12 col-lg-6 passagelist-row-1-2">
				<div class="row">
					<div class="input-passage-title col-xs-8 col-lg-8">
						<input type="text" class="form-control" placeholder="请输入文章标题"/>
					</div>
					<div class="btnwrapper-search col-xs-4 col-lg-4"><button class="btn water-top-bg">搜索文章</button></div>
				</div>
			</div>
		</div>
		<div class="row passagelist-row-2" style="height:50px; background:silver;">
		</div>
		<div class="row passagelist-row-3">			
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