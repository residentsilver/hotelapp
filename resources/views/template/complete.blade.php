@extends('template.template')
@section('content')
    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Complete!!</h1>
            <p style="color: white">予約が完了しました。</p>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="/index">Home</a></li>
              <li>&bullet;</li>
              <li>Complete</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->


    <table class="table-dark">
      <th>予約番号</th>
      <th>氏名</th>
      <th>チェックイン</th>
      <th>チェックアウト</th>
      <th>部屋タイプ</th>
      <th>部屋番号</th>
      <th>価格</th>
      <td>
        {{dd($details)}}
        {{$details->}}
        {{$guests->guests_name}}
      </td>
    </table>
    
    
    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="/books" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>
      @endsection