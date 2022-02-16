<?php
  use src\Route;

  // 형식은 Path@Controller@Function

  // get method
  Route::GET(
    '/@View@index',
    '/register@View@register',
    '/login@View@login',
    '/logout@User@logout',
    '/test/:id@View@test',
  );

  // post method
  Route::POST(
    '/register@User@register',
    '/login@User@login',
  );

  Route::init();