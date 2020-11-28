@extends('layouts.auth')
@section('content')
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <h2 class="text-white">Get started with Us</h2>
                            <p class="text-white-50">Register a new membership</p>
                        </div>
                        <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control pl-15 bg-transparent text-white plc-white  @error('email') is-invalid @enderror " value="{{old('email')}}" placeholder="Email">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password"  name="password" id="password" class="form-control pl-15 bg-transparent text-white plc-white  @error('password') is-invalid @enderror " placeholder="Parola">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox text-white">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1"><a href="#" class="text-warning"><b>Kullanım Şartlarını</b></a> kabul ediyorum.</label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-info btn-rounded margin-top-10">KAYIT OL</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0 text-white">Zaten bir hesabınız var mı?<a href="{{route('login')}}" class="text-danger ml-5"> Giriş Yap</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
