<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => 'taro',
          'mail' => 'taro@seeder',
          'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'hanako',
          'mail' => 'hanako@seeder',
          'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'sachiko',
          'mail' => 'sachiko@seeder',
          'age' => 56,
        ];
        DB::table('people')->insert($param);

    }
}
