@extends('layouts.bootstrap')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>เพนกวิน-บอร์ด</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/1.png') }}">

</head>


<body>

    <div class="d-flex justify-content-center mt-2">
        <div class="container border border-dark rounded m-5 p-3">
            <div class="row">
                <div class="col-8">
                    <b> <img src="{{ asset('img/1.png') }}" width="30" height="30"> &nbsp;
                        เพนกวิน-บอร์ด-กระทู้ถามตอบ
                        ทุกเรื่องที่สงสัย By ทำไมไม่ปริ้นF </b>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-row-reverse">

                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="btn btn-info rounded-pill ml-1 underline">{{ Auth::user()->name }}</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-primary rounded-pill ml-1 underline">เข้าสู่ระบบ</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-secondary rounded-pill underline">สมัครสมาชิก</a>
                                @endif
                            @endauth
                        @endif


                        {{-- <a class="btn btn-secondary rounded-pill ml-1" href="#" role="button">สมัครสมาชิก</a>
                        <a class="btn btn-primary rounded-pill" href="#" role="button">เข้าสู่ระบบ</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card border border-dark rounded">
                        <div class="card-body text-center">
                            <b class="card-title">ตั้งกระทู้</b>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card border border-dark rounded">
                        <div class="card-body text-center">
                            <b class="card-title">ถามตอบ</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border border-dark rounded">
                        <div class="card-body">
                            <div class="text-center">
                                <b>ทำไมไม่ปริ้นF 2023</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>



</html>
