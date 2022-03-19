@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link {{$active}}" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
@endsection

@section('content')
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Supplier</span>
          <h2>Supplier</h2>
          <p>Daftar supplier pada PT. Raja Mobil</p>
        </div>

        <div class="row">
        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-cart"></i></div>
              <h4><a href="">nama_supplier</a></h4>
              <p>jenis</p>
              <p>____________________________</p>
              <p>address</p>
              <p>____________________________</p>
              <p>contact</p>
              <p>____________________________</p>
              <p>phone</p>
            </div>
          </div>
          
        </div>

      
    </section><!-- End Services Section -->


@endsection