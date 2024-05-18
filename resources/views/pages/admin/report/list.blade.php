@extends("layouts.admin.main")
@section("content")
<div>
    @include("layouts.admin.partials.flash")
    <div class="p-4 bg-white rounded-lg dark:bg-gray-800 md:w-1/2 lg:w-3/4">
        <div class="relative overflow-x-auto">
            <div class="w-full flex items-end justify-between p-4">
                <span class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    <h1 class="text-2xl">Daftar Laporan</h1>
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Daftar Laporan Yang Telah Dibuat
                    </p>
                </span>
                <form class="max-w-lg mx-auto" method="get">
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                        <select name="category" id="search-dropdown" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                            <option value="name">Nama Laporan</option>
                            <option value="major">Jurusan</option>
                            <option value="status">Status</option>
                        </select>
                        <div class="relative w-full">
                            <input value="{{ request()->get('search') }}" name="search" type="search" id="search-dropdown" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Cari..." />
                        </div>
                    </div>
                </form>
            </div>
            <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="block w-fit py-3">
                            #
                        </th>
                        <th scope="col" class="py-3">
                            Nama
                        </th>
                        <th scope="col" class="py-3">
                            Jurusan
                        </th>
                        <th>
                            Status
                        </th>
                        <th scope="col" class="py-3">
                            <span class="">Aksi</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($reports) > 0)
                    @foreach ($reports as $rpt)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if($rpt->is_read)
                            {{ $rpt->name }}
                            @else
                            <span class="block relative w-fit">
                                {{ $rpt->name }}
                                <span class="absolute top-1 -right-4 w-2 h-2 bg-indigo-600 rounded-full flex items-center justify-center after:block after after:w-1 after:h-1 after:ring after:ring-indigo-600 after:rounded-full after:animate-ping" />
                            </span>
                            @endif
                        </td>
                        <td scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $rpt->major->name }}
                        </td>
                        <td scope="row" class="text-left py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @switch($rpt->status)
                            @case("done")
                            <p class="capitalize block w-fit bg-indigo-100 hover:bg-indigo-200 text-indigo-600 text-xs py-1 px-3 rounded-full">
                                {{ $rpt->status }}
                            </p>
                            @break
                            @case("canceled")
                            <p class="capitalize w-fit block bg-red-100 hover:bg-red-200 text-red-600 text-xs py-1 px-3 rounded-full">
                                {{ $rpt->status }}
                            </p>
                            @break
                            @default
                            <p class="capitalize w-fit block bg-orange-100 hover:bg-orange-200 text-orange-600 text-xs py-1 px-3 rounded-full">
                                {{ $rpt->status }}
                            </p>
                            @endswitch
                        </td>
                        <td class="py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.report.details', $rpt->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan=4 class="text-center py-3 text-gray-400">
                            Tidak ada data
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-8">
                {{ $reports->links() }}
            </div>
        </div>

    </div>
</div>

@endSection
