<style media="screen">
  .card-menu {
    padding-bottom: 10px;
    text-align: center;
    cursor: pointer;
  }
  .icon-category {
    max-width:30%;
    margin-top: 15px;
  }
  .menu-title {
    font-size: small;
    color: black;
  }
  .col-menu {
    text-align: center;
    margin-top: -10px;
    margin-bottom: 25px;
  }
</style>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h4><b>Pilihan Kategori</b></h4>
        <h6>Semua pilihan ada!</h6>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Kategori Button -->
<section class="content margin-15">
  <div class="container-fluid">
    <div class="row">
      @foreach ($datas->kategori_menu as $data)
        <div class="col-4 col-menu">
          <div class="card card-menu" onclick="location.href='{{$data->href}}'">
            <div class="">
              <img class="icon-category" src="{{$data->src}}" alt="">
            </div>
            <div class="">
              <h8 class="menu-title">{{$data->name}}</h8>
            </div>
          </div>
        </div>
      @endforeach

      {{-- <div class="col-4 col-menu">
        <a href="#">
          <div class="card-menu-img">
            <img src="/uploads/img/icon_fruits.jpg" alt="" style="max-width:100%;">
          </div>
        </a>
        <h8 class="menu-title">Buah-buahan</h8>
      </div>
      <div class="col-4 col-menu">
        <div class="card-menu-img">
          <img src="/uploads/img/icon_location.png" alt="" style="max-width:100%;">
        </div>
        <h8 class="menu-title">Perdagingan</h8>
      </div>
      <div class="col-4 col-menu">
        <div class="card-menu-img">
          <img src="/uploads/img/icon_donation.png" alt="" style="max-width:100%;">
        </div>
        <h8 class="menu-title">Perikanan</h8>
      </div>
      <div class="col-4 col-menu">
        <div class="card-menu-img">
          <img src="/uploads/img/icon_fruits.jpg" alt="" style="max-width:100%;">
        </div>
        <h8 class="menu-title">Rempah</h8>
      </div>
      <div class="col-4 col-menu">
        <div class="card-menu-img">
          <img src="/uploads/img/icon_location.png" alt="" style="max-width:100%;">
        </div>
        <h8 class="menu-title">Protein</h8>
      </div> --}}

    </div>
  </div>
</section>
<!-- /.Kategori -->
