@extends('layouts.app')

@section('title', 'Coming Soon')

@section('content')
        <!-- Coming Soon Page -->
        <section class="page-404-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="image">
                            <img src="images/item/coming-soon.svg" alt="Coming Soon" style="max-width: 20%">
                        </div>
                        <div class="title">
                            Something exciting is on the way!
                        </div>
                        <p>We are working hard to bring you something amazing. Stay tuned for updates.</p>
                        <a href="{{ route('home') }}" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Coming Soon Page -->
@endsection
