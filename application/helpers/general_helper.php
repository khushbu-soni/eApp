<?php

function notification()
    {
$CI = get_instance();
        //$query= $CI->query("select * from `notification` where `timestamp` LIKE '".date('Y-m-d')."%'");
        $query= "select * from `notification` where `timestamp` LIKE '".date('Y-m-d')."%'";
        $row=manual_query($query);

       // print_r($this->db->last_query());
       
        $html= '';
        $html .="<b>$query->num_rows</b>";
        echo $html;
        return $query->row();
        // exit();
    }

function getdata($select, $table, $where = '', $group_by = '', $order_by = '', $limit = '') {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->getdata_mod($select, $table, $where, $group_by, $order_by, $limit);
}

function getdatajoin($select, $table, $join_table, $Join_coloumn, $join_type = '', $where = '', $group_by = '', $order_by = '', $limit = '') {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->getdatajoin_mod($select, $table, $where, $join_table, $Join_coloumn, $join_type);
}

function adddata($data, $table) {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->adddata_mod($data, $table);
}

function updatedata($data, $where, $table) {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->updatedata_mod($data, $where, $table);
}

function deletedata($table, $where) {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->deletedata_mod($table, $where);
}

function sort_select_data($arr, $key, $value) {
    if (sizeof($arr) > 0) {
        foreach ($arr as $a) {
            $new[$a[$key]] = $a[$value];
        }
    }
    return $new;
}

function select_query($query) {
    $CI = get_instance();
    $CI->load->model('common');
    return $CI->common->select_query_mod($query);
}



function send_transaction_mail($cust_email, $mer_email) {
    if (!empty($cust_email)) {
        $to[] = $cust_email;
    }
    if (!empty($mer_email)) {
        $to[] = $mer_email;
    }
    $sub = 'Payment Transaction';
    $msg = 'Payment Transaction Done Please check the Portal for Details';
    email_send($to, $sub, $msg, $cc = '', $bcc = '', $attach = '');
}

function email_send($to, $sub, $msg, $cc = '', $bcc = '', $attach = '') {
    $CI = get_instance();
    $email_conf = getdata('*', 'email_config', array('active' => 1));
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => $email_conf[0]['host'],
        'smtp_port' => $email_conf[0]['port'],
        'smtp_user' => $email_conf[0]['username'], // change it to yours
        'smtp_pass' => $email_conf[0]['password'], // change it to yours
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE);

    $CI->load->library('email', $config);
    $CI->email->from($email_conf[0]['from']);
    $CI->email->to($to);
    $CI->email->subject($sub);
    $CI->email->message($msg);

    if ($attach != "") {
        $CI->email->attach($attach);
    }
    if ($cc != "") {
        $CI->email->cc($cc);
    }
    if ($bcc != "") {
        $CI->email->bcc($bcc);
    }

    if (!$CI->email->send()) {
        echo $CI->email->print_debugger();
    }
}
