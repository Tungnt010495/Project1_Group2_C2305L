<br><br><br><br>
<style>
    .video-container {
        max-width: 100%;
        height: 400px;
    }
</style>
<div class="container text-center">
    <div class="row">
        <div class="col-6 video-container">
        <?php
             $videoPath = 'image/slider/video5.mp4';
        ?>
        <video id="myVideo" muted style="height: 400px" autoplay>
                <source  src="<?php echo $videoPath; ?>" type="video/mp4">
            </video>
        </div>
        <div class="col-6">
            <div class="box-send-contact">
                <h2>Gửi thắc mắc cho chúng tôi</h2>
                <div id="col-left contactFormWrapper">
                    <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
                        <input name="form_type" type="hidden" value="contact">
                        <input name="utf8" type="hidden" value="✓">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 mt-3">
                                    <div class="input-group">
                                        <input required="" type="text" name="contact[name]" class="form-control"
                                            placeholder="Tên của bạn" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 mt-3">
                                    <div class="input-group">
                                        <input required="" type="text" name="contact[email]" class="form-control"
                                            placeholder="Email của bạn" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 mt-3">
                                    <div class="input-group">
                                        <input pattern="[0-9]{10,12}" required="" type="text" name="contact[phone]"
                                            class="form-control" placeholder="Số điện thoại của bạn"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 mt-3">
                                    <div class="input-group">
                                        <textarea name="contact[body]" 
                                        style="width: 100%;height: 130px;padding: 20px 20px;background: #fbfbfb;border: 1px solid #e7e7e7;box-shadow: none;" 
                                        placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 mt-3">
                                    <button class="button dark p-3" style="color:white; background:black;float:left" >Gửi cho chúng tôi</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('myVideo');
        video.removeAttribute('controls');

        video.addEventListener('ended', function() {
            video.currentTime = 0;
            video.play();
        });
    });
    </script>
<br>