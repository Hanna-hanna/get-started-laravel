@extends('layout')

@section('title', 'Edit Guitar')

@section('content')
<form action="{{ route('guitars.update', $guitar->id) }}" method="POST">
    @csrf 
    @method('PUT')  
    <div class="form-group">
        <label for="guitar-text">Title</label>
        <input type="text" name="title" id="title" 
        class="form-control @error('title') is-invalid @enderror"
        value="{{ $guitar->title }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $errors->first('title') }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" name="make" id="make" 
        class="form-control @error('make') is-invalid @enderror"
        value="{{ $guitar->make }}">
        @error('make')
            <div class="invalid-feedback">
                {{ $errors->first('make') }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="text" name="year" id="year" 
        class="form-control @error('year') is-invalid @enderror"
        value="{{ $guitar->year }}">
        @error('year')
            <div class="invalid-feedback">
                {{ $errors->first('year') }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" 
        class="form-control @error('description') is-invalid @enderror">{{ $guitar->description }}</textarea>
        @error('description')
            <div class="invalid-feedback">
                {{ $errors->first('description') }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Edit Guitar</button>
    </div>
</form>
@endsection

@section('scripts')
<script>
    //
</script>
@endsection