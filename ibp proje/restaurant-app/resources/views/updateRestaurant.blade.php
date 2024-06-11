@extends('admin_panel_layout')

@section('title', 'Mağaza Güncelle')

@section('form')
            <div class="card border-secondary shadow-lg">
                <form action="{{ route('updateRestaurant.post') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Mağaza İsmi:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Rehber Telefon Numarası:</label>
                            <input type="phone" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Adresi:</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price_list" class="form-label">Ücret:</label>
                            <input type="number" step="0.01" name="price_list" id="price_list" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Detaylar:</label>
                            <textarea name="description" id="description" class="form-control" rows="2" required></textarea>
                        </div>
                        <button style="background-color: #4d88df92 !important"type="submit" class="btn btn-success">
                            <i class="fas fa-plus-circle me-2"></i>&nbsp; &nbsp; Mağazaı Oluştur
                        </button>
                </form>
            </div>
@endsection
