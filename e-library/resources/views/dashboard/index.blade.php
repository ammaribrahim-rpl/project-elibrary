@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-4 md:p-6">
            <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
                <div class="p-4 bg-white rounded-md shadow">
                    <div class="flex items-center">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Total Books</p>
                            <p class="text-lg font-semibold text-gray-700">1,257</p>
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
                            <p class="text-lg font-semibold text-gray-700">432</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-md shadow">
                    <div class="flex items-center">
                        <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Books Borrowed</p>
                            <p class="text-lg font-semibold text-gray-700">89</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 mb-6 bg-white rounded-md shadow">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-700">Book Collection</h2>
                    <a href="create.html"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                        <i class="fas fa-plus mr-2"></i> Add New Book
                    </a>
                </div>
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
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Harry Potter and the Philosopher's
                                        Stone</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">Bloomsbury Publishing</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500 truncate max-w-xs">Harry Potter, a young wizard
                                        discovers his magical heritage...</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">1997</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="show.html" class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">To Kill a Mockingbird</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">J. B. Lippincott & Co.</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500 truncate max-w-xs">The story of young Scout Finch
                                        and her father, a lawyer defending a black man...</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">1960</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="show.html" class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">The Great Gatsby</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">Charles Scribner's Sons</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500 truncate max-w-xs">A novel about the mysterious
                                        millionaire Jay Gatsby and his obsession with Daisy Buchanan...</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">1925</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="show.html" class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">1984</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">Secker & Warburg</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500 truncate max-w-xs">A dystopian novel set in a
                                        totalitarian society where critical thought is suppressed...</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">1949</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="show.html" class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Pride and Prejudice</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">T. Egerton, Whitehall</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500 truncate max-w-xs">A romantic novel following the
                                        character development of Elizabeth Bennet...</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">1813</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="show.html" class="text-blue-600 hover:text-blue-900 mr-3"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                    <div class="flex items-center">
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span
                                class="font-medium">42</span> results
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
        </main>
    </div>
    </div>
</body>

</html>
@endsection