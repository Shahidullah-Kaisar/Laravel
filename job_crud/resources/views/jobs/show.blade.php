@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Card -->
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4 text-center">
          <h3 class="mb-0">💼 {{ $job->title }}</h3>
        </div>
        <div class="card-body p-4">

          <!-- Job Info -->
          <div class="mb-3">
            <p class="mb-1 text-muted fw-semibold">🏢 Company</p>
            <h5>{{ $job->company }}</h5>
          </div>

          <div class="mb-3">
            <p class="mb-1 text-muted fw-semibold">📍 Location</p>
            <h6 class="text-dark">{{ $job->location ?? 'Not specified' }}</h6>
          </div>

          <div class="mb-3">
            <p class="mb-1 text-muted fw-semibold">💰 Salary</p>
            <h6 class="text-success">{{ $job->salary ?? 'Negotiable' }}</h6>
          </div>

          <div class="mb-4">
            <p class="mb-1 text-muted fw-semibold">📝 Description</p>
            <p class="border-start border-4 border-primary ps-3 text-secondary" style="white-space: pre-line;">
              {{ $job->description }}
            </p>
          </div>

          <!-- Buttons -->
          <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary px-4">
              ⬅ Back
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
