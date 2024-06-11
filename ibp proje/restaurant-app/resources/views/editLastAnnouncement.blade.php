@extends('admin_panel_layout')

@section('title', 'Anons Güncelle')

@section('form')
<form action="{{ route('addRestaurant.post') }}" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group mb-3">
            <label for="tittle" class="form-label">Anons Başlığı:</label>
            <input type="text" name="tittle" id="tittle" class="form-control" value="{{ $report->tittle }}" placeholder="Başlık giriniz" required>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Açıklama (Opsiyonel):</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Açıklama giriniz">{{ $report->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="content" class="form-label">Anons Metni:</label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="İçerik giriniz" required>{{ $report->content }}</textarea>
        </div>
    </div>
    <div class="card-footer text-end">
        <button type="submit" class="btn btn-warning">Anonsyi Güncelle
        </button>
    </div>
</form>
@endsection
