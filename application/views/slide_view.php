 <div id="carousel" class="carousel slide">
        <!--Индикаторы слайдов-->
        <ol class="carousel-indicators">
            <?
                         for($i=0; $i<$slider_num; $i++){
                            echo '<li class="gallery-indicator" data-target="#carousel" data-slide-to="'.$i.'"></li>';
                         }?>
        </ol>
        
        <!--Слайды-->
        <div class="carousel-inner">
            <? foreach ($slider as $item): ?>
            <div class="item gallery-img">
                <img src="images/slide/<?=$item['img'];?>" alt="">
                <div class="carousel-caption">
                    <h3 class='slide-title'><?=$item['title'];?></h3>
                    <p class='slide-description'><?=$item['description'];?></p>
                </div>
            </div>
        <? endforeach; ?>
        </div>

        <!--Стрелки переключения слайдов-->
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="col-lg-12 border-slide"><img class="img-responsive" src="images/border-lide.PNG" alt=""></div>

    <script type="text/javascript">
        $(document).ready(function(){
    $('.gallery-img').eq(0).addClass('active');
    $('.gallery-indicator').eq(0).addClass('active');
});
    </script>