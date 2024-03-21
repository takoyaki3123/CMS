<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();
    $this->call([
      IdentitySeeder::class,
      UserSeeder::class,
      TeacherDetailSeeder::class,
      ClassType::class,
      ClassListModelSeeder::class,
      TeacherAssistantSeeder::class,
      StudentSelectClassSeeder::class,
      BoardModelSeeder::class,
      FileModelSeeder::class,
      TextBookSeeder::class,
      HomeWorkSeeder::class,
      GradeSeeder::class,
      NoteModelSeeder::class,
      GrpModelSeeder::class,

    ]);
    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
