<?php
  class UserAction extends Action{
    const USER_ACCOUNT = 2;
    const USER_PRESIDENT = 1;
    const USER_ROOT = 0;
    const USER_NOT_LOGIN = -1;
    const USER_REGISTER_SUCCESS = 0;
    const USER_REGISTER_FAIL = 1;
    public function index(){
      if( $this->check_log_state() == self::USER_ACCOUNT ){

      }
      else if( $this->check_log_state() == self::USER_PRESIDENT ){

      }
      else{

      }
    }

    public function register(){
      if( isset($_POST['user_name']) && isset($_POST['user_pwd']) && isset( $_POST['anth'] ) && isset( $_POST['school_id'] ) && isset( $_POST['user_account']) ){
        $user = M('user');
        $data['user_name'] = $_POST['user_name'] ;
        $data['user_pwd'] = $_POST['user_pwd'];
        $data['user_account'] = $_POST['user_account'];
        $data['auth'] = $_POST['auth'];
        $data['school_id'] = $_POST['school_id'];
        if( $user->add($data) ){
          return self::USER_REGISTER_SUCCESS;
        }
        return self::USER_REGISTER_FAIL;
      }
      else{
        return self::USER_REGISTER_FAIL;
      }
    }

    public function login(){
      if( isset($_POST['user_account']) && isset( $_POST['user_pwd']) ){
        $map['user_pwd'] = $_POST['user_pwd'];
        $map['user_account'] = $_POST['user_account'];
        $user = M('user');
        $user_data = $user->where( $map )->select();
        if( $user_data != false ){
          $user_data = $user_data[0];
          $_SESSION['user_id'] = $user_data['user_id'];
          $_SESSION['user_name'] = $user_data['user_name'];
          $_SESSION['auth'] = $user_data['auth'];
          $_SESSION['school_id'] = $user_data['school_id'];
          $this->success("登陆成功",U("Common/index"));
        }
        else{
          $this->error('登陆失败');
        }
      }
      $this->error('登陆失败',U("Index/index"));
    }

    public function log_out(){
      $_SESSION['user_id'] = '';
      $_SESSION['user_name'] = '';
      $_SESSION['auth'] = '';
      $_SESSION['school_id'] = '';
      $this->success('注销成功','Index:index');
    }

    public function check_log_state(){
      if( isset( $_SESSION['user_id'] ) && isset( $_SESSION['user_name'] ) && isset( $_SESSION['auth'] ) ){
        return $_SESSION['auth'];    
      }
      else{
        return self::USER_NOT_LOGIN;
      }
    }
    
  }
?>