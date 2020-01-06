<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplatesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function only_authenticated_users_can_create_a_template()
    {
//        $this->withoutExceptionHandling();

        $attributes = factory('App\Template')->raw();
        $this->post('/templates', $attributes)->assertRedirect('login');
    }

    /** @test */

    public function a_user_can_create_a_template()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $attributes = [
            'title' => $this->faker->sentence
            , 'excerpt' => $this->faker->sentence
            , 'template' => $this->faker->paragraph
        ];


        $this->post('/templates', $attributes)->assertRedirect('/templates');

        $this->assertdatabaseHas('templates', $attributes );

        $this->get('/templates')->assertSee($attributes['title']);

    }

    /** @test */

    public function a_user_can_view_a_template()
    {
        $this->withoutExceptionHandling();

        $template = factory('App\Template')->create();
        $this->get($template->path())
            ->assertSee($template->title)
            ->assertSee($template->excerpt)
            ->assertSee($template->template);
    }

    /** @test */

    public function a_template_requires_a_title()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Template')->raw(['title' =>'']);
        $this->post('/templates', $attributes)->assertSessionHasErrors('title');
    }

    /** @test */

    public function a_template_requires_a_excerpt()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Template')->raw(['excerpt' =>'']);
        $this->post('/templates', $attributes)->assertSessionHasErrors('excerpt');
    }

    /** @test */

    public function a_template_requires_a_template()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory('App\Template')->raw(['template' =>'']);
        $this->post('/templates', $attributes)->assertSessionHasErrors('template');
    }

}
