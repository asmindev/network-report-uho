@extends("layouts.admin.main")
@section("content")
<div>
    @include("layouts.admin.partials.flash")
    <div class="p-4 bg-white rounded-lg dark:bg-gray-800 md:w-1/2 lg:w-3/4">
        <div class="flex items-center justify-end">
            <a href="{{ route('admin.major.create') }}" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah Jurusan</a>
        </div>
        <div class="relative overflow-x-auto">
            <div class="w-full flex items-end justify-between p-4">
                <span class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    <h1 class="text-2xl">Daftar Jurusan</h1>
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Daftar Jurusan di Universitas Halu Oleo
                    </p>
                </span>

                <form class="" method="get">
                    <label for="table-search" class="sr-only">Search</label>
                    <input name="search" type="text" placeholder="Cari..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </form>
            </div>
            <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="block w-fit px-6 py-3">
                            #
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
                    @if (count($majors) > 0)
                    @foreach ($majors as $mjr)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $mjr->name }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $mjr->faculty->name }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2 items-center w-full">
                                <a href="{{ route('admin.major.edit', $mjr->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline w-4 h-auto">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 3.99998H6.8C5.11984 3.99998 4.27976 3.99998 3.63803 4.32696C3.07354 4.61458 2.6146 5.07353 2.32698 5.63801C2 6.27975 2 7.11983 2 8.79998V17.2C2 18.8801 2 19.7202 2.32698 20.362C2.6146 20.9264 3.07354 21.3854 3.63803 21.673C4.27976 22 5.11984 22 6.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9264 19.673 20.362C20 19.7202 20 18.8801 20 17.2V13M7.99997 16H9.67452C10.1637 16 10.4083 16 10.6385 15.9447C10.8425 15.8957 11.0376 15.8149 11.2166 15.7053C11.4184 15.5816 11.5914 15.4086 11.9373 15.0627L21.5 5.49998C22.3284 4.67156 22.3284 3.32841 21.5 2.49998C20.6716 1.67156 19.3284 1.67155 18.5 2.49998L8.93723 12.0627C8.59133 12.4086 8.41838 12.5816 8.29469 12.7834C8.18504 12.9624 8.10423 13.1574 8.05523 13.3615C7.99997 13.5917 7.99997 13.8363 7.99997 14.3255V16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                                <form action="{{route("admin.major.destroy", $mjr->id)}}" method="POST" class="h-fit mt-3">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline w-4 h-auto">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 6V5.2C16 4.0799 16 3.51984 15.782 3.09202C15.5903 2.71569 15.2843 2.40973 14.908 2.21799C14.4802 2 13.9201 2 12.8 2H11.2C10.0799 2 9.51984 2 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8 3.51984 8 4.0799 8 5.2V6M10 11.5V16.5M14 11.5V16.5M3 6H21M19 6V17.2C19 18.8802 19 19.7202 18.673 20.362C18.3854 20.9265 17.9265 21.3854 17.362 21.673C16.7202 22 15.8802 22 14.2 22H9.8C8.11984 22 7.27976 22 6.63803 21.673C6.07354 21.3854 5.6146 20.9265 5.32698 20.362C5 19.7202 5 18.8802 5 17.2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                                <button data-copy-id="{{ $mjr->id }}" data-copy-name="{{ $mjr->name }}" class="btn font-medium text-indigo-600 dark:text-indigo-500 hover:underline w-4 h-auto">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 15C4.06812 15 3.60218 15 3.23463 14.8478C2.74458 14.6448 2.35523 14.2554 2.15224 13.7654C2 13.3978 2 12.9319 2 12V5.2C2 4.0799 2 3.51984 2.21799 3.09202C2.40973 2.71569 2.71569 2.40973 3.09202 2.21799C3.51984 2 4.0799 2 5.2 2H12C12.9319 2 13.3978 2 13.7654 2.15224C14.2554 2.35523 14.6448 2.74458 14.8478 3.23463C15 3.60218 15 4.06812 15 5M12.2 22H18.8C19.9201 22 20.4802 22 20.908 21.782C21.2843 21.5903 21.5903 21.2843 21.782 20.908C22 20.4802 22 19.9201 22 18.8V12.2C22 11.0799 22 10.5198 21.782 10.092C21.5903 9.71569 21.2843 9.40973 20.908 9.21799C20.4802 9 19.9201 9 18.8 9H12.2C11.0799 9 10.5198 9 10.092 9.21799C9.71569 9.40973 9.40973 9.71569 9.21799 10.092C9 10.5198 9 11.0799 9 12.2V18.8C9 19.9201 9 20.4802 9.21799 20.908C9.40973 21.2843 9.71569 21.5903 10.092 21.782C10.5198 22 11.0799 22 12.2 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan=3 class="text-center py-3 text-gray-400">
                            Tidak ada data
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-4">
                {{ $majors->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    const copyButtons = document.querySelectorAll("[data-copy-id]");
    copyButtons.forEach((copyButton) => {
        copyButton.addEventListener("click", (e) => {
            const tickIcon = `<svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
 <path d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
 </svg>`
            const id = copyButton.getAttribute("data-copy-id");
            const copyIcon = copyButton.innerHTML;
            const name = copyButton.getAttribute("data-copy-name");
            const text = `Jurusan ${name}\nID Jurusan : ${id}`;
            navigator.clipboard.writeText(text);

            copyButton.innerHTML = tickIcon;
            setTimeout(() => {
                copyButton.innerHTML = copyIcon;
            }, 3000);
        });
    });
</script>

@endSection
