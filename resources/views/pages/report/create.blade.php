@extends('layouts.main')
@section('content')
<div class="w-full flex min-h-screen items-center justify-center">
    <div class="w-1/2 mx-auto bg-white border p-6 rounded-xl">
        <div class="w-full text-3xl font-bold text-center my-4">
            <h1>
                Buat Laporan
            </h1>
        </div>
        <form action="{{ route('report.store') }}" method="post">
            @csrf
            <input type="hidden" name="faculty_id" value="{{ Auth::user()->major->faculty_id }}">
            <input type="hidden" name="major_id" value="{{ Auth::user()->major_id }}">
            <div class="w-full flex flex-col gap-2 mb-4">
                <label class="text-gray-600" for="name">Masukkan Nama</label>
                <input required type="text" name="name" class="border px-4 py-3 rounded-xl @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                <p class="error text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="text-gray-600" for="desc">Masukkan Deskripsi</label>
                <textarea required id="desc" name="description" class="rounded-xl @error('description') border-red-500 @enderror"> {{ old('description') }}</textarea>
                @error('description')
                <p class="error text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-xl mt-4 w-full">Submit</button>
            </div>
        </form>
    </div>
</div>
<script>
    const errors = document.querySelectorAll('.error')
    if (errors) {
        // remove element after 3 seconds
        setTimeout(() => {
            errors.forEach((error) => {
                error.remove()
            })
        }, 3000)
    }
</script>
@endsection
