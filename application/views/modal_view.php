      <? foreach ($description as $item):?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?=$item['title']?></h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-lg-3"><img class='img-responsive' src="<?=base_url();?>images/catalog/<?=$item['img']?>" alt=""></div>
      		<div class="col-lg-9"><p><?=$item['description']?></p></div>
      	</div>
        
      </div>
      <? endforeach; ?>