@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-home"></i> {{ __('navs.general.home') }}
                </div>
                <div class="card-body">
                    {{ __('strings.frontend.welcome_to', ['place' => app_name()]) }}
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <div class="row mb-4">
        <div class="col">
            <example-component></example-component>
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-fort-awesome"></i> Font Awesome {{ __('strings.frontend.test') }}
                </div>
                <div class="card-body">
                    <i class="fas fa-home"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
