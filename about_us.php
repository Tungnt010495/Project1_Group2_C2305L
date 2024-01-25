<br><br><br>
<style>
h2,
h3 {
    margin-top: 5px !important;

}
.video-container {
        max-width: 100%;
        height: auto;
    }
</style>

<div class="container  text-center ">
    <div class="" style="width : 50%; margin: 0 auto;">
        <h2 class="mb-3">Who Are We?</h2>
        <p class="lead fs-4 text-secondary mb-3">LOUIS VUITTON BRAND</p>

            <!-- <img style="width:650px; height:750px; " src="image/slider/face.jpg"> -->
        <h2>Louis Vuitton Wallet History</h2>

        <p>Louis Vuitton, founded in 1854 by Louis Vuitton himself, stands as one of the world's most
            iconic and luxurious fashion houses. While widely recognized for its signature luggage and
            accessories, the brand's venture into wallet sales has been a pivotal aspect of its
            success.</p>
        <?php
             $videoPath = 'image/slider/vdlv2.mp4';
        ?>
        <div class="video-container">
            <video id="myVideo" autoplay>
                <source src="<?php echo $videoPath; ?>" type="video/mp4">
            </video>
        </div>
        <br>
        <h3>Early Years (1854-20th Century)</h3>
        <p>Louis Vuitton started as a trunk-maker in Paris, quickly gaining a reputation for quality
            and innovation. The demand for his luggage led to the introduction of smaller leather
            goods, including wallets, that retained the brand\'s commitment to craftsmanship and
            attention to detail.</p>

        <img style="width:650px; height:750px; " src="image/slider/LV2.jpg">
        <br>

        <h3>Monogram Canvas and Iconic Designs</h3>
        <p>In the late 19th century, Louis Vuitton introduced the iconic Monogram Canvas, featuring the
            interlocking LV initials and floral motifs. This signature pattern became synonymous with
            the brand and was incorporated into their wallet designs, adding a touch of exclusivity.
        </p>

        <img style="width:650px; height:800px; " src="image/slider/LV3.jpg">
        <br>
        <h3>Evolution of Styles and Materials (20th Century - Present)</h3>
        <p>Over the decades, Louis Vuitton continuously evolved its wallet collections, experimenting
            with various materials, designs, and finishes. From classic monogram wallets to Damier
            Graphite patterns, the brand maintained a perfect blend of heritage and contemporary
            aesthetics.</p>

        <img style="width:650px; height:1000px; " src="image/slider/VS1.jpg">


        <h3>Global Popularity and Cultural Impact</h3>
        <p>Louis Vuitton wallets gained popularity worldwide, becoming status symbols associated with
            elegance and success. Celebrities, influencers, and fashion enthusiasts alike embraced the
            brand, further solidifying its position in the global luxury market.</p>


        <!-- <img style="width:650px; height:400px; " src="image/slider/LV1.jpg"> -->

        <h3>Sustainability Initiatives</h3>
        <p>In recent years, Louis Vuitton, like many luxury brands, has focused on sustainability. This
            commitment is reflected in the use of eco-friendly materials and ethical practices in the
            production of their wallets, aligning with the evolving values of their discerning
            clientele.</p>

        <p>Louis Vuitton\'s journey in the world of wallet sales encapsulates not just a history of
            fashion but a legacy of craftsmanship, innovation, and cultural influence that continues to
            shape the landscape of luxury goods.</p>
        </p>
        <img style="width:650px; height:400px;" src="image/slider/thankyou.png">

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
</div>