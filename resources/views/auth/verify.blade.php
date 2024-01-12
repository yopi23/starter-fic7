@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Please check your email for verification</h4>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm">
                A new email verification link has been emailed to you!
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('verification.send') }}" class="needs-validation">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Resend verificatin email
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
