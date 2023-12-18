@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-dark-subtle">
    <h1 class="h2">Module Sense of Number</h1>
  </div>

  <a href="/dashboard/modul" class="btn btn-secondary"><i class="bi bi-chevron-left"></i>Kembali ke halaman Modul</a>

  <div class="row w-100 ">
  
    <div class="col shadow-sm m-3 p-4 bg-body-tertiary border rounded-3">
    <h5>Prasyarat (kemampuan dasar yang harus dimiliki)</h5>
    <ul class="list-display list-checkmarks">
      <li>Anak sudah dapat mengidentifikasi simbol angka</li>
      <li>Anak sudah dapat membilang</li>
      <li>Anak sudah dapat mengidentifikasi buah/sayur</li>
    </ul>
    </div>

    <div class="col shadow-sm m-3 p-4 bg-body-tertiary border rounded-3">
      <h5>Modalitas sensori yang distimulasi</h5>
      <ul class="list-display list-checkmarks">
        <li>Penglihatan (visual)</li>
        <li>Pendengaran (auditori)</li> 
        <li>Perabaan (taktil)</li> 
        <li>Gerakan (kinestetik)</li>
      </ul>
      </div>

      <div class="col shadow-sm m-3 p-4 bg-body-tertiary border rounded-3">
        <h5>Keterampilan yang diasah</h5>
        <ul class="list-display list-checkmarks">
           
          <li>Sense of number</li> 
          <li>Memori Kerja Visual (Visual Working Memory)</li>
          <li>Memori Kerja Auditori (Auditory Working Memory)</li>
          <li>Ketangkasan Manual (Manual Dexterity)</li>
        </ul>
        </div>


    {{-- <button class="btn btn-outline-secondary" type="button">Example button</button> --}}
  </div>

  <div class="mt-3">
    <a href="/belanja" class="w-100 btn btn-success">Latihan Sekarang</a>
</div>

@endsection