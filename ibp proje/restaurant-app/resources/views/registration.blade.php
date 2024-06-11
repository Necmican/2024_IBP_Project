@extends('layout')

@section('title', 'Kaydol')

@section('form')
<span class="block text-center text-2xl font-bold mb-4">Kaydol</span>
<form action="{{route('registration.post')}}" method="POST" id="stripe-login">
    @csrf
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Şifre</label>
        <input type="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>
    <div class="mb-4">
        <label for="password2" class="block text-sm font-medium text-gray-700">Şifreyi Doğrula</label>
        <input type="password" name="password2" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>
    <div class="mb-4 text-center">
        <a href="{{route('login')}}" class="text-red-600 hover:text-red-800">Zaten hesabın var mı?</a>
    </div>
    <div>
        <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Kaydol
        </button>
    </div>
</form>
@endsection
