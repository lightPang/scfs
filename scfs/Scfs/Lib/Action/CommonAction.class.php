<?php
    class CommonAction extends Action{
        protected function check_log_state(){
            return true;
        }

        public function index(){
            //$school_id = $_GET['s_id'];
            $info_ctr = M('info_ctr');
            $info_data = $info_ctr->select();
            $this->assign('data', $info_data);
            //$this->assign( 'data', $res_arr);
            $this->display('index');
            //print_r($res_arr);
            //echo json_encode($res_arr,JSON_UNESCAPED_UNICODE);
        }
    }
?>