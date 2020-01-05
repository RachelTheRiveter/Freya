<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TemplateTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function it_has_a_path()
    {
        $template = factory('App\Template')->create();

        $this->assertEquals('/templates/' . $template->id, $template->path());
    }
}
