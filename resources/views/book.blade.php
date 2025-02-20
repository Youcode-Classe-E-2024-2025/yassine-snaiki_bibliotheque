<x-layout>
    <x-slot name="heading">
        Book Details
    </x-slot>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="md:flex">
            <!-- Book Image -->
            <div class="md:w-1/3">
                <div class="h-96 w-full overflow-hidden">
                    <img src="{{ $book->image }}" 
                         alt="{{ $book->title }}" 
                         class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Book Information -->
            <div class="md:w-2/3 p-8">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $book->title }}</h1>
                    <p class="text-xl text-gray-600">by {{ $book->author }}</p>
                </div>

                @if($book->description)
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Description</h2>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $book->description }}
                        </p>
                    </div>
                @endif

                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Details</h2>
                  
                </div>

                <div class="flex space-x-4">
                    <form method="POST" action="/borrow">
                        @csrf
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        @if ($book->user_id)
                        <div 
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-red-100 rounded-md  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        reserved
                       </div>
                        @else
                        <button 
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-green-100 rounded-md hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        borrow
                       </button>
                        @endif
                    </form>
                    <a href="/" 
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Back to Library
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
</x-layout>