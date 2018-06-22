<?php
/* @var $this yii\web\View */
?>
<div class="kartochki">
    <div class="row">
        <? foreach ($alphabet as $key=>$value) {?>
            <div class="col-md-2">
                <div class="bg1" data-id="<?=$key+1?>">
                    <div class="bg_item">
                        <?=$value->letter?>
                    </div>
                </div>
                <div class="bg2" data-id="<?=$key+1?>">
                    <div class="bg_item">
                        <img src="<?=$value->imgURL?>" alt="">
                        <div class="latyn">
                            <?=$value->description?>
                        </div>
                        <audio controls controlsList="nodownload">
                            <source src="<?=$value->audioURL?>">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>
        <? } ?>


    </div>
</div>
</div>
<script>

    var lastId;
    $("body").on("click", ".bg1", function() {
        var id = $(this).data("id");
        if (lastId == id) {
            $('.bg1[data-id='+lastId+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                $('.bg2[data-id='+lastId+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
            });
        } else {
            $('.bg2[data-id='+lastId+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                $('.bg1[data-id='+lastId+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
                $('.bg1[data-id='+id+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                    $('.bg2[data-id='+id+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
                    lastId = id;
                });
            });
        }
    });
    $("body").on("click", ".bg2", function() {
        var id = $(this).data("id");
        $('.bg2[data-id='+id+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
            $('.bg1[data-id='+id+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
        });
    });

</script>
