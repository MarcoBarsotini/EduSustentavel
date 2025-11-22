<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/Lessons/lesson.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $lesson->title }}
        </h2>
    </x-slot>

    <div class="container text-center" style="margin-bottom: 100px !important;">
        <h1 class="text-white text-center font_230 negrito mb-3 mt-3" style="padding-bottom: 15px !important;">
            {{ $lesson->title }}
        </h1>

        <div class="bg-darkblue rounded" style="padding: 30px !important;">

            {{-- Vídeo da aula --}}
            <div class="flex justify-center mb-6">
                @if ($lesson->video_url)
                    <video width="800" controls class="rounded shadow-lg">
                        <source src="{{ $lesson->video_url }}" type="video/mp4">
                        Seu navegador não suporta vídeo HTML5.
                    </video>
                @else
                    <p class="text-white">Nenhum vídeo disponível para esta aula.</p>
                @endif
            </div>

            {{-- Descrição --}}
            <div class="text-center mt-4">
                <h4 class="text-white font_150">Descrição da Aula</h4>
                <p class="font_90 text-white mt-2">
                    {{ $lesson->description ?? 'Nenhuma descrição informada.' }}
                </p>
            </div>

            {{-- Navegação (opcional) --}}
            <div class="mt-6 flex justify-center gap-3">
                <a href="{{ route('modules.show', $lesson->module_id) }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Voltar ao Módulo
                </a>
            </div>

        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>
