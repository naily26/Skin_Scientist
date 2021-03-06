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
                  <h5 class="card-title">Berdasarkan Skin Scientist, jenis kulit anda adalah</h5>
                  <p class="card-text"> <h4>{{$kk[0]['kulit']}}</h4></p>
                </div>
            </div>
          </div>
          <div class="mt-5 col-md-12">
            <div class="card">
                <div class="card-header text-white" style="background: #b30000">
                  Solusi Perawatan
                </div>

                <div class="card-body">
                  @foreach($kk[0]['solusi'] as $key => $item)
                    <p class="card-text">{{$key+1}}  -  {{$item->nama_solusi}}</p>
                  @endforeach
                </div>

            </div>
          </div>
          <div class="mt-3 col-md-12">
            <a href="/service"><button type="button" class="read_more">Reset</button></a>
          </div>
       </div>
      
    </div>
 </div>
@endsection