@extends('layouts.admin.main')
@section('content')
<div>
    <div>
        <h1>
            Jumlah data
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="bg-indigo-500 p-4 rounded-xl">
                <div class="flex flex-col">
                    <h3 class="text-white text-base">Report</h3>
                    <h1 class="text-white text-3xl">{{ $report_count }}</h1>
                </div>
            </div>
            <div class="bg-indigo-500 p-4 rounded-xl">
                <div class="flex flex-col">
                    <h3 class="text-white text-base">Fakultas</h3>
                    <h1 class="text-white text-3xl">{{ $faculty_count }}</h1>
                </div>
            </div>
            <div class="bg-indigo-500 p-4 rounded-xl">
                <div class="flex flex-col">
                    <h3 class="text-white text-base">Jurusan</h3>
                    <h1 class="text-white text-3xl">{{ $major_count }}</h1>
                </div>
            </div>
            <div class="bg-indigo-500 p-4 rounded-xl">
                <div class="flex flex-col">
                    <h3 class="text-white text-base">Jumlah User</h3>
                    <h1 class="text-white text-3xl">{{ $user_count }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
