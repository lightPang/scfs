<?php
  class InfoAction extends CommonAction{
    public function index(){
      $student = M('student');
      $ctr = M('info_ctr');
      $info = M('info');
      //school id is to be used.
      $stu_arr = $student->select();
      //$data = $info->where('stu_id=2')->join( 'info_ctr on info.ctr_id = info_ctr.id')->select();
      //var_dump($data);
      $stu_data = array();
      
      foreach ($stu_arr as $stu) {
        $map['stu_id'] = $stu['stu_id'];
        $info_data = array();
        foreach ($ctr->select() as $ctr_item) {
          $map['ctr_id'] = $ctr_item['ctr_id'];
          $selected_item = $info->where($map)->select();
          $push_item['ctr_id'] = $ctr_item['ctr_id'];
          $push_item['content'] = '';
          $push_item['type'] = $ctr_item['type'];
          $push_item['school_id'] = $stu['school_id'];
          $push_item['stu_id'] = $stu['stu_id'];
          $push_item['info_id'] = 0;
          if( count( $selected_item ) != 0 ){
            $push_item['content'] = $selected_item[0]['content'];
            $push_item['info_id'] = $selected_item[0]['info_id'];
          }
          array_push( $info_data, $push_item );
        }
        #$info_data = $info->where($map)->join( 'info_ctr on info.ctr_id = info_ctr.ctr_id' )->select();
        //var_dump($info_data);
        //return;
        array_push($stu_data, $info_data);
      }
      $this->assign('body_data',$stu_data);
      unset($map);
      $map['school_id'] = 1;
      $head_data = $ctr->where($map)->select();
      $this->assign( 'head_data', $head_data );
      //print_r($head_data);
      $this->display('index');
    }

    public function save_data(){
      $content = $_POST['content'];
      $stu_id = $_POST['stu_id'];
      $ctr_id = $_POST['ctr_id'];
      $school_id = $_POST['school_id'];
      $info_id = $_POST['info_id'];
      $type = $_POST['type'];
      if( !isset( $content) or !isset($stu_id) or !isset($ctr_id) or !isset($school_id) or !isset($type))
      {
        $this->error('操作出错啦！', '__APP__/info');
        return;
      }
      $student = M('student');
      $info = M('info');
      $ctr = M('info_ctr');
      for( $i = 0 ; $i < count($stu_id) ; $i ++ ){

        if( $stu_id[$i] == '0'  ){
          $stu_data['school_id'] = $school_id;
          $stu_id[$i] = $student->add( $stu_data );
          
        }
        $ctr_len = count($ctr_id);
        for( $j = 0; $j < $ctr_len ; $j ++  ){
          $info_item['info_id'] = $info_id[ $i*$ctr_len + $j ];
          $info_item['ctr_id'] = $ctr_id[$j];
          $info_item['stu_id'] = $stu_id[$i];
          $info_item['content'] = $content[ $i*$ctr_len + $j];
          $query_info['info_id'] = $info_id[ $i*$ctr_len + $j ];
          //print_r( $info_item );
          //echo "<br/>";
          if( $type[ $j ] == 1 and !is_numeric( $info_item['content'] )){
            //echo $info_item['content']."stu id is ".$info_item['stu_id']."type id is " .$ctr_id[ $j ];
            if( $info_item['content'] == '' )
              $info_item['content'] = 0;
            else
              $this->error( "输入内容有误，请重新输入");
          }
          if( count($info->where($query_info)->select()) == 0 )
          {
            $info->add( $info_item );
          }
            
          else{
            $info->save( $info_item );
            //var_dump($info->where($query_info))->select();
          }
        }
      }
      $this->success( '保存成功！', "__APP__/info");
    }

    public function del_record(){
      $stu_id = $_GET['stu_id'];
      $student = M('student');
      $info = M('info');
      if( isset($stu_id) ){
        $map['stu_id'] = $stu_id;
        $info->where( $map )->delete();
        $student->where( $map )->delete();
        $this->success( "删除成功", '__APP__/index' );
      }
      else{
        $this->error( "操作失败", '__APP__/index' );
      }
    }
  }
?>