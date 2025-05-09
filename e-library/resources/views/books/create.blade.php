@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-4 md:p-6">
            <div class="mx-auto w-full max-w-full p-6">
                <div class="mb-6">
                    <a href="{{ route('books.index') }}"
                        class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
                    </a>
                </div>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="mb-6 text-xl font-semibold text-gray-800">Book Information</h2>

                    <form action="{{ route('books.store') }}" method="POST">
                        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nama
                                    Buku</label>
                                <input type="text" id="name" value="{{ old('name') }}" name="name"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan nama buku" required>
                            </div>

                            <div>
                                <label for="publisher" class="block mb-2 text-sm font-medium text-gray-700">Penerbit</label>
                                <input type="text" id="publisher" name="publisher" value="{{ old('publisher') }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan nama penerbit" required>
                            </div>

                            <div>
                                <label for="publication_year" class="block mb-2 text-sm font-medium text-gray-700">Tahun
                                    Terbit</label>
                                <input type="number" id="publication_year" name="publication_year" min="1800"
                                    value="{{ old('publication_year') }}" max="2099"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Masukkan tahun terbit" required>
                            </div>

                            <div>
                                <label for="page_count" class="block mb-2 text-sm font-medium text-gray-700">Jumlah
                                    Halaman</label>
                                <input type="number" id="page_count" name="page_count" min="1"
                                    value="{{ old('page_count') }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required placeholder="Masukkan jumlah halaman">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="description" name="description" rows="4"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required placeholder="Masukkan deskripsi buku">{{ old('description') }}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <a href="{{ route('books.index') }}"
                                class="px-4 py-2 mr-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
                                Cancel
                            </a>
                            <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                Save Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    </div>

@endsection
