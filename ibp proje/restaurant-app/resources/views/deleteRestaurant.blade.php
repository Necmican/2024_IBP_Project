@extends('admin_panel_layout')

@section('title', 'Dükkan Sil')

@section('form')
<div class="card border-dark shadow-lg">
    <div class="card-header bg-dark text-white d-flex align-items-center">
        <h3 class="card-title mb-0">Silinecek Dükkanın İsmi</h3>
    </div>
    <form action="{{ route('deleteRestaurant.post') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name" class="form-label">Dükkanın İsmi:</label>
                <input  name="name" id="name" class="form-control" placeholder="Salon ismini giriniz" required>
            </div>
        </div>
        <div class="card-footer text-end">
            <button  type="submit" class="btn btn-danger"> Dükkanı Sil </button>
        </div>
    </form>
</div>
@endsection
