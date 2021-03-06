<!doctype html>
<html lang="en">
<head>
@include('include.head')
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>
  @include('include.header')

  <style>
    .modal.modal-wide .modal-dialog {
      width: 90%;
    }
    .modal-wide .modal-body {
      overflow-y: auto;
    }
  </style>

  <!-- Start Slider Area -->
  <div id="" class="slider-area">
    <div class="embed-responsive embed-responsive-16by9 bend niceties preview-2">
      <video autoplay loop id="myVideo">
        <source src="{{url('video/Visualisasi RDTR Kota Blitar.mp4')}}" type="video/mp4">
      </video>
    </div>
  </div>
  <!-- End Slider Area -->
 
  <!-- Start Berita Area -->
  <div id="berita" class="about-area area-padding">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($data as $u)
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                  <img src="{{ url('upload/berita')}}/{{$u->gambar}}" alt="">
                </a>
              </div>
              <div class="blog-meta">
                <span class="date-type">
                  <i class="fa fa-calendar"></i>{{$u->created_at}}
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="#">{{$u->judul}}</a>
                </h4>
                <p>
                  {!! \Illuminate\Support\Str::words($u->isi, 50) !!}
                 </p>
              </div>
              <span>
                <a href="{{url('berita')}}/{{$u->id}}" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- End Berita -->

  <!-- Start Home area -->
  <br><br><br>
  <div id="home" class="blog-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Selayang Pandang</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <p>
          <!-- Start Testimonials -->
        <div class="testimonials-area">
          <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
              <div class="container ">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start testimonials Start -->
                    <div class="testimonial-content text-center">
                      <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                      <!-- start testimonial carousel -->
                      <div class="testimonial-carousel">
                        <div class="single-testi">
                          <div class="testi-text">
                            <p>
                              Kota Blitar memiliki peran yang cukup strategis di Provinsi Jawa Timur dalam kedudukannya <br> sebagai pusat kegiatan dari Satuan
                              Wilayah Pembangunan yaitu Wilayah Pembangunan (WP) Blitar <br> dengan Kabupaten Blitar sebagai hinterlandnya agar berkembang secara
                              signifikan.<br> Adapaun tujuan penataan ruang Kota Blitar sebagai Kota Wisata kebangsaan <br> yang didukung oleh perdagangan dan jasa.
                            </p>
                          </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                          <div class="testi-text">
                            <p>
                             Penataan Ruang di Kota Blitar dilaksanakan berdasarkan<br>Peraturan Daerah Nomor 12 Tahun 2011 <br> tentang Rencana Tata Ruang Wilayah Kota Blitar Tahun 2011 sd 2030 <br> yang kemudian ditindak lanjuti dengan rencana rinci yaitu Rencana Detail Tata Ruang (RDTR)
                            </p>
                          </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                          <div class="testi-text">
                            <p>
                               RDTR ditetapkan berdasarkan Peraturan Daerah Kota Blitar<br> Nomor 10 Tahun 2017 tentang Rencana Detail Tata Ruang (RDTR) <br> Dalam Perda tersebut 4 BWP yang ada di Kota Blitar <br>diatur menjadi 1 (satu) perda termasuk di dalamnya Peraturan Zonasinya.
                            </p>
                          </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                          <div class="testi-text">
                            <p>
                              Sistem Informasi Tata Ruang RDTR Kota Blitar <br>merupakan sebuah sarana komunikasi dan informasi yang menyajikan data dan informasi          yang tereferensi secara spasial <br> yang dikembangkan pada aplikasi berbasis Web yang harus dikelola dengan baik menyajikan        pilihan-pilihan atas data dan informasi untuk kebutuhan penataan ruang sehingga ke depan nantinya masyarakat akan dapat secara lebih transparan melihat <br> dan juga terlibat (berperan serta) dalam proses pembangunan di Kota Blitar.
                            </p>
                          </div>
                        </div>
                        <!-- End single item -->
                      </div>
                    </div>
                    <!-- End testimonials end -->
                  </div>
                </div>
              </div>
            </div>
          </div>       
      </div>
    </div>
  </div>
  <!-- End Home area -->
  <br><br><br>

  @include('include.foot')



</body>

</html>
