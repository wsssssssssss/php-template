<?php
// 형식은 Path@Controller@Function

// get method
$get(
  '/@View@index',
  '/register@View@register',
  '/login@View@login',
  '/logout@User@logout',
  '/album@View@album',
  '/list@View@list',
  '/insertcul@View@insertcul',
  '/culdetail@View@culdetail',
  '/culdelete@View@culdelete',
  '/calendar@View@calendar',
  '/year@View@year',
  '/insertsch@View@insertsch',
  '/showdetail@View@showdetail',
  '/showdelete@View@showdelete',
  '/test/:id@View@test',
);

// post method
$post(
  '/register@User@register',
  '/insertcul@View@insertculPro',
  '/culdetail@View@culupdate',
  '/insertsch@View@insertschPro',
  '/showdetail@View@showupdate',
  '/login@User@login',
);
