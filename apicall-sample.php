API CALL GET : APIurl/deal/get_deal/<<Mumbai>> 
Controller

   /** Objective is to get deal for mobile 
    * @param string division 
    * @param string country  
    * @return array having data and status
    */
   public function get_deal($division = '') {
      $response = array('status' => 'error', 'data' => '');
      $this->load->model('deal_modal', '', TRUE);
      $post = $this->input->post();
      $nearby_id = '';
      $default_deal_division = 'india'; 
      if(!empty($division)){
         $default_deal_division = $division;
      }
      $deal_list = $this->deal_model->get_deal_data($default_deal_division);
       if (!empty($deal_list)) {
         foreach ($deal_list as $deal) {
             $date = date('d F, Y', strtotime($deal['deal_date']));
             $data[] = array(
               'deal_name' => $deal['name'],
               'deal_image' => $deal['url'],
               'deal_date' => $date
               );
             $response['status'] = 'done';
         }
         
      }
      $response = array('data' => $data);
      header('Content-Type: application/json');
      echo json_encode($response);
   }


Model


    /**
     * Objective is to get all deal data 
     * @param date $near_by from date
     * @param array having all deal list
     */
    function get_deal_data($near_by = '') {
        $deal_list = array();
        $where = array();
        $group_by = '';
        if ($near_by != '') {
           
            $where[] = " division = $near_by";
        }
        if (count($where) > 0) {
            $where = ' where ' . implode(' and ', $where);
        } else {
            $where = '';
        }
        $sql_get_deal = "select deal_id,deal_name 
            from deal  
                . " $where ";
        $sql_get_deal .= $group_by;
        $query_deal_list = $this->db->query($sql_get_deal);
        if ($query_deal_list->num_rows() > 0) {

            foreach ($query_deal_list->result() as $row) {
                
                   $deal_list[$row->deal_id] = array(
                    'name' => $row->name,
                    'domain' => $row->domain_name,
                    'registrant_email' => $row->email,
                    'phone' => $row->phone,
                    'tld' => $row->tld,
                    'fax' => $row->fax,
                );
                
            }
        }
        return $deal_list;
    }

