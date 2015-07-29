<?php 
class User extends CI_Model {
    var $email = '';
    var $suc = '';
    var $cl_nume = '';
    var $name = '';

    function __construct() {
        parent::__construct();
    }
    
    function authenticate($email, $pass, $suc) {
            $db = $this->load->database($suc, true);
            $query = $db->query("SELECT cl_nume,cl_mail,cl_apel FROM clientes WHERE cl_mail='".$email."' AND cl_nume=".(int)$pass."");
            if($query->num_rows() == 1) {
                $row = $query->first_row();
                $this->email = $row->cl_mail;
                $this->cl_nume = $row->cl_nume;
                $this->name = $row->cl_apel;
                $this->suc = $suc;
                return true;
            }else{
                return false;
            }
    }
    
    function getAccountMovements($cl_nume, $suc) {
        $db = $this->load->database($suc, true);
        $query = $db->query("SELECT cc_fecha, cc_conce, cc_debe, cc_habe, cc_talo, cc_nuco, cc_tico FROM CCLI WHERE cc_clie='".$cl_nume."' AND DATEDIFF(mm,cc_fecha,GETDATE())<=1 ORDER BY cc_fecha");
        //echo $query->num_rows();die;
        if($query->num_rows() > 0) {
            return $query->result();
        }else{
            return '';
        }
    }
    
    function getAccountTotals($cl_nume, $suc) {
        $db = $this->load->database($suc, true);
        $query = $db->query("SELECT SUM(cc_debe) as cc_debe, SUM(cc_habe) as cc_habe FROM CCLI WHERE cc_clie='".$cl_nume."'");
        if($query->num_rows() == 1) {
            return $query->row();
        }else {
            return false;
        }
    }
}  
?>