<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;



#############################################################
################## Searsh Routes   #########################
Route::post('/searsh','SershController@show')->name('searsh');


##############################################################


################  Products Routes#############################
Route::resource('/','ProductsController');


###############################################################

