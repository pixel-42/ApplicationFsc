@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form action="/saveUser" method="POST" >
                            {{ csrf_field() }}
                            <input name="login" type="text" placeholder="login">
                            <input name="password" type="text" placeholder="password">
                            <button >Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
