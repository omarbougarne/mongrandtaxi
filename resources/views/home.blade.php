@extends('layouts.main')

@section('container')
    @include('partials.homeHeader')

    <section class="highlight-phone" style="background: rgb(255,192,0); position: absolute; top:90px; width:100%;">
        <div id="booking-cta" class="container text-center">
            <h3>Book A Ride Now</h3>    
                </div>
    </section>
    <div class="p-4 bg-black rounded-lg shadow-md" style=" position: absolute; top:230px; width:100%; height:40%;">
        <p class="text-lg font-semibold text-white">Lorem ipsum dolor sit amet</p>
        <p class="text-white">Consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      

@endsection
