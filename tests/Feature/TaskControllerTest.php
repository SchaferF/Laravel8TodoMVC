<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }


    public function testShow()
    {
        $task = Task::factory()->make();

        $response = $this->get('/tasks', [$task->id]);

        $response->assertStatus(200);
    }

    public function testUnexistingTask()
    {
        $response = $this->get('/task/1445');

        $response->assertStatus(404);
    }

    public function testCreateNewTaskWithName()
    {
        $response = $this->post('/create', ['name' => 'new Task']);

        $response->assertStatus(200);
    }

    public function testCreateNewTaskWithoutName()
    {
        $response = $this->post('/create', ['name' => '']);

        $response->assertStatus(404);
    }
}
