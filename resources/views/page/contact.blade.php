@extends('layouts.base')
@section('title', 'Home - Hip Hop Hooray')
@section('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('content')

@include('partials.navbar')

<div class="header">
    <h3 class="header__title" data-aos="fade-down">Contact</h3>
</div>

<div class="container-fluid call-action">
    <div class="row">
        <div class="col-md-12">
            <p class="call-action__title" data-aos="fade-down"></p>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row">
        <div class="col-md-12 infomation__p">

            <p><strong>Mailing Address ONLY:</strong></p>

            <p>11360 NW 23rd ST  Pembroke Pines, FL 33026</p>

            <p><strong>Days</strong>: Monday – Fridays</p>

            <p><strong>Hours</strong>: 11:00am – 5:00pm</p>

            <p>We are closed on early release and no school day. We mostly follow the Broward County School Board Calendar. Please refer to our calendar as they might be other no class days.</p>

            <p><strong>We welcome feedback from our customers. Thank you for taking the time an effort to let us know how we are doing and any improvements that you would like to see.  Email us at MyHipHopHooray@gmail.com</strong></p>

        </div>
    </div>
</div>


<div class="container-fluid call-action-gallery">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center align-items-center">
                <a class="call-action-gallery__title" href="#" data-aos="fade-down"></a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection

@section('js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
