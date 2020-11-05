<style media="screen">
.img_carousel {
  margin-top: 10px;
  margin-bottom: 20px;
}
</style>

<!-- Image Carousel -->
<section class="content img_carousel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    @if ($datas->img_carousel->indicator)
      <ol class="carousel-indicators">
        @for ($i=0; $i < count($datas->img_carousel->src); $i++)
          @if ($i == 0)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
          @else
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
          @endif
        @endfor
      </ol>
    @endif

    <!-- Content -->
    <div class="carousel-inner">
      @for ($i=0; $i < count($datas->img_carousel->src); $i++)
        @if ($i == 0)
          <div class="carousel-item active">
        @else
          <div class="carousel-item">
        @endif
            <img class="d-block w-100" src="{{$datas->img_carousel->src[$i]}}">
          </div>
      @endfor
    </div>
    <!-- /Content -->

    @if ($datas->img_carousel->control)
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    @endif
  </div>
</section>
<!-- Image Carousel -->
