@extends('layouts.app')
@section('content')
<!-- Main Content -->
<div class="flex flex-col flex-1 overflow-hidden">
    <!-- Page Content -->
    <main class="flex-1 overflow-y-auto bg-gray-100 p-4 md:p-6">
        <div class="max-w-screen-xl mx-auto w-full"> <!-- WRAPPER DIMULAI -->

            <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
                <div class="p-4 bg-white rounded-md shadow">
                    <div class="flex items-center">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Total Books</p>
                            <p class="text-lg font-semibold text-gray-700">{{ $totalBooks }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-md shadow">
                    <div class="flex items-center">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Total Users</p>
                            <p class="text-lg font-semibold text-gray-700">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 mb-6 bg-white rounded-md shadow">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-700">Book Collection</h2>
                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('books.create') }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i> Add New Book
                        </a>
                    @endif
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Nama Buku</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Penerbit</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Deskripsi</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Tahun Terbit</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($books as $book)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $book->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">{{ $book->publisher }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 truncate max-w-xs">{{ $book->description }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">{{ $book->publication_year }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('books.show', $book) }}"
                                            class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></a>

                                        @if (Auth::user()->isAdmin)
                                            <a href="{{ route('books.edit', $book) }}"
                                                class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('books.destroy', $book) }}" method="POST"
                                                class="inline"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Tidak ada buku yang tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                    <div class="flex items-center">
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">42</span> results
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                </div>
            </div>

        </div> <!-- WRAPPER SELESAI -->
    </main>
</div>
@endsection