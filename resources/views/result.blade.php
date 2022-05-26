@extends('master')
@section('content')
<div id="service"  class="service">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2> <img src="images/head.png" alt="#"/> Result</h2>
             </div>
          </div>
          <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background: #b30000">
                  Hasil Konsultasi
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">Berdasarkan Skin Scientist, jenis kulit anda adalah kulit normal</p>
                </div>
            </div>
          </div>
          <div class="mt-5 col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background: #b30000">
                  Solusi
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">Berdasarkan Skin Scientist, jenis kulit anda adalah kulit normal</p>
                </div>
            </div>
          </div>
          <div class="mt-3 col-md-12">
            <a href="/select"><button type="button" class="btn btn-secondary">Reset</button></a>
          </div>
       </div>
      
    </div>
 </div>
@endsection