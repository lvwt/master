<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.modal.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/modal.css'); ?>

    <section class="centerUp">
        <a class="modalLink" href="#modal1"></a>
    </section>

    <div class="overlay"></div>

    <div id="modal1" class="modal">
        <div class="cod" style="font-size:24px;line-height:35px;backendground-color:#333">温馨提示</div>
         <p>你进行查看的文章为会员专享，成为会员可阅读所有文章!</p>
         <hr />
         <p style="text-align:right;"><a href="<?php echo Yii::app()->createUrl('site/purchase')?>" class="a_demo_four" style="color:#fff!important;font-size:16px;">成为会员</a></p>
    </div>

<script>
$(document).ready(function(){

    $('.modaLink').modal({
        trigger: '.modalLink',         
        olay:'div.overlay',             
        modals:'div.modal',             // id or class of modal
        animationEffect: 'slideDown',   // overlay effect | slideDown or fadeIn | default=fadeIn
        animationSpeed: 400,            // speed of overlay in milliseconds | default=400
        moveModalSpeed: 'slow',         // speed of modal movement when window is resized | slow or fast | default=false
        background: 'a2d3cd',           // hexidecimal color code - DONT USE #
        opacity: 0.9,                   // opacity of modal |  0 - 1 | default = 0.8
        openOnLoad: false,              // open modal on page load | true or false | default=false
        docClose: false,                 // click document to close | true or false | default=true    
        closeByEscape:false,            // close modal by escape key | true or false | default=true
        moveOnScroll: true,             // move modal when window is scrolled | true or false | default=false
        resizeWindow: true,             // move modal when window is resized | true or false | default=false
        videoClass:'video',             // class of video element(s)
        close:'.closeBtn'               // id or class of close button
    });
    $(".modalLink").click();
    
});
</script>