@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Card -->
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center rounded-top-4">
          <h3 class="mb-0">🧾 Create a New Job</h3>
        </div>
        <div class="card-body p-4">

          <form action="{{ route('jobs.store') }}" method="POST">
            @csrf

            <!-- Title -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Job Title <span class="text-danger">*</span></label>
              <input name="title" class="form-control form-control-lg" placeholder="Enter job title" value="{{ old('title') }}">
              @error('title') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <!-- Company -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Company Name <span class="text-danger">*</span></label>
              <input name="company" class="form-control form-control-lg" placeholder="Enter company name" value="{{ old('company') }}">
              @error('company') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <!-- Location -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Location</label>
              <input name="location" class="form-control form-control-lg" placeholder="Enter job location" value="{{ old('location') }}">
            </div>

            <!-- Salary -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Salary</label>
              <input name="salary" class="form-control form-control-lg" placeholder="e.g. 40000" value="{{ old('salary') }}">
            </div>

            <!-- Description -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Job Description</label>
              <textarea name="description" rows="4" class="form-control form-control-lg" placeholder="Write job details...">{{ old('description') }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between mt-4">
              <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary px-4">⬅ Back</a>
              <button type="submit" class="btn btn-primary px-5">💾 Save Job</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
