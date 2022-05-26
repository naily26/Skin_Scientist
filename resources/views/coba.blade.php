@extends('master')
@section('content')
    

      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>SkinScientist</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>labspa</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>labspa</h1>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/girl.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Our Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr.png" alt="#"/></i>
                     <h3>Kulit berjerawat</h3>
                     <p>Jerawat adalah gangguan pada kulit. Kondisi ini berhubungan dengan produksi minyak (sebum) yang terjadi secara berlebihan. Minyak berlebih bisa menyumbat pori-pori kulit. Pada setiap pori-pori kulit, terdapat folikel yang terdiri dari kelenjar minyak dan rambut. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <h3>Kulit berminyak</h3>
                     <p>Kulit berminyak merupakan kondisi ketika kelenjar sebasea pada kulit menghasilkan terlalu banyak sebum. Sebum adalah minyak alami yang berfungsi melapisi kulit dan rambut. Produksi sebum berlebih membuat kulit terlihat mengkilap dan berkilau </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <h3>Kulit kering</h3>
                     <p>Kulit wajah kering umumnya terjadi akibat rendahnya tingkat kelembapan pada lapisan kulit terluar. Hal ini mengakibatkan kulit kering mudah pecah-pecah dan mengalami keretakan pada permukaan kulit. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="/service">Start</a>
               </div>
            </div>
         </div>
      </div>
      <!-- service -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2> <img src="images/head.h.png" alt="#"/> About Our Skin Scientist</h2>
                     <p>Skin Scienties merupakan aplikasi yang dapat membantu anda dalam mengetahui jenis kulit wajah dan memberikan solusi perawatan berdasarkan jenis kulit wajah. Sehingga masalah kulit wajah dapat diatasi tanpa melakukan konsultasi terlebi dahulu kepada dokter, karena aplikasi ini dibuat berdasarkan data yang diperoleh dari sistem pakar. Tingkat akurasi dari aplikasi ini sudah teruji dengan melakukan pengujian yang membandingan antara perhitungan manual menggunakan metode certainty factor menghasilkan nilai yang sama dengan hasil akhir aplikasi ini.</p>
                     {{-- <a class="read_more">Read More</a> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      {{-- <!-- customer -->
      <div id="customer" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Our Customer Feedback</h2>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div> --}}
      <!-- end customer -->
      </div>
      
   @endsection  