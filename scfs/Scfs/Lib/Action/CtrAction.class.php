<?php
  class CtrAction extends CommonAction{
    public function savectr(){
      $title = $_POST['title'];
      $type = $_POST['type'];
      $id = $_POST['id'];
      $school_id = $_POST['school_id'];
      $info_ctr = M('info_ctr');
      for( $i = 0 ; $i < count($id) ; $i ++ ){
        $data['id'] = $id[$i];
        $data['title'] = $title[$i];
        $data['type'] = $type[$i];
        $data['school_id'] = $school_id;
        if( $data['id'] != 0 ){
          $map['ctr_id'] = $id[$i];
          $ctr_item = $info_ctr->where( $map )->select()[0];
          if( $ctr_item['type'] == 0 && $data['type'] == 1 ){
            $this->error("无法将文本转化为数字存储",'__APP__/Common/index');
          }
        }
        if( $data['id'] == 0 )
        {
          $info_ctr->add($data);
        }
        else
          $info_ctr->save($data);
      }

      $this->success( '保存成功' , '__APP__/Common/index');
    }

    public function del_ctr(){
      $id = $_GET['id'];
      $ctr_info = M('info_ctr');
      $info = M('info');

      if( isset($id) ){
        $map['ctr_id'] = $id;
        $condition['ctr_id'];
        $ctr_data = $ctr_info->where( $map )->select();
        $ctr_data = $ctr_data[0];
        if( $ctr_data['title'] == '姓名' ){
          $this->error( '此属性不可被删除' ,'__APP__/Common' );
        }
        $info->where( $condition )->delete();
        if( $ctr_info->where( $map )->delete() )
          $this->success( '删除成功' , '__APP__/Common/index');
        else{
          $this->success( '操作失败' , '__APP__/Common/index');
        }
      }
      else{
        $this->success( '操作失败' , '__APP__/Common/index');
      }
    }
  }
?>