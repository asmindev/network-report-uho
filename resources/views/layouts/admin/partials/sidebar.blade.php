 <div class="h-full">
     <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
         <div class="flex items-center justify-center bg-gray-100 rounded-xl">
             <a href="{{ route('admin.dashboard') }}" class="flex flex-col justify-center items-center ps-2.5 h-36">
                 <img class="w-1/3" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhxbt-SEw8JiUsYl-GRs8hykZzxhosYvbGUarF1S6XqTyOr-zSg8owoMo2H652mccgB1CrEt0SVVOMtMTWvB3jLIBeojw7hTwAtHYBuQFJaNWx_qImHIl690GdHQEZPBebuTkMSp8O0zwuX502ov_jdfWRVV9e5iQEtq4m9QeNN5Ld8kBdWgzCXQg/w314-h320/Universitas%20Halu%20Oleo%20(KoleksiLogo.com).png" alt="UHO Logo">
                 <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UHO</span>
             </a>
         </div>
         <ul class="font-medium divide-y">
             <li>
                 <a href="/admin/dashboard" class="flex items-center px-4 py-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                         <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                         <path d="M13.45 11.55l2.05 -2.05" />
                         <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                     </svg>
                     <span class="ms-3">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="{{route('admin.user')}}" class="flex items-center px-4 py-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 3.46776C17.4817 4.20411 18.5 5.73314 18.5 7.5C18.5 9.26686 17.4817 10.7959 16 11.5322M18 16.7664C19.5115 17.4503 20.8725 18.565 22 20M2 20C3.94649 17.5226 6.58918 16 9.5 16C12.4108 16 15.0535 17.5226 17 20M14 7.5C14 9.98528 11.9853 12 9.5 12C7.01472 12 5 9.98528 5 7.5C5 5.01472 7.01472 3 9.5 3C11.9853 3 14 5.01472 14 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <span class="ms-3">User</span>
                 </a>
             </li>
             <li>
                 <a href="/admin/laporan" class="flex items-center px-4 py-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-6 h-auto" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M3 2.5C3 2.22386 3.22386 2 3.5 2H9.08579C9.21839 2 9.34557 2.05268 9.43934 2.14645L11.8536 4.56066C11.9473 4.65443 12 4.78161 12 4.91421V12.5C12 12.7761 11.7761 13 11.5 13H3.5C3.22386 13 3 12.7761 3 12.5V2.5ZM3.5 1C2.67157 1 2 1.67157 2 2.5V12.5C2 13.3284 2.67157 14 3.5 14H11.5C12.3284 14 13 13.3284 13 12.5V4.91421C13 4.51639 12.842 4.13486 12.5607 3.85355L10.1464 1.43934C9.86514 1.15804 9.48361 1 9.08579 1H3.5ZM4.5 4C4.22386 4 4 4.22386 4 4.5C4 4.77614 4.22386 5 4.5 5H7.5C7.77614 5 8 4.77614 8 4.5C8 4.22386 7.77614 4 7.5 4H4.5ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8H10.5C10.7761 8 11 7.77614 11 7.5C11 7.22386 10.7761 7 10.5 7H4.5ZM4.5 10C4.22386 10 4 10.2239 4 10.5C4 10.7761 4.22386 11 4.5 11H10.5C10.7761 11 11 10.7761 11 10.5C11 10.2239 10.7761 10 10.5 10H4.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                     </svg>
                     <span class="ms-3">Laporan</span>
                 </a>
             </li>
             <li>
                 <button type="button" class="flex items-center w-full px-4 py-6 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-faculty">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                         <path d="M3 21l18 0" />
                         <path d="M9 8l1 0" />
                         <path d="M9 12l1 0" />
                         <path d="M9 16l1 0" />
                         <path d="M14 8l1 0" />
                         <path d="M14 12l1 0" />
                         <path d="M14 16l1 0" />
                         <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                     </svg>
                     <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                         Fakultas
                     </span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <ul id="dropdown-faculty" class="hidden py-2 space-y-2">
                     <li>
                         <a href="{{route('admin.faculty')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daftar Fakultas</a>
                     </li>
                     <li>
                         <a href="{{route('admin.faculty.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Fakultas</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <button type="button" class="flex items-center w-full px-4 py-6 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-major">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                         <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                         <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                         <path d="M9 8h6" />
                     </svg>
                     <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                         Jurusan
                     </span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                     </svg>
                 </button>
                 <ul id="dropdown-major" class="hidden py-2 space-y-2">
                     <li>
                         <a href="{{route('admin.major')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daftar Jurusan</a>
                     </li>
                     <li>
                         <a href="{{route('admin.major.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Jurusan</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="{{route('profile.edit')}}" class="flex items-center px-4 py-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <span class="ms-3">Profile</span>
                 </a>
             </li>
         </ul>
     </div>
 </div>
