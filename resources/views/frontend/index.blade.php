@extends('layouts.mastervol')

@section('title', "Volunteer Resources")
@section('meta_description', "Volunteer Resources")
@section('meta_keyword', "Volunteer Resources")

@section('content')

<h4 class="text-center">Blog Categories</h4>

<div class="bg py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel category-carousel owl-theme">

                    @foreach ($all_categories as $all_cate_item)
                    <div class="item">
                        <a href="{{ url('blog/'.$all_cate_item->slug) }}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Benefits of Volunteering</h4>
                <div class="underline">
                    <p>
                    Volunteering with Volunteer for Bangladesh allows an individual to grow in to be a responsible citizen;<br> 
                    their contribution is appreciate with certificates, appreciation letters and recommendation letters <br>
                    after successful completion of campaigns and programs.

                    <li>Personal growth and fulfillment</li>
                    <li>Career advancement</li>
                    <li>Improved mental health</li>
                    <li>Increased sense of community</li>
                    <br>
                    <b>Giving back:</b> Volunteering is a way to give back to your community and make a positive impact on others’ lives. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection