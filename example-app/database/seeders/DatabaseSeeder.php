<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            seedCompanies::class,
            seedTrainers::class,
            seedCategories::class,
            seedCompany_has_category::class,
            ClassSeeder::class,
            CourseSeeder::class,
            CoursecatalogSeeder::class,
            CoursesCatalogHasSemesterSeeder::class,
            DiaryDateSeeder::class,
            DiarySeeder::class,
            DiaryWeekSeeder::class,
            FacultySeeder::class,
            SemesterSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            user::class,
            group::class,
            permission::class,
            user_has_group::class,
            user_has_permission::class,
            group_has_permission::class,
        ]);
    }
}
