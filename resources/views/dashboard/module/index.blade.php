@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Modul</h1>
</div>

<div class="row w-100 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <div class="col">
    <h3>Sequence</h3>
    <div class="card mb-3 mt-3">
      <img src="/img/Saklar.jpg" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Ayo kita nyalakan lampunya ya!</h5>
        <p class="card-text">Ikuti urutan lampu yang menyala. </p>
        <div class="border mb-2"></div>
        <span>Latihan ini merupakan bagian dari Modul <i>Sequence</i></span>
        <a href="/dashboard/modul/sequence" class="btn btn-primary w-100 py-2 mt-4">Lihat Modul</a>
      </div>
    </div>
  </div>
  <div class="col">
    <h3>Comparation</h3>
    <div class="card mb-3 mt-3">
      <img src="/img/Sepatu.png" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Ayo kita pakai sepatunya ya!</h5>
        <p class="card-text">Sesuaikan ukuran sepatu.</p>
        <div class="border mb-2"></div>
        <span>Latihan ini merupakan bagian dari Modul <i>Comparation</i></span>
        <a href="/dashboard/modul/comparation" class="btn btn-primary w-100 py-2 mt-4">Lihat Modul</a>
      </div>
    </div>
  </div>
  <div class="col">
    <h3>Sense of Number</h3>
    <div class="card mb-3 mt-3">
      <img src="/img/Belanja.png" class="card-img-top img-fluid "  loading="lazy" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title">Bantu Ibu Belanja Buah yuk!</h5>
        <p class="card-text">Masukkan buah ke dalam Trolley.</p>
        <div class="border mb-2"></div>
        <span>Latihan ini merupakan bagian dari Modul <i>Sense of number</i></span>
        <a href="/dashboard/modul/sense-of-number" class="btn btn-primary w-100 py-2 mt-4">Lihat Modul</a>
      </div>
    </div>
  </div>
</div>

@endsection