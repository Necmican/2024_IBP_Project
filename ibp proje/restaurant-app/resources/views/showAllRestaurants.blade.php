@extends('admin_panel_layout')

@section('title', 'Tüm Mağazalar')

@section('form')
<div class="card-header">
    <h3 class="card-title">Mağazalar Listesi</h3>
</div>
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>İsim</th>
                <th>Telefon</th>
                <th>Adres</th>
                <th>Fiyat</th>
                <th>Açıklama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops->sortBy('name') as $shop)
                <tr>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->address }}</td>
                    <td>{{ $shop->price_list }}</td>
                    <td>{{ $shop->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
