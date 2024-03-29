<?php defined('MAPLE') || exit('此檔案不允許讀取！');

Router::dir('api', function() {
  Router::get('admin/areaSubId/(id:num)')->controller('Admin@areaSubId');
  Router::get('admin/foodSubId/(id:num)')->controller('Admin@foodSubId');

  Router::get('shops/(shopId:num)/comments/(id:num)')->controller('ShopCommentReply@index');
  Router::post('shops/(shopId:num)/comments/(id:num)')->controller('ShopCommentReply@create');
});