<x-layout>
    <x-slot name="heading">
        Welcome to Our Library
    </x-slot>

    <div class="relative">
        <!-- Hero Section -->
        <div class="mb-12 text-center">
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Discover your next favorite book in our carefully curated collection
            </p>
        </div>

        <!-- Book Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach($books as $book)
                <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200">
                        <img src="{{ $book->image }}" 
                             alt="{{ $book->title }}" 
                             class="h-[150px] w-full object-cover object-center">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">
                            {{ $book->title }}
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">
                            by {{ $book->author }}
                        </p>
                        {{-- @if($book->description)
                            <p class="text-sm text-gray-600 line-clamp-3">
                                {{ $book->description }}
                            </p>
                        @endif --}}
                        <div class="mt-4">
                            <a href="/books/{{ $book->id }}" 
                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if($books->isEmpty())
            <div class="text-center py-12">
                <h3 class="mt-2 text-lg font-medium text-gray-900">No books found</h3>
                <p class="mt-1 text-sm text-gray-500">Start by adding some books to your library.</p>
            </div>
        @endif
    </div>
</x-layout>