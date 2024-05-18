@extends("layouts.admin.main")
@section("content")
<div>
    @include("layouts.admin.partials.flash")
    <div class="p-4 bg-white rounded-lg dark:bg-gray-800 md:w-1/2 lg:w-3/4">
        <div class="relative overflow-x-auto">
            <div class="w-full flex items-end justify-between p-4">
                <span class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    <h1 class="text-2xl">Daftar User</h1>
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Daftar User
                    </p>
                </span>

                <form class="" method="get">
                    <label for="table-search" class="sr-only">Search</label>
                    <input name="search" value="{{ request()->search }}" type="text" placeholder="Cari..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </form>
            </div>
            <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="block w-fit px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jurusan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fakultas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="">Aksi</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->major->name }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->major->faculty->name }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2 items-center w-full">

                                <form action="{{route("admin.major.destroy", $user->id)}}" method="POST" class="h-fit mt-3">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline w-4 h-auto">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 6V5.2C16 4.0799 16 3.51984 15.782 3.09202C15.5903 2.71569 15.2843 2.40973 14.908 2.21799C14.4802 2 13.9201 2 12.8 2H11.2C10.0799 2 9.51984 2 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8 3.51984 8 4.0799 8 5.2V6M10 11.5V16.5M14 11.5V16.5M3 6H21M19 6V17.2C19 18.8802 19 19.7202 18.673 20.362C18.3854 20.9265 17.9265 21.3854 17.362 21.673C16.7202 22 15.8802 22 14.2 22H9.8C8.11984 22 7.27976 22 6.63803 21.673C6.07354 21.3854 5.6146 20.9265 5.32698 20.362C5 19.7202 5 18.8802 5 17.2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan=5 class="text-center py-3 text-gray-400">
                            Tidak ada data
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-8">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

@endSection
