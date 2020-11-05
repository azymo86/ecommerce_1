
<style media="screen">
  .paket-box {
    cursor: pointer;
  }
  .paket-content {
    text-align: left;
    color: white;
    height: 150px;
    background-repeat: no-repeat;
    background-size: 100%;
  }
  .paket-button-more {
    height: 60px;
  }
</style>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h4><b>Paket lengkap</b></h4>
        <h6>Lebih gampang, lebih hemat.</h6>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- More Content Recomended -->
<section class="content margin-15">
  <div class="container-fluid">
    <div class="row justify-content-center">
      @foreach ($datas->paket_menu as $data)
        <div class="col-12">
          <div class="small-box bg-orange paket-box" onclick="location.href='{{$data->href}}'">
            <div class="inner paket-content" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{$data->img}}');">
              <h4>{{$data->name}}</h4>
            </div>
            <div class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </div>
          </div>
        </div>
      @endforeach
      <div class="paket-button-more">
        <h5 class="pointer" onclick="location.href='/'">Lihat lainnya <i class="fas fa-angle-double-right"></i></h5>
      </div>
    </div>
  </div>
</section>
