<?php defined('MAPLE') || exit('此檔案不允許讀取！');

class Main extends AdminController {
  public function theme() {
    wtf(function() {
      return ['messages' => func_get_args()];
    });

    $params = Input::post();

    validator(function() use (&$params) {
      Validator::need($params, 'theme', '主題')->inEnum(['green' => 'green', 'blue' => 'blue']);
    });

    Session::setData('theme', $params['theme']);
    return ['messages' => 'OK'];
  }

  public function index() {
    return $this->view->with('currentUrl', Url::base('admin'));
  }
}
