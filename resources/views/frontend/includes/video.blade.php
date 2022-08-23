<section class="component-what pt-5">
    <div class="container">
        <div class="text-center mb-3">
            <strong class="title-what-video"> @lang('What do we do') </strong>
        </div>
        <div class="row m-auto">
            <div class="col-md-8 m-auto">
                <div class="carousel-iteme">
                    <div class="video-date">
                        <div class="div-button">
                            <button id="myBtn" ></button>
                        </div>
                        <video loop="" id="myVideo" poster="/assets/img/video-how.png" style="object-fit:cover;">
                            <source src="{{ $mainPage->video_link }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
