@extends('admin_panel_layout')

@section('title', 'Kuaför Ana Sayfa')

@section('form')

<div class="card-header bg-dark text-white text-center">
    <h3 class="card-title m-0">Müşteri Listesi</h3>
</div>
<div class="card-body table-responsive p-4">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Rol</th>
                <th>E-posta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users->sortBy('role') as $user)
                <tr>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
