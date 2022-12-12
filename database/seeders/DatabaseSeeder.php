<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use App\Models\Petani;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\User::factory(200)->create();

        $faker = Faker::create('id_ID');
        // $komoditasid = DB::table('komoditas')->pluck('kode_komoditas');
        // $kotaid = DB::table('kota')->pluck('id');

        // foreach (range(1,200) as $index) {
        //     $kota_id = $faker->randomElement($kotaid);
        //     $kota = DB::table('kota')->where('id',"=" ,$kota_id)->get();
        //     DB::table('petanis')->insert([
        //         'user_id' => $index,
        //         'tanggal_lahir' => $faker->date('Y-m-d') ,
        //         'no_telepon' => $faker->phoneNumber(),
        //         'nik'=>$faker->nik(),
        //         'kode_komoditas' => $faker->randomElement($komoditasid),
        //         'kode_propinsi' => $kota[0]->kode_propinsi,
        //         'kode_kota' => $kota_id,
        //         'alamat' => $faker->address()
        //     ]);
        // }

        // \App\Models\User::factory(100)->create();

        // $petani_id = DB::table('petanis')->pluck('id');
        // $status = ["Perencanaan","Berjalan","Selesai"];
        // $target = [10000000,20000000,30000000,40000000,50000000];

        // foreach (range(1,250) as $index) {
        //     DB::table('projects')->insert([
        //         "petaniid" => $faker->randomElement($petani_id),
        //         "title" => $faker->sentence(mt_rand(2,8)), 
        //         "slug" => $faker->slug(),
        //         "status_project" => $faker->randomElement($status),
        //         "dana_terkumpul" => 0,
        //         "dana_terambil" => 0,
        //         "target_pendanaan" => $faker->randomElement($target),
        //         "excerpt" => $faker->paragraph(30),
        //         "deskripsi_project" => $faker->paragraph(150),
        //         "created_at" => $faker->dateTimeBetween('-1 year', '-1 week')
        //     ]);
        // }

        // $projects_id = DB::table('projects')->pluck('id');

        // foreach (range(1,3000) as $index) {
        //     $project_id = $faker->randomElement($projects_id);
        //     $project = DB::table('projects')->where('id',"=" ,$project_id)->get();
        //     DB::table('payments')->insert([
        //         "userid" => $faker->numberBetween(201, 400),
        //         "projectid" => $project_id, 
        //         "nominal" => $faker->numberBetween(10000, $project[0]->target_pendanaan -  $project[0]->dana_terkumpul-1500000),
        //         "created_at" => $faker->dateTimeBetween($project[0]->created_at, '-1 week')
        //     ]);
        // }
        

        $projects_id = DB::table('projects')->pluck('id');
        foreach (range(1,2000) as $index) {
            $project_id = $faker->randomElement($projects_id);
            $project = DB::table('projects')->where('id',"=" ,$project_id)->get();
            DB::table('pencairans')->insert([
                "petaniid" => $project[0]->petaniid,
                "projectid" => $project_id, 
                "nominal" => $faker->numberBetween(10000, $project[0]->dana_terkumpul -  $project[0]->dana_terambil - 1500000),
                "created_at" => $faker->dateTimeBetween($project[0]->created_at, '-1 week')
            ]);
        }
        
        
       
        
        // Project::create([ "title" => "Project 1", "slug" =>
        // "project-1", "status_project"=> "Perencanaan", "nama_petani" => "Ujang",
        // "dana_terkumpul" => 300000, "target_pendanaan" => 50000000, "excerpt" => "Lorem
        // ipsum dolor sit amet consectetur adipisicing elit. Tenetur, fugit laudantium? A
        // blanditiis eaque magnam ea quaerat autem modi, nihil quas porro similique minima
        // tenetur quis itaque voluptas, aperiam cum aut beatae atque debitis! Soluta, aut
        // optio temporibus obcaecati reiciendis molestias facilis explicabo id maiores
        // asperiores porro omnis, vel ad? ", "deskripsi_project"=>"Lorem ipsum dolor sit
        // amet consectetur adipisicing elit. Atque, veritatis optio. Nihil saepe
        // consequuntur fugit, commodi vitae deserunt ducimus modi quibusdam alias
        // nesciunt. Repudiandae suscipit ex officia architecto ullam maiores molestias
        // inventore possimus magnam libero, blanditiis minima dolores sequi labore dolore
        // reprehenderit earum numquam doloribus, nisi quasi natus quam molestiae,
        // repellendus obcaecati! Debitis necessitatibus quidem dolore, illum mollitia
        // error eum illo nulla cum quae excepturi sint aut explicabo veritatis
        // exercitationem? Reiciendis ipsam odio explicabo iure voluptatem porro placeat
        // nisi error eveniet, sint odit iste, quae laborum quam ab nihil facilis delectus.
        // Illum vero, assumenda obcaecati harum quam delectus quidem dolor." ]);
       
        // Project::create([ "title" => "Project 2", "slug" => "project-2",
        // "status_project"=> "Perencanaan", "nama_petani" => "Budi", "dana_terkumpul" =>
        // 500000, "target_pendanaan" => 60000000, "excerpt" => "Lorem ipsum dolor sit amet
        // consectetur adipisicing elit. Tenetur, fugit laudantium? A blanditiis eaque
        // magnam ea quaerat autem modi, nihil quas porro similique minima tenetur quis
        // itaque voluptas, aperiam cum aut beatae atque debitis! Soluta, aut optio
        // temporibus obcaecati reiciendis molestias facilis explicabo id maiores
        // asperiores porro omnis, vel ad? ", "deskripsi_project"=>"Lorem ipsum dolor sit
        // amet consectetur adipisicing elit. Atque, veritatis optio. Nihil saepe
        // consequuntur fugit, commodi vitae deserunt ducimus modi quibusdam alias
        // nesciunt. Repudiandae suscipit ex officia architecto ullam maiores molestias
        // inventore possimus magnam libero, blanditiis minima dolores sequi labore dolore
        // reprehenderit earum numquam doloribus, nisi quasi natus quam molestiae,
        // repellendus obcaecati! Debitis necessitatibus quidem dolore, illum mollitia
        // error eum illo nulla cum quae excepturi sint aut explicabo veritatis
        // exercitationem? Reiciendis ipsam odio explicabo iure voluptatem porro placeat
        // nisi error eveniet, sint odit iste, quae laborum quam ab nihil facilis delectus.
        // Illum vero, assumenda obcaecati harum quam delectus quidem dolor." ]);
        
        // Project::create([ "title" => "Project 3", "slug" => "project-3",
        // "status_project"=> "Perencanaan", "nama_petani" => "Ilham", "dana_terkumpul" =>
        // 500000, "target_pendanaan" => 60000000, "excerpt" => "Lorem ipsum dolor sit amet
        // consectetur adipisicing elit. Tenetur, fugit laudantium? A blanditiis eaque
        // magnam ea quaerat autem modi, nihil quas porro similique minima tenetur quis
        // itaque voluptas, aperiam cum aut beatae atque debitis! Soluta, aut optio
        // temporibus obcaecati reiciendis molestias facilis explicabo id maiores
        // asperiores porro omnis, vel ad? ", "deskripsi_project"=>"Lorem ipsum dolor sit
        // amet consectetur adipisicing elit. Atque, veritatis optio. Nihil saepe
        // consequuntur fugit, commodi vitae deserunt ducimus modi quibusdam alias
        // nesciunt. Repudiandae suscipit ex officia architecto ullam maiores molestias
        // inventore possimus magnam libero, blanditiis minima dolores sequi labore dolore
        // reprehenderit earum numquam doloribus, nisi quasi natus quam molestiae,
        // repellendus obcaecati! Debitis necessitatibus quidem dolore, illum mollitia
        // error eum illo nulla cum quae excepturi sint aut explicabo veritatis
        // exercitationem? Reiciendis ipsam odio explicabo iure voluptatem porro placeat
        // nisi error eveniet, sint odit iste, quae laborum quam ab nihil facilis delectus.
        // Illum vero, assumenda obcaecati harum quam delectus quidem dolor." ]);
        
        // Project::create([ "title" => "Project 4", "slug" => "project-4",
        // "status_project"=> "Perencanaan", "nama_petani" => "Duaja", "dana_terkumpul" =>
        // 500000, "target_pendanaan" => 60000000, "excerpt" => "Lorem ipsum dolor sit amet
        // consectetur adipisicing elit. Tenetur, fugit laudantium? A blanditiis eaque
        // magnam ea quaerat autem modi, nihil quas porro similique minima tenetur quis
        // itaque voluptas, aperiam cum aut beatae atque debitis! Soluta, aut optio
        // temporibus obcaecati reiciendis molestias facilis explicabo id maiores
        // asperiores porro omnis, vel ad? ", "deskripsi_project"=>"Lorem ipsum dolor sit
        // amet consectetur adipisicing elit. Atque, veritatis optio. Nihil saepe
        // consequuntur fugit, commodi vitae deserunt ducimus modi quibusdam alias
        // nesciunt. Repudiandae suscipit ex officia architecto ullam maiores molestias
        // inventore possimus magnam libero, blanditiis minima dolores sequi labore dolore
        // reprehenderit earum numquam doloribus, nisi quasi natus quam molestiae,
        // repellendus obcaecati! Debitis necessitatibus quidem dolore, illum mollitia
        // error eum illo nulla cum quae excepturi sint aut explicabo veritatis
        // exercitationem? Reiciendis ipsam odio explicabo iure voluptatem porro placeat
        // nisi error eveniet, sint odit iste, quae laborum quam ab nihil facilis delectus.
        // Illum vero, assumenda obcaecati harum quam delectus quidem dolor." ]);
            }
}