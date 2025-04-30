@include('layouts.app')
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
            <div class="max-w-4xl mx-auto">
                <div class="mb-6">
                    <a href="dashboard.html"
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

                            <div class="mt-4 flex flex-col space-y-2">
                                <a href="#"
                                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                    <i class="fas fa-edit mr-2"></i> Edit Book
                                </a>
                                <button
                                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-2"></i> Delete Book
                                </button>
                            </div>
                        </div>

                        <div class="p-6 md:p-8 w-full">
                            <div class="uppercase tracking-wide text-sm text-blue-600 font-semibold">Book ID: BK-12345</div>
                            <h1 class="mt-1 text-2xl font-semibold text-gray-900">Harry Potter and the Philosopher's Stone
                            </h1>

                            <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                                    <p class="mt-1 text-sm text-gray-900">Bloomsbury Publishing</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                                    <p class="mt-1 text-sm text-gray-900">1997</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                                    <p class="mt-1 text-sm text-gray-900">223</p>
                                </div>

                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Status</h3>
                                    <p
                                        class="mt-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Available
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">Deskripsi</h3>
                                <p class="mt-1 text-sm text-gray-900">
                                    Harry Potter has never even heard of Hogwarts when the letters start dropping on the
                                    doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with
                                    a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on
                                    Harry's eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid
                                    bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at
                                    Hogwarts School of Witchcraft and Wizardry.
                                </p>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">Categories</h3>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        Fiction
                                    </span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        Fantasy
                                    </span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Young Adult
                                    </span>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-sm font-medium text-gray-500">Borrowing History</h3>
                                <div class="mt-2 overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    User</th>
                                                <th scope="col"
                                                    class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Borrowed Date</th>
                                                <th scope="col"
                                                    class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Return Date</th>
                                                <th scope="col"
                                                    class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">John Doe</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">2023-01-15</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">2023-01-29</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        Returned
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">Jane Smith</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">2022-11-10</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">2022-11-24</div>
                                                </td>
                                                <td class="px-4 py-3 whitespace-nowrap">
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        Returned
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        </div>
        </div>
    </body>

    </html>
@endsection
