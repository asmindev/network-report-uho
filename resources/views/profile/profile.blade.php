@extends('layouts.main')
@section('content')
<div class="w-full h-full md:w-1/2 mx-auto">
    <!-- flash -->
    <div class="mt-12 border p-6 rounded-xl bg-white">
        @include("layouts.admin.partials.flash")
        <h1 class="text-base">Profile</h1>
        <h2 class="text-2xl capitalize font-medium">{{ Auth::user()->name }} - {{ Auth::user()->major->name }}</h2>
        <p class="text-gray-500">{{ Auth::user()->email }} </p>

        <div class="mt-6">
            <a href="{{ route('profile.edit') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Profile</a>
        </div>
    </div>

    <div class="mt-4 border p-6 rounded-xl bg-white">
        <h1 class="text-base">Laporan</h1>
        <div class="mt-6">
            <a href="{{ route('report.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buat Laporan</a>
        </div>
        <div>
            @foreach ( $user->major->report as $rpt )
            <div class="mt-4 p-4 rounded-xl border">
                <div class="flex justify-between mb-4">
                    <div>

                        <h1 class="text-xl">{{ $rpt->name }}</h1>
                        <p class="text-gray-500 text-sm">{{ $rpt->created_at->diffForHumans() }}</p>
                    </div>
                    @switch($rpt->status)
                    @case("done")
                    <p class="capitalize block h-fit bg-indigo-100 hover:bg-indigo-200 text-indigo-600 text-xs py-1 px-3 rounded-full">
                        {{ $rpt->status }}
                    </p>
                    @break
                    @case("canceled")
                    <p class="capitalize block h-fit bg-red-100 hover:bg-red-200 text-red-600 text-xs py-1 px-3 rounded-full">
                        {{ $rpt->status }}
                    </p>
                    @break
                    @default
                    <p class="capitalize block h-fit bg-orange-100 hover:bg-orange-200 text-orange-600 text-xs py-1 px-3 rounded-full">
                        {{ $rpt->status }}
                    </p>
                    @endswitch
                </div>
                <p class="text-gray-600 text-base">
                    {{ $rpt->description }}
                </p>
                @if ($rpt->status != "canceled")
                <div class="mt-4">
                    <form action="{{ route('admin.report.update', $rpt->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="status" value="canceled" hidden>
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white text-sm py-0.5 px-4 rounded">Batalkan</button>
                    </form>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>


</div>
@endsection
