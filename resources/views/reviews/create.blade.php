<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Avaliação') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('reviews.store', $contract->id) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="rating" class="block text-sm font-medium text-gray-700">Nota (1-5)</label>
                            <input type="number" id="rating" name="rating" min="1" max="5" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="comment" class="block text-sm font-medium text-gray-700">Comentário</label>
                            <textarea id="comment" name="comment" rows="4" class="mt-1 block w-full"></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">
                            Enviar Avaliação
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
