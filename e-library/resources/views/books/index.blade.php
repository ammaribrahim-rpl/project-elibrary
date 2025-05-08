@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-4 md:p-6">

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
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Nama Buku</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Penerbit</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Deskripsi</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Tahun Terbit</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Actions</th>
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
                                        <div class="text-sm text-gray-500 truncate max-w-xs">{{ $book->description }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">{{ $book->publication_year }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('books.show', $book) }}"
                                            class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></a>

                                        @if (Auth::user()->isAdmin)
                                            <a href="{{ route('books.edit', $book) }}"
                                                class="text-green-600 hover:text-green-900 mr-3"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline"
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
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data buku</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <div class="p-6">
        {{ $books->links() }}
    </div>
    </div>
@endsection
