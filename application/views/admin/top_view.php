
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Панель управления</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/admin.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>admin">Панель  администратора</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a target='_blank' href="<?=base_url();?>">На сайт</a></li>
            <li><a href="#">Помощь</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <h3>Базовые параметры</h3>
          <ul class="nav nav-sidebar">
            <li><a href="<?=base_url()?>admin/base_setting">Основные настройки</a></li>
            <li><a href="<?=base_url()?>admin/slider">Слайдер</a></li>
            <li><a href="#">Наши работы</a></li>
            <li><a href="#">Редактор отзывов</a></li>
          </ul>
          <h3>Каталог</h3>
          <ul class="nav nav-sidebar">
            <li><a href="">Все элементы</a></li>
            <li><a href="">Добавить элемент</a></li>
          </ul>
          <h3>Заявки</h3>
          <ul class="nav nav-sidebar">
            <li><a href="">Новые</a></li>
            <li><a href="">Архив</a></li>
          </ul>
        </div>