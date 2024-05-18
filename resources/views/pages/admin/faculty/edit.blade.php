@extends("layouts.admin.main")
@section("content")
<div class="w-full">
    <div class="w-full">
        <div class="w-full h-fit md:w-1/3 lg:w-1/2 mx-auto bg-white p-4 rounded-xl">
            <div class="w-full  text-center mb-2 border-b">
                <h1 class="text-2xl font-bold">Edit Fakultas {{ $faculty->name }}</h1>
            </div>
            <form action="{{ route("admin.faculty.update", $faculty->id) }}" method="post">
                @method("PUT")
                @csrf
                <div class="flex flex-col justify-between bg">
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">Nama Fakultas</label>
                        <input value="{{ old("name", $faculty->name) }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Fakultas" required />
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
