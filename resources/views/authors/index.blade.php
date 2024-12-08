<x-app-layout>
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
                                <th class="border border-gray-300 px-4 py-2 text-start">Name</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Email</th>
                                <th class="border border-gray-300 px-4 py-2 text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item['id'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item['name'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item['email'] }}</td>
                                    <td class="border border-gray-300 py-2 flex-start gap-2">
                                        <form action="{{ route('authors.destroy', $item['id']) }}" method="POST"
                                            class="inline p-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 px-2 py-1 text-white rounded-xl">Hapus</button>
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

    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center z-50 hidden transition-opacity duration-300"
        id="modal">
        <!-- Modal Content -->
        <div class="bg-gray-800 bg-opacity-90 rounded-xl shadow-2xl w-full max-w-xl transform scale-95 transition-transform duration-300"
            id="modalContent">
            <!-- Modal Header -->
            <div class="px-6 py-4 flex justify-between items-center border-b border-gray-700">
                <h3 class="text-xl font-semibold text-white">Tambah Data</h3>
                <button class="text-gray-400 hover:text-gray-200 text-2xl" id="closeModal">
                    &times;
                </button>
            </div>
            <!-- Modal Body -->
            <div class="px-6 py-6">
                <form action="{{ url('authors') }}" method="POST">
                    @csrf
                    <!-- Name Input -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required
                            value="{{ old('name') }}"
                            class="mt-2 block dark:text-white  w-full px-4 py-3 border border-gray-600 rounded-lg shadow-inner focus:outline-none focus:ring-blue-500 focus:border-blue-500 bg-gray-700  sm:text-sm">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required
                            value="{{ old('email') }}"
                            class="mt-2 dark:text-white block w-full px-4 py-3 border border-gray-600 rounded-lg shadow-inner focus:outline-none focus:ring-blue-500 focus:border-blue-500 bg-gray-700  sm:text-sm">
                        @error('email')
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
        });
    </script>
</x-app-layout>
