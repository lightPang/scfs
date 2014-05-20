<?php
  class QueryAction extends CommonAction{
    public function index(){
      $ctr = M('info_ctr');
      //$map['ctr_id'] = 1;
      $map['school_id'] = 1;
      $head_data = $ctr->where($map)->select();
      $this->assign( 'head_data', $head_data );
      $this->display();
    }

    public function query_items(){
      $ctr_id = $_POST['checked'];
      $map['ctr_id'] = array('in',$ctr_id);
      $map['school_id'] = $_POST['school_id'];
      if( !isset( $_POST['school_id']) or !isset( $_POST['checked'] )){
        $this->error( '操作出错啦', '__APP__/Query');
      }
      else{
        $res_data = array();
        $student = M('student');
        $info = M('info');
        $stu_map['school_id'] = $_POST['school_id'];
        $stu_arr = $student->where( $stu_map ) -> select();
        foreach ($stu_arr as $stu_item) {
          $student_data = array();
          foreach ($ctr_id as $ctr_id_single ) {
            $info_map['ctr_id'] = $ctr_id_single;
            $info_map['stu_id'] = $stu_item['stu_id'];
            $info_data = $info->where( $info_map )->select();
            if( count($info_data) == 0 )
              $item['content'] = '';
            else
              $item['content'] = $info_data[0]['content'];
            array_push( $student_data, $item );
          }
          array_push( $res_data, $student_data );
        }

        $this->assign( 'body_data', $res_data );
         $ctr = M('info_ctr');
         //$map['ctr_id'] = 1;
         $th_data = $ctr->where($map)->select();
         //var_dump($th_data);
         $this->assign('th_data', $th_data);
         unset($map);
         $map['school_id'] = $_POST['school_id'];
         $head_data = $ctr->where($map)->select();
         $this->assign( 'head_data', $head_data );

         $this->display('index');
      }
    }


  }
?>