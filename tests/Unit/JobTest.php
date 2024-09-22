<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    // Arrange Action Assert

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer
    ]);

    // Action and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    // Arrange Action Assert
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
