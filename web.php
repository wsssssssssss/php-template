<?php
// 형식은 Path@Controller@Function

// get method
$get(
  '/@View@index',
  '/register@View@register',
  '/login@View@login',
  '/logout@User@logout',
  '/test/:id@View@test',
);

// post method
$post(
  '/register@User@register',
  '/login@User@login',
);
