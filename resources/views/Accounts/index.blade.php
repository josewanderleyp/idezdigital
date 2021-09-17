@extends('layouts.app')

@section('title',$title)

@section('content')


<div class="container">
    <div class="col-sm-12 page-title paddingFull">
        <label class=".title-page">{{$title}}</label>
    </div>

    <div class="col-md-12 paddingFull">
            <table id="department-table" class="table list">
                <thead class="th-background">
                    <tr role="row">
                        <th>ID Conta</th>
                        <th>Agência</th>
                        <th>Número</th>
                        <th>Dígito</th>
                        <th>Nome/Razão social</th>
                        <th>CPF/CNPJ</th>
                        <th>ID User</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$data->isEmpty())
                    @foreach($data as $response)
                    <tr role="row" class="odd">
                        <td>{{ $response -> idConta }}</td>
                        <td>{{ $response -> agencia }}</td>
                        <td>{{ $response -> numero }}</td>
                        <td>{{ $response -> digito }}</td>
                        <td>{{ $response -> razao_social }}</td>
                        <td>{{ $response -> cnpj }}</td>
                        <td>{{ $response -> name }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">
                            <div class="alert alert-warning m-0 text-center" role="alert">
                                Nenhum registro encontado!
                            </div>
                        </td>
                    </tr>
                    @endif

                </tbody>

            </table>
            {{ $data->appends(isset($filters) ? (array) $filters : [])->links() }}
    </div>

</div>
<!-- /.box -->
@endsection
