<style>
    .container_contratos {
        width: 80%;
        padding: 20px !important;
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/Dashboard/dashboard.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container text-center" style="margin-bottom: 100px !important;">
        <h1 class="text-white text-center font_230 negrito mb-3 mt-3" style="padding-bottom: 15px !important;">Bem-vindo, <strong>{{ $user->name }}</strong>!</h1>
        <div class="bg-darkblue rounded" style="padding: 30px !important;">
            <div class="image-container flex justify-center">
                @if (Auth::user()->profile_photo)
                    <img src="{{ Storage::url(Auth::user()->profile_photo) }}" class="profile" alt="Foto de Perfil" width="150">
                @else
                    <img src="{{ asset('images/default_profile.png') }}" class="profile" alt="Foto de Perfil Padrão" width="150">
                @endif
            </div>
    
    
            <div class="text-center mt-4">
                <h4 class="text-white font_150">Você está no Dashboard!</h4>
                <span class="font_80 text-white">O que deseja fazer?</span>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>