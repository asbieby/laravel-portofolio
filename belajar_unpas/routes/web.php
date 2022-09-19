<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sandhika Galih",
        "email" => "sandhikagalih@gmail.com",
        "image" => "123.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-pertama",
        "author" => "Sandika",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                    recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                    minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                    quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                    fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                    consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                    doloremque. Quaerat provident commodi consectetur veniam similique ad 
                    earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                    fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                    suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                    modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                    totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                    quasi aliquam eligendi, placeat qui corporis!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-kedua",
        "author" => "Bambang",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                    recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                    minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                    quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                    fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                    consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                    doloremque. Quaerat provident commodi consectetur veniam similique ad 
                    earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                    fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                    suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                    modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                    totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                    quasi aliquam eligendi, placeat qui corporis!"
    ],
];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
                $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

