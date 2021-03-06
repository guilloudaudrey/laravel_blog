<?php

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

// Route::resource('articles', 'ArticleController');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', 'ArticleController');


// Route::get('/articles', 'ArticleController@index');


// Route::get('/article/{index}', function($index){
//     $articles = [
//         [
//             "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
//             "year" => 2018,
//             "tags" => ["Lorem", "Ipsum"]
//         ],
//         [
//             "title" => "Vivamus id massa ac ex rutrum vestibulum.",
//             "year" => 2018,
//             "tags" => ["Lorem", "Massa"]
//         ],
//         [
//             "title" => "Nam purus justo, porttitor vel urna id, blandit aliquam orci.",
//             "year" => 2017,
//             "tags" => ["Ipsum", "Massa"]
//         ],
//     ];
    
//     if (!array_key_exists($index, $articles)){
//         return Redirect::to('/articles');
//     }
// $article = $articles[$index];

//     return view('article.article')->with('article', $article);
// })->where('index', '[0-9]+');


// Route::get('/articles/{year?}/{tag?}', function($year = null, $tags = null){
//     $articles = [
//         [
//             "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
//             "year" => 2018,
//             "tags" => ["Lorem", "Ipsum"]
//         ],
//         [
//             "title" => "Vivamus id massa ac ex rutrum vestibulum.",
//             "year" => 2018,
//             "tags" => ["Lorem", "Massa"]
//         ],
//         [
//             "title" => "Nam purus justo, porttitor vel urna id, blandit aliquam orci.",
//             "year" => 2017,
//             "tags" => ["Ipsum", "Massa"]
//         ],
//     ];

//     function unique_multidim_array($array, $key) { 
//         $temp_array = array(); 
//         $i = 0; 
//         $key_array = array(); 
        
//         foreach($array as $val) { 
//             if (!in_array($val[$key], $key_array)) { 
//                 $key_array[$i] = $val[$key]; 
//                 $temp_array[$i] = $val; 
//             } 
//             $i++; 
//         } 
//         return $temp_array; 
//     } 

//     $articlesArray = [];
//     foreach($articles as $article){
//         foreach($article as $key => $value){
//             if($key == "year"){
//                 if ($value == $year){
//                 $articlesArray[] = $article;
//                     if($key == "tags"){
//                         foreach($value as $items){
//                             if ($items == $tags){ 
//                                 $articlesArray[] = $article;
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//     }

//     $articles = unique_multidim_array($articlesArray,'year'); 
//     $articles = unique_multidim_array($articlesArray,'tags'); 
//     return view('article.articles')->with('articles', $articles);
// });