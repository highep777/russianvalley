
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/Ostrov-Vrangelya.jpg')}}" style="padding: 10px; width: 100%; height:520px">
            <div class="container">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/kronoc1.jpg')}}" style="padding: 10px;width: 100%; height: 520px;">
            <div class="container">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/petrov-002.jpg')}}" style="padding: 10px; width: 100%; height: 520px">
            <div class="container">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
