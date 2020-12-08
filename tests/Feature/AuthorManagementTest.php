<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    private function data()
    {
        return [
            'name' => $this->faker->name,
            'dob' => $this->faker->date()
        ];
    }
    /** @test */
    public function an_author_can_be_created()
    {
        $this->withoutExceptionHandling();

        // substituindo a data com o Carbon porquê, por algum motivo,
        // o set date do faker não funciona
        $newDate = Carbon::createFromFormat('Y/d/m', '1988/14/05')
            ->toDateTimeString();

        $this->post('/authors',
            array_merge($this->data(),
                ['dob' => $newDate]));

        $author = Author::all();

        $this->assertCount(1, $author);
        $this->assertInstanceOf(Carbon::class, $author->first()->dob);
        $this->assertEquals('1988/14/05', $author->first()->dob->format('Y/d/m'));
    }
}
