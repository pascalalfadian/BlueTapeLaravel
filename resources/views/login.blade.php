@extends('layouts.app')

@section('content')

<div class="container text-center" >
    <img class="mt-5" src="Logo_UNPAR.png" width="200" >
        <h4 class="display-4 mt-1">Selamat Datang di BlueTape</h4>
        <hr class="my-4">
        <p>Silahkan login Menggunakan Akun UNPAR</p>
        <a href="{{ url('google') }}" class="btn btn-primary">
            Login with Google
        </a>
        <!-- <a class="btn btn-primary " href="/index" role="button">Login with Google</a> -->
    </div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

    <div class="col-md-8 offset-md-4">
       
        <a href="{{ url('google') }}" class="btn btn-primary">
            Login with Google
        </a>

    </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
