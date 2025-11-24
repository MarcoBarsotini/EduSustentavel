<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Meus Módulos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if($modules->isEmpty())
                <div class="bg-darkblue dark:bg-gray-800 p-6 rounded shadow text-center">
                    <p class="text-gray-700 dark:text-gray-300">
                        Nenhum módulo disponível no momento.
                    </p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($modules as $module)
                        <div class="bg-darkblue dark:bg-gray-800 p-6 rounded-lg shadow">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                                {{ $module->title }}
                            </h3>

                            <p class="text-gray-700 dark:text-gray-300 mb-4">
                                Curso: <strong>{{ $module->course->title }}</strong>
                            </p>

                            <a href="{{ route('modules.show', $module->id) }}"
                                class="inline-block mt-2 px-4 py-2 bg-indigo-600 text-white font-semibold rounded hover:bg-indigo-700">
                                Ver Lições →
                            </a>
                        </div>
                    @endforeach

                </div>
            @endif

        </div>
    </div>
</x-app-layout>
