@extends('app')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>COTIZACIONES</center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
<th>Correo</th>
<th>Producto</th>
<th>Cantidad</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->id }}</td>
                                <td>{{ $quote->cliente }}</td>
                         <td>{{ $quote->email }}</td>
<td>{{ $quote->producto }}</td>
<td>{{ $quote->cantidad }}</td>



<td>
                                    <a href="{{ url('#', $quote) }}" class="btn btn-primary btn-sm">
                                        OFERTAR
                                    </a>
                                </td>
                                <td>
                                  .
                                </td>
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
