<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $module->title }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-darkblue dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    {{ $module->title }}
                </h1>

                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Parte do curso: <strong>{{ $module->course->title }}</strong>
                </p>

                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-3">
                    Aulas do módulo
                </h3>

                @if ($module->lessons->count() == 0)
                    <p class="text-gray-600 dark:text-gray-400">
                        Nenhuma aula cadastrada neste módulo.
                    </p>
                @endif

                <ul class="space-y-3">
                    @foreach ($module->lessons as $lesson)
                        <li class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg flex justify-between items-center">
                            <div>
                                <span class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ $lesson->title }}
                                </span>
                            </div>

                            <a href="{{ route('lessons.show', $lesson->id) }}"
                               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Assistir
                            </a>
                        </li><br>
                    @endforeach
                </ul>

            </div>

        </div>
    </div>
</x-app-layout>
