<?php defined('MAPLE') || exit('此檔案不允許讀取！');

use AdminFormInput as FormInput;

echo $form->back();

echo $form->form(function($obj) {

  FormInput::create('名稱', 'name')
    ->need()
    ->focus();
});