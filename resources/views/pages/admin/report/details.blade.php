@extends('layouts.admin.main')
@section("content")
<div>
    <div>
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex items-start mb-3 justify-between">
                <div>
                    <h1>
                        {{$report->major->name}} - Fakultas {{$report->major->faculty->name}}
                    </h1>
                    <div>
                        <p class="text-sm text-gray-500">
                            Dibuat pada {{ $report->created_at->diffForHumans() }}
                        </p>
                        <!-- if update and created at not same -->
                        @if ($report->created_at != $report->updated_at)
                        <p class="text-sm text-gray-500">
                            Update pada {{ $report->updated_at->diffForHumans() }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="flex">
                    @switch($report->status)
                    @case("done")
                    <p class="capitalize block bg-indigo-100 hover:bg-indigo-200 text-indigo-600 text-xs py-1 px-3 rounded-full">
                        {{ $report->status }}
                    </p>
                    @break
                    @case("canceled")
                    <p class="capitalize block bg-red-100 hover:bg-red-200 text-red-600 text-xs py-1 px-3 rounded-full">
                        {{ $report->status }}
                    </p>
                    @break
                    @default
                    <p class="capitalize block bg-orange-100 hover:bg-orange-200 text-orange-600 text-xs py-1 px-3 rounded-full">
                        {{ $report->status }}
                    </p>
                    @endswitch

                    <div>

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="" type="button">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-indigo-600 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                            <ul class="w-full py-2 text-sm text-white" aria-labelledby="dropdownDelayButton">
                                @foreach ($finalStts as $stts)
                                <li class="w-full">
                                    <form class="w-full" action="{{ route('admin.report.update', $report->id) }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="status" value="{{$stts}}">
                                        <button type="submit" class="text-left w-full capitalize block px-4 py-2 hover:bg-indigo-500">{{$stts}}</button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <h5 class="capitalize mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$report->name}}</h5>
            <p class="capitalize font-normal text-gray-700 dark:text-gray-400">
                {{$report->description}}
            </p>
        </div>
    </div>

</div>
@endsection
