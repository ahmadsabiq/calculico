@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Latihan</h1>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <div class="col">
    <div class="card mb-3 mt-3" style="width: 18rem;">
      <img src="/img/Saklar.jpg" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Ayo kita nyalakan lampunya ya!</h5>
        <p class="card-text">ikuti ukuran lampu yang menyala </p>
        <a href="/lampu" class="btn btn-primary">Latihan Sekarang</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-3 mt-3" style="width: 18rem;">
      <img src="/img/Sepatu.png" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Ayo kita pakai sepatunya ya!</h5>
        <p class="card-text">ikuti ukuran lampu yang menyala </p>
        <a href="/sepatu" class="btn btn-primary">Latihan Sekarang</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-3 mt-3" style="width: 18rem;">
      <img src="/img/Belanja.png" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Bantu Ibu Belanja Buah yuk!</h5>
        <p class="card-text">ikuti ukuran lampu yang menyala </p>
        <a href="/belanja" class="btn btn-primary">Latihan Sekarang</a>
      </div>
    </div>
  </div>
{{-- <div class="card mb-3 mt-3" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ayo kita pakai sepatunya ya!</h5>
    <p class="card-text">Menyesuaikan ukuran sepatu</p>
    <a href="/webgl" class="btn btn-primary">Latihan Sekarang</a>
  </div>
</div>
<div class="card mb-3 mt-3" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bantu Ibu Belanja Buah yuk!</h5>
    <p class="card-text">Belanja sesuai jumlah yang diberikan</p>
    <a href="/webgl" class="btn btn-primary">Latihan Sekarang</a>
  </div>
</div> --}}
</div>

@endsection