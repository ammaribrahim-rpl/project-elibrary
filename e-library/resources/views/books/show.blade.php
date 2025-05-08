@include('layouts.app')
@section('content')
    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-4 md:p-6">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6">
                    <a href="{{ route('books.index') }}"
                        class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0 p-6">
                            <img class="h-48 w-full object-cover md:w-48 rounded-md"
                                src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                                alt="Book cover">
                            @if(Auth::user()->isAdmin())
                            <div class="mt-4 flex flex-col space-y-2">
                                <a href="{{ route('books.edit', $book) }}"
                                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                    <i class="fas fa-edit mr-2"></i> Edit Book
                                </a>
                                <form action="{{ route('books.destroy', $book) }}" 
                                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-2"></i> Delete Book
                                </form>
                            </div>
                        </div>

                        <div class="p-6 md:p-8 w-full">
                            <h1 class="mt-1 text-2xl font-semibold text-gray-900">{{ $book->name }}</h1>

                            <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                                    <p class="mt-1 text-sm text-gray-900">{{ $book->publisher }}</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                                    <p class="mt-1 text-sm text-gray-900">{{ $book->publication_year }}</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                                    <p class="mt-1 text-sm text-gray-900">{{ $book->page_count }}</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">Deskripsi</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $book->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
@endsection
