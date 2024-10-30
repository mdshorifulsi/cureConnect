@php

$slider=App\Models\Slider::where('status', 1)->latest()->take(6)->get();
@endphp


<div id="carouselExampleIndicators" class="carousel slide mt-5 " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        @foreach($slider as $key => $v_slider)
        <div class=" carousel-item {{$key == 0 ? 'active' : ''}}">
            <img src="{{asset($v_slider->slider_image)}}" class="d-block w-100 rounded-2"
                style="height: 300px;" alt="{{ $v_slider->slider_title }}">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p class="text-dark fw-bold">Some representative placeholder content for the first
                    slide.</p>
            </div> -->
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
