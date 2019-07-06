<div id="carouselExampleIndicators" style="max-height:400px;" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-slide" src="{{ asset('images/4.jpeg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-slide" src="{{ asset('images/2.jpeg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-slide" src="{{ asset('images/3.jpeg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev control-left" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next control-right" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>