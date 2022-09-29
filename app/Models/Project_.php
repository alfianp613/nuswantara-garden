<?php

namespace App\Models;



class Project
{
    private static $project_post = [
        [
            "title" => "Project 1",
            "status" => "Perencanaan",
            "slug" => "project-1",
            "namapetani" => "Ujang",
            "danaterkumpul" => 300000,
            "targetdana" => 50000000,
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, fugit
            laudantium? A blanditiis eaque magnam ea quaerat autem modi, nihil quas porro
            similique minima tenetur quis itaque voluptas, aperiam cum aut beatae atque
            debitis! Soluta, aut optio temporibus obcaecati reiciendis molestias facilis
            explicabo id maiores asperiores porro omnis, vel ad?
            "],
            [
                "title" => "Project 2",
                "status" => "Perencanaan",
                "slug" => "project-2",
                "namapetani" => "Budi",
                "danaterkumpul" => 100000,
                "targetdana" => 40000000,
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, fugit
                laudantium? A blanditiis eaque magnam ea quaerat autem modi, nihil quas porro
                similique minima tenetur quis itaque voluptas, aperiam cum aut beatae atque
                debitis! Soluta, aut optio temporibus obcaecati reiciendis molestias facilis
                explicabo id maiores asperiores porro omnis, vel ad?
                "]
            ];

    public static function all(){
        return collect(self::$project_post);
    }

    public static function find($slug){
        $project = static::all();
        return $project->firstWhere("slug",$slug);
    }
}