@extends('Home.master')

@section('content')
    <style>
        p{
            direction: ltr;
        }

        @media (max-width: 768px) {
            .contentEditor p{
                font-size: 60% !important;
            }
        }
        @media (min-width: 1200px) {
            .contentEditor p{
                font-size: 90% !important;
            }
        }


    </style>
    <div class="container">
        <div class=" row mt-5  pb-sm-1 justify-content-center">
            <div class="col-12 bg-white pt-4 pb-4">
            {{$page->title}}
            </div>
        </div>
        <div class=" row  mb-5 pb-sm-5 ">
            <div class="col-12 bg-white pt-4 pb-4">
                <div class="row justify-content-center">
                    <div class="col-11 contentEditor">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection