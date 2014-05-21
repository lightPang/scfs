<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
      $userAc = A('User');;
      if( $userAc->check_log_state() == $userAc::USER_NOT_LOGIN ){
        $this->display();
      }
      else{
        $this->redirect('Common/index', array(), 0,'页面跳转中~');
      }
    }
}