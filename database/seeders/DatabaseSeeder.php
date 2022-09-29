<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        \App\Models\User::factory(5)->create();

        \App\Models\Project::factory(5)->create();
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