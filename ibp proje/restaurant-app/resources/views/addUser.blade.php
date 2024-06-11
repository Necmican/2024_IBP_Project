@extends('admin_panel_layout')

@section('title', 'Müşteri Ekle')

@section('form')
            <div class="card-header bg-dark text-white text-center">
                <h3 class="card-title m-0">Yeni Müşteri Bilgileri</h3>
            </div>
            <form action="{{ route('addUser.post') }}" method="post">
                @csrf
                <div class="card-body p-4">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">E-posta:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email adresi giriniz" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Şifre:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Şifre giriniz" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="role" class="form-label">Rol:</label>
                        <select name="role" id="role" class="form-select">
                            <option value="kullanici">Müşteri</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer bg-light text-end">
                    <button type="submit" class="btn btn-primary">Müşteri Oluştur</button>
                </div>
            </form>
@endsection
