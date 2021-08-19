@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.querySelector('.image-picker input')
    .addEventListener('change', (e) => {
        const input = e.target;
        const reader = new FileReader();
        reader.onload = (e) => {
            input.closest('.image-picker').querySelector('img').src = e.target.result
        };
        reader.readAsDataURL(input.files[0]);
    });
</script>