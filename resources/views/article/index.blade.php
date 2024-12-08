<x-app-layout>
    <style>
        .note-editor .note-editable {
            color: #f9fafb;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="modalButton"
                        class="px-4 py-2 text-black bg-white rounded-lg dark:text-white dark:bg-gray-900">Tambah
                        Data</button>
                    <table class="table-auto w-full mt-5 border border-gray-300 border-collapse">
                        <thead>
                            <tr class="bg-gray-500">
                                <th class="border border-gray-300 px-4 py-2 text-start">ID</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Author</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Title</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Tag</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Category</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item['id'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->author['name'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item['title'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        @foreach ($item->tags as $itemTag)
                                            {{ $itemTag->name }}
                                        @endforeach
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        @foreach ($item->categories as $itemCategory)
                                            {{ $itemCategory->name }}
                                            {{ $loop->iteration > 1 ? ',' : '' }}
                                        @endforeach
                                    </td>
                                    <td class="border border-gray-300 py-2 flex-start gap-2">
                                        <form action="{{ route('article.destroy', $item['id']) }}" method="POST"
                                            class="inline p-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 px-2 py-1 text-white rounded-xl">Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-center" colspan="3">Belum Ada
                                        Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center z-50 hidden transition-opacity duration-300 overflow-auto"
        id="modal">
        <!-- Modal Content -->
        <div class="bg-gray-800 bg-opacity-90 rounded-xl shadow-2xl w-full max-w-xl transform scale-95 transition-transform duration-300 pt-20"
            id="modalContent">
            <!-- Modal Header -->
            <div class="px-6 py-4 flex justify-between items-center border-b border-gray-700">
                <h3 class="text-xl font-semibold text-white">Tambah Data</h3>
                <button class="text-gray-400 hover:text-gray-200 text-2xl" id="closeModal">
                    &times;
                </button>
            </div>
            <!-- Modal Body -->
            <div class="px-6 py-6 ">
                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <!-- Author Input -->
                    <div class="mb-4">
                        <label for="author_id" class="block text-sm font-medium text-gray-300">Author</label>
                        <select id="author_id" name="author_id" required
                            class="mt-2 block dark:text-white w-full px-4 py-3 border border-gray-600 rounded-lg shadow-inner focus:outline-none focus:ring-blue-500 focus:border-blue-500 bg-gray-700 sm:text-sm">
                            <option value="" disabled selected>Pilih Author</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Name Input -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter your Title" required
                            value="{{ old('title') }}"
                            class="mt-2 block dark:text-white  w-full px-4 py-3 border border-gray-600 rounded-lg shadow-inner focus:outline-none focus:ring-blue-500 focus:border-blue-500 bg-gray-700  sm:text-sm">
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Content Input -->
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-300">Content</label>
                        <textarea id="summernote" name="content"
                            class="bg-white text-black dark:bg-gray-800 dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg w-full p-3"></textarea>
                        @error('content')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Tags Checkbox -->
                    <div class="mb-4">
                        <label for="tags" class="block text-sm font-medium text-gray-300">Tags</label>
                        <div class="mt-2 space-y-2 flex items-center justify-start gap-5">
                            <!-- Checkbox Options -->
                            <div class="mt-2">
                                <input type="checkbox" id="tag1" name="tagId[]" value="1"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="tag1" class="ml-2 text-sm font-medium text-gray-300">Programming</label>
                            </div>
                            <div>
                                <input type="checkbox" id="tag2" name="tagId[]" value="2"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="tag2" class="ml-2 text-sm font-medium text-gray-300">Technology</label>
                            </div>
                            <div>
                                <input type="checkbox" id="tag3" name="tagId[]" value="3"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="tag3" class="ml-2 text-sm font-medium text-gray-300">Framework</label>
                            </div>
                        </div>
                        @error('tagId')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Categories Checkbox -->
                    <div class="mb-4">
                        <label for="categories" class="block text-sm font-medium text-gray-300">Categories</label>
                        <div class="mt-2 space-y-2 flex items-center justify-start gap-5">
                            <!-- Checkbox Options -->
                            <div class="mt-2">
                                <input type="checkbox" id="category1" name="categoryId[]" value="1"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="category1" class="ml-2 text-sm font-medium text-gray-300">Laravel</label>
                            </div>
                            <div>
                                <input type="checkbox" id="category2" name="categoryId[]" value="2"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="category2" class="ml-2 text-sm font-medium text-gray-300">PHP</label>
                            </div>
                            <div>
                                <input type="checkbox" id="category3" name="categoryId[]" value="3"
                                    class="h-4 w-4 text-blue-600 border-gray-600 rounded focus:ring-blue-500">
                                <label for="category3"
                                    class="ml-2 text-sm font-medium text-gray-300">CodeIgniter</label>
                            </div>
                        </div>
                        @error('categoryId')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 hover:shadow-lg focus:outline-none transition-all duration-300">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            // Open Modal
            $("#modalButton").click(function() {
                $("#modal").removeClass("hidden").addClass("flex");
                $("#modalContent").removeClass("scale-95").addClass("scale-100");
            });

            // Close Modal
            $("#closeModal").click(function() {
                $("#modal").addClass("hidden");
                $("#modalContent").removeClass("scale-100").addClass("scale-95");
            });

            // Close Modal on Background Click
            $("#modal").click(function(e) {
                if (e.target === this) {
                    $(this).addClass("hidden");
                    $("#modalContent").removeClass("scale-100").addClass("scale-95");
                }
            });
            $('#summernote').summernote({
                placeholder: 'Write your content here...',
                tabsize: 2,
                height: 200, // Tinggi editor
            });
        });
    </script>
</x-app-layout>
