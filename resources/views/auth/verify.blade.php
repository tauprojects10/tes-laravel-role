@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card text-center">
                {{-- <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <img src="{{ asset('assets/img/Mail sent-rafiki.svg') }}" alt="" style="display: block; width: 250px; margin: auto;">
                    <h2 class="text-center">{{ __('We have sent a verification link to your email. ') }}</h2>
                    <br>
                    <h5>
                        {{ __('Please verify your email to continue. ') }}
                    </h5>
                    <br>
                    <h6>
                    {{ __('If you did not receive the email') }},
                    </h6>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
