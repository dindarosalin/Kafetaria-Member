@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-light border-primary" style="border-radius: 20px">
                        <div class="card-body">
                            {{-- Alert ketika success dan error --}}
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-warning">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </div>
                            @endif

                            <p>
                                Silahkan melakukan pengecekan email untuk proses verifikasi <br>
                                Apabila kamu tidak mendapatkan silahkan <a href="{{ url("/email/verification/$userID") }}">Kirim Ulang Verifikasi</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
