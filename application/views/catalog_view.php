   <div class="col-lg-12 catalog">
        <h3 class="title-work title-cat">НАШ АССОРТИМЕНТ <SPAN CLASS='green-title'>ПЛАСТИКОВЫХ ОКОН</SPAN></h3>
        <? foreach ($catalog as $item):?>
        <div class="item2 col-lg-4">
				<div class="thumbnail">
					<img src="images/catalog/<?=$item['img']?>" alt="" class="img-responsive">
					<div class="caption">
						<p class="cat-plastic">Пластиковое окно</p>
						<p class="green-title cat-title"><?=$item['title']?></p>
						<a href="#" class="btn-cat-next btn btn-primary" data-toggle="modal" data-id='<?=$item['id']?>' data-target="#myModal">ПОДРОБНЕЕ</a>
					</div>
				</div>
			</div>
			<? endforeach; ?>
			
    </div>

    <div class="modal fade" id='myModal' tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$('.btn-cat-next').click(function(){
		var html = $.ajax({
            type: "POST",
            url: "../catalog/description",
            data: ({
            'id': $(this).data('id'),
            }),
            dataType: "json",
            async: false
        }).responseText;
        $('.modal-content').html(html);
	})
</script>