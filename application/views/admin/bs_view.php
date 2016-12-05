        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Основные настройки сайта</h1>

          <div class="row placeholders">
            <div class="col-lg-6">
            
            <form action="" method='post' class='form-horizontal' role='form'>
              <? foreach ($general as $item): ?>
                <div class="form-group">
    <label for="<?=$item['parametr']?>" class="col-sm-3 control-label"><?=$item['rus_par']?></label>
    <div class="col-sm-9">
      <input type="text" value='<?=$item['value']?>' name='<?=$item['parametr']?>' class="form-control" id="<?=$item['parametr']?>" >
    </div>
  </div>
              <? endforeach; ?>
              <input type="submit" name='save' class='btn btn-primary' value='Сохранить'>
            </form>
            </div>
            <div class="col-lg-1">
               <? if($update): ?>
                <div class="alert alert-success">Сохранено</div>             
              <? endif;?>
            </div>
          </div>
        </div>
  
        <script>
        $(document).ready(function() {
          $('.alert').fadeOut(3000);
        })
        </script>
     