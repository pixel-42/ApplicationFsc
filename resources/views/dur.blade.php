@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="/addUser">
                            <button class="btn btn-primary">Добавить пользователя</button>
                        </a>
                        <br>
                        <br>
                        <br>
                        <h1>{{ $title }}</h1>



                            <table id="myTable" class="table display nowrap dataTable dtr-inline collapsed">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>


                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('javascript')

    <script>

        $(document).ready( function () {

            $('#myTable').DataTable();
        } );
    </script>
@endsection
