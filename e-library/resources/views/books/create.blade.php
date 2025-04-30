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
            <div class="mx-auto w-full max-w-full p-6">
                <div class="mb-6">
                    <a href="dashboard.html" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
                    </a>
                </div>
                
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="mb-6 text-xl font-semibold text-gray-800">Book Information</h2>
                    
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="book_name" class="block mb-2 text-sm font-medium text-gray-700">Nama Buku</label>
                                <input type="text" id="book_name" name="book_name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="publisher" class="block mb-2 text-sm font-medium text-gray-700">Penerbit</label>
                                <input type="text" id="publisher" name="publisher" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="publication_year" class="block mb-2 text-sm font-medium text-gray-700">Tahun Terbit</label>
                                <input type="number" id="publication_year" name="publication_year" min="1800" max="2099" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label for="page_count" class="block mb-2 text-sm font-medium text-gray-700">Jumlah Halaman</label>
                                <input type="number" id="page_count" name="page_count" min="1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <label for="cover_image" class="block mb-2 text-sm font-medium text-gray-700">Cover Image</label>
                            <div class="flex items-center">
                                <label class="flex flex-col items-center px-4 py-2 bg-white text-blue-500 rounded-md border border-blue-500 cursor-pointer hover:bg-blue-500 hover:text-white">
                                    <i class="fas fa-upload mr-2"></i>
                                    <span class="text-sm">Select file</span>
                                    <input type="file" class="hidden" id="cover_image" name="cover_image">
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="file_name">No file selected</span>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-700">Categories</label>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="fiction" name="categories[]" value="fiction" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="fiction" class="ml-2 text-sm text-gray-700">Fiction</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="non_fiction" name="categories[]" value="non_fiction" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="non_fiction" class="ml-2 text-sm text-gray-700">Non-Fiction</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="science" name="categories[]" value="science" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="science" class="ml-2 text-sm text-gray-700">Science</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="history" name="categories[]" value="history" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="history" class="ml-2 text-sm text-gray-700">History</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="biography" name="categories[]" value="biography" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="biography" class="ml-2 text-sm text-gray-700">Biography</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="fantasy" name="categories[]" value="fantasy" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="fantasy" class="ml-2 text-sm text-gray-700">Fantasy</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="mystery" name="categories[]" value="mystery" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="mystery" class="ml-2 text-sm text-gray-700">Mystery</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <a href="dashboard.html" class="px-4 py-2 mr-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
                                Cancel
                            </a>
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                Save Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    </div>
</body>
</html>
@endsection