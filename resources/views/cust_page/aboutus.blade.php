@extends('layouts.lay_1')

@section('title', 'Blanja | About Us')

@section('contents')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b>Tentang Kami</b></h3>
          <h6>Tak kenal maka kenalan.</h6>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- More Content Recomended -->
  <section class="content margin-15 spacing">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="" style="text-align: justify;">
            <p>{{$datas->contact->desc}}</p>
          </div>
          <div class="">
            <table>
              <tbody>
                <tr>
                  <td style="width: 100px;">Alamat </td>
                  <td>{{$datas->contact->address}}</td>
                </tr>
                <tr>
                  <td>Email </td>
                  <td>
                    <a href="#">{{$datas->contact->email}}</a>
                  </td>
                </tr>
                <tr>
                  <td>Phone </td>
                  <td>
                    <a href="#">{{$datas->contact->phone}}</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- More Content Recomended -->
  <section class="content spacing">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5>kami ada di sini</h5>
            </div>
            <div class="card-body" style="padding: 0px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.385031655629!2d107.65327119970699!3d-6.938761003661823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8abb5345fc5462b7!2sMcDonald&#39;s%20Soekarno%20Hatta!5e0!3m2!1sen!2sid!4v1598085334516!5m2!1sen!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
