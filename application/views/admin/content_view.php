<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?=base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="container">
       <h1>Админка!</h1>
       <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Заголовок</th>
                <th>Дата изменения</th>
                <th>Статус публикации</th>
                <th>Операции</th>
            </tr>
        </thead>
        <tbody>
            <? foreach($material as $item): ?>
            <tr>
                <td><?=$item['id']; ?></td>
                <td><?=$item['title']; ?></td>
                <td><?=$item['date']; ?></td>
                <td>
                    <?=$item['status'];  if ($item['status'] == 0) {echo 'Опубликовать';} else {echo 'Скрыть';}?>
               </td>
                <td>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-okl" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    
                </td>
            </tr>
       <? endforeach; ?>
        </tbody>
        </table>
       
	    <p>Сгенерировано за <strong>{elapsed_time}</strong> секунд.</p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>

