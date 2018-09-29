public function check_order_no_before() {
        $this->db->select('order_no');
        $this->db->from('retailer_order');
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get();
        $last_order_no = $query->row();
        //print_r($last_order_no);exit;
        if ($last_order_no != '') {
           	$order_value = explode('-',$last_order_no->order_no);
           	  $order_value = end($order_value);
           	 $order_value = str_pad($order_value + 1, 4, 0, STR_PAD_LEFT);
           	 return $order_no = 'R-'.$order_value;
           	 
        } else {
            return 'R-0001';
        }
    }
