<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplatesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */

    public function a_user_can_create_a_template()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->sentence
            , 'excerpt' => $this->faker->sentence
            , 'template' => $this->faker->paragraph
        ];


        $this->post('/templates', $attributes)->assertRedirect('/templates');

        $this->assertdatabaseHas('templates', $attributes );

        $this->get('/templates')->assertSee($attributes['title']);

    }

}
