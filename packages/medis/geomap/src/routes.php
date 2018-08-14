<?php

Route::get('geomap', function(){
    return ['success'];
});

Route::get('geomap/add/{address}', 'medis\geomap\GeoController@add');

Route::get('geomap/delete/{id}', 'medis\geomap\GeoController@delete');