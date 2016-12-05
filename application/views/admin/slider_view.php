        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Слайдер</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Позиция</th>
                  <th>Изображение</th>
                  <th>Заголовок</th>
                  <th>Описание</th>
                  <th colspan='2'>Функции</th>
                </tr>
              </thead>
              <tbody>
                <? foreach ($slider as $item):?>
                <tr><td><?=$item['position']?></td>
                                <td><img src="<?=base_url()?>images/slide/<?=$item['img']?>" class='img-responsive img-miniature'></td>
                                <td class='edit-td'><input type="text" class='form-control' value='<?=$item['title']?>'></td>
                                <td class='edit-td'><textarea class='form-control'><?=$item['description']?></textarea></td>
                                <td><i class='glyphicon glyphicon-floppy-disk'></i></td>
                                <td><i class='glyphicon glyphicon-remove'></i></td>
                              </tr>
                <? endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
     