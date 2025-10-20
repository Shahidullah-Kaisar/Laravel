@extends('layouts.app')

@section('content')
<h1>Edit Job</h1>

<form action="{{ route('jobs.update', $job) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Title</label>
    <input name="title" class="form-control" value="{{ old('title', $job->title) }}">
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label>Company</label>
    <input name="company" class="form-control" value="{{ old('company', $job->company) }}">
  </div>
  <div class="mb-3">
    <label>Location</label>
    <input name="location" class="form-control" value="{{ old('location', $job->location) }}">
  </div>
  <div class="mb-3">
    <label>Salary</label>
    <input name="salary" class="form-control" value="{{ old('salary', $job->salary) }}">
  </div>
  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $job->description) }}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
