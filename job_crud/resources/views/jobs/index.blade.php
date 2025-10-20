@extends('layouts.app')

@section('content')
<h1>All Jobs</h1>

<!-- Search Form -->
<form action="{{ route('jobs.search') }}" method="GET" class="mb-3 d-flex">
    <input 
        type="text" 
        name="query" 
        value="{{ isset($query) ? $query : '' }}" 
        placeholder="Search jobs..." 
        class="form-control me-2"
    >
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<!-- Jobs Table -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Title</th>
      <th>Company</th>
      <th>Location</th>
      <th>Salary</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($jobs as $job)
      <tr>
        <td>{{ $job->title }}</td>
        <td>{{ $job->company }}</td>
        <td>{{ $job->location }}</td>
        <td>{{ $job->salary }}</td>
        <td>
          <a href="{{ route('jobs.show', $job) }}" class="btn btn-sm btn-info">View</a>
          <a href="{{ route('jobs.edit', $job) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="5">No jobs found.</td></tr>
    @endforelse
  </tbody>
</table>

<!-- Pagination -->
{{ $jobs->links() }}

@endsection
