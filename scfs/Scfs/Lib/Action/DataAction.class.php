<?php
  class DataAction extends CommonAction{
    public function index(){
      $map['school_id'] = $_POST['school_id'];
      $map['type'] = 1;
      $ctr = M('info_ctr');
      $info = M('info');
      if( !isset($_POST['school_id'] ))
        $map['school_id'] = 1;
      
      $data = $ctr->where($map)->select();

      $sum_arr = array();
      $total_sum = 0;

      foreach ($data as $th) {
        $map['ctr_id'] = $th['ctr_id'];
        $sum_data = $info->where( $map )->select();
        $sum = 0;
        foreach ($sum_data as $sum_item) {
          if( $sum_item != '' )
            $sum += $sum_item['content'];
        }
        $total_sum += $sum;
        $item['content'] = $sum;
        $item['title']  = $th['title'];
        array_push( $sum_arr, $item);
      }
      $this->assign('data', $sum_arr );
      $this->assign('total_sum' , $total_sum);
      $this->display();
    }
  }
?>