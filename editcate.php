<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Categories &laquo; Admin</title>
  <link rel="stylesheet" href="/alishow/pages/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/alishow/pages/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/alishow/pages/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="/alishow/pages/assets/css/admin.css">
  <script src="/alishow/pages/assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
    <nav class="navbar">
      <button class="btn btn-default navbar-btn fa fa-bars"></button>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.html"><i class="fa fa-user"></i>个人中心</a></li>
        <li><a href="login.html"><i class="fa fa-sign-out"></i>退出</a></li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="page-title">
        <h1>分类目录</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <!-- <div class="alert alert-danger">
        <strong>错误！</strong>发生XXX错误
      </div> -->
      <div class="row">
        <div class="col-md-4">
          <form action="addcate_deal.php" method="post">
            <h2>添加新分类目录</h2>
            <div class="form-group">
              <label for="name">名称</label>
              <input id="name" class="form-control" name="name" type="text" placeholder="分类名称">
            </div>
            <div class="form-group">
              <label for="slug">别名</label>
              <input id="slug" class="form-control" name="slug" type="text" placeholder="slug">
              <!-- <p class="help-block">https://zce.me/category/<strong>slug</strong></p> -->
            </div>
            <div class="form-group">
              <label for="slug">图标</label>
              <input id="slug" class="form-control" name="icon" type="text" placeholder="slug">
            </div>
            <div class="form-group">
              <label for="slug">分类状态</label>
              <input id="slug" name="status" type="radio" value="1">启用
              <input id="slug" name="status" type="radio" value="2">禁用
            </div>
            <div class="form-group">
              <label for="slug">是否显示</label>
              <input id="slug" name="show" type="radio" value="1">显示
              <input id="slug" name="show" type="radio" value="2">不显示
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">添加</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <div class="aside">
    
      <li>
        <a href="comments.html"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li>
        <a href="users.html"><i class="fa fa-users"></i>用户</a>
      </li>
      <li>
        <a href="#menu-settings" class="collapsed" data-toggle="collapse">
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-settings" class="collapse">
          <li><a href="nav-menus.html">导航菜单</a></li>
          <li><a href="slides.html">图片轮播</a></li>
          <li><a href="settings.html">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="aside">
    <?php include_once '../include/aside.php' ?>
  </div>
  <script src="/alishow/pages/assets/vendors/jquery/jquery.js"></script>
  <script src="/alishow/pages/assets/vendors/bootstrap/js/bootstrap.js"></script>
  <script>NProgress.done()</script>
</body>
</html>
