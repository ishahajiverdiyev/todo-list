<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Route::post("insert","home/Insert");
Route::post("add-info","home/addInfo");
Route::get("calculate","home/calculate");
Route::get("getAll","home/getAll");
Route::get("deleteItem/{id}","home/deleteItem/$1");
Route::get("edit/{id}","home/edit/$1");
// Route::get("table","home/table");
Route::prefix("taks", function(){
  Route::get("list-live","home/listLive");
  Route::put("{id}/update","home/updateItem/$1");
});


Route::prefix("test", function(){
  Route::get("route","test/route",['as' => 'test']); // => Route::named('test')
  // Route::get("route/{id}","test/routeByID/$1")->where("id", '[0-9]+');
  // Route::get("route/{id}/{name}","test/routeByMultiParams/$1/$2")->where(["id" => "[0-9]+", "name" => "(:any)"]);

  Route::get("route-sub","sub/sub2/sub3/home/index",['before' => function(){
    if ("authed" === "not authed") {
      echo "not authed";
      die;
    }
  }]);
});
