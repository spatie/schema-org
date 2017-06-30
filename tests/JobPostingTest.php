<?php

namespace Spatie\Skeleton\Test;

use Spatie\SchemaOrg\Schema;
use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\JobPosting;
use Spatie\SchemaOrg\Exceptions\InvalidProperty;

class JobPostingTest extends TestCase
{
    /** @test */
    public function it_can_add_multiple_employment_types()
    {
        $jobPosting = new JobPosting();

        $jobPosting->employmentTypes('FULL_TIME', 'PART_TIME');

        $this->assertEquals(['FULL_TIME', 'PART_TIME'], $jobPosting->getProperty('employmentType'));
    }

    /** @test */
    public function it_can_add_multiple_job_locations()
    {
        $jobPosting = new JobPosting();

        $firstLocation = Schema::place()->name('First Location');
        $secondLocation = Schema::place()->name('Second Location');

        $jobPosting->jobLocations($firstLocation, $secondLocation);

        $this->assertEquals([$firstLocation, $secondLocation], $jobPosting->getProperty('jobLocation'));
    }

    /** @test */
    public function it_should_only_accept_job_locations_of_type_place()
    {
        $this->expectException(InvalidProperty::class);

        $jobPosting = new JobPosting();

        $jobPosting->jobLocations('a string');
    }
}
