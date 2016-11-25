    <div class="container-fluid">
        <div class="row">
            <div class="container navigation">
                <div class="col-lg-2">
                    <div class="col-lg-6"><a href="<?=base_url();?>"><img src="<?=base_url();?>images/logo.PNG" class="img-responsive" alt=""></a></div>
                    <div class="col-lg-6 title-logo"><span class="blue-title-logo">НАЗВАНИЕ</span><br> КОМПАНИИ</div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav">
                        <? foreach ($navigation as $item):?>
                        <li class="nav-item"><a href="<?=base_url().$item['controller']?>"><?=$item['title']?></a></li>
                        
                    <? endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="dop-text">Работаем ежедневно с 9:00 до 18:00</div>
                    <div class="dop-text2">Заказать звонок</div>
                    <div class="dop-text3">+7 (495) 123 72-97</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">