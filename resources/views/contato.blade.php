<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Entrar em Contato') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="text-white text-center font_200">Preencha as Informações</h1>
        <h3 class="text-white text-center font_110 mt-2">Responderemos assim que possível!</h3>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Nome:</label>
                        <input type="text" id="name" name="name" class="form-control rounded" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email:</label>
                        <input type="email" id="email" name="email" class="form-control rounded" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Mensagem:</label>
                        <textarea id="message" name="message" class="form-control rounded" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
        @include('layouts.footer')
</x-app-layout>