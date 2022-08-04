@extends('layouts.base')
@section('title', 'Home - Hip Hop Hooray')
@section('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('content')

@include('partials.navbar')

<div class="header-information">
    <h3 class="header-information__title" data-aos="fade-down">Information</h3>
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
        <div class="col-md-12 text-center">
            <img data-aos="fade-down" width="500" class="img-fluid img-thumbnail my-4" src="{{ asset('img/info-general.jpg') }}" alt="">
            <h3 data-aos="fade-down">Imparting a love of dance since 2001</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 infomation__p">

            <p><strong>Hip Hop Hooray</strong> is a <strong>creative, fun</strong>, and unique after school <strong>dance program</strong> that runs throughout the school year and accommodates children in four age groups. It is a terrific introduction to dance without adding to the parent’s hectic routine as <strong>classes are offered right at their school during the aftercare hours</strong>.</p>

            <p>
                Each class builds on the last creating our routines to be performed at our <strong>end of the year showcase</strong> and/or possible performance at their school. All of this is wrapped in a package that promises to challenge the children while still allowing complete beginners to get a solid introduction to dance. Each class starts with a warm-up, then we move into choreography set to today‘s hit music; which is carefully reviewed and “cleaned” by a DJ. Routines combines new and old school moves and techniques or whatever else is current nowadays.
            </p>

            <p>
                <strong>
                    Our mission is so much more than Hip-Hop, it’s building these kids up to have high self-esteem and confidence which is beneficial in every aspect of their lives- That’s our “secret mission”
                </strong>
            </p>
            <p><strong>Classes are:</strong></p>
            <p>Disciplined and non-competitive to encourage progress in our students. Structured to incorporate fun into every lessons because children learn more when they are enjoying themselves. We focus on improvements and praise the children for their efforts and achievements.</p>
            <p><strong>Age Groups:</strong></p>
            <p><strong>Juniors</strong> – Kinder through 2nd grade(Elementary)</p>
            <p><strong>Seniors</strong> – 3rd through 5th grade. (Elementary)</p>
            <p><strong>Dance outfits</strong> are required for those students participating in our annual showcase and/or any other presentation to ensure uniformity. As our showcase date approaches (May) emails will be sent with all the necessary information.
                The dance outfits cost is not included in the registration or monthly fee. They will have a reasonable price (normally they do not exceed $100) <strong>No student can perform without their required outfits or an unpaid balance</strong>.</p>
            <p>
                <strong>Benefits of music and dance</strong>:
            </p>
            <ul>
                <li>Coordination</li>
                <li>Confidence and self-esteem</li>
                <li>Physical fitness</li>
                <li>Team cooperation</li>
                <li>Flexibility and strength</li>
                <li>Sequential learning, pattern</li>
            </ul>
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
