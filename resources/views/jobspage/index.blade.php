@include('inc.navbar')
@extends('layouts.job')

<div class="container">
    <div class="row">
        @foreach ($sortedJobPostings as $job)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $job['jobPosting']->title }}</h2>
                        <p class="card-text">Location: {{ $job['jobPosting']->location }}</p>
                        <a href="{{ $job['jobPosting']->url }}" class="btn btn-primary" target="_blank">Apply Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
