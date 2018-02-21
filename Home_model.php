<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Eye View Design CMS module Ajax Model
 *
 * PHP version 5
 *
 * @category  CodeIgniter
 * @package   EVD CMS
 * @author    Frederico Carvalho
 * @copyright 2008 Mentes 100Limites
 * @version   0.1
*/

class home_model extends CI_Model 
{
	/**
	* Instanciar o CI
	*/
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function getCombo($sql,$value=false)
	{
		    $query=$this->db->query($sql);
			$str='';
			foreach($query->result() as $row)
			{
				$selected="";
				if($value)
				{
					if($value==$row->f1)
					{
						$selected=" selected='selected'";
					}
				}
				$str.="<option value='".$row->f1."'".$selected.">".$row->f2."</option>";
			}
			
			return $str;
	}

	function sendemail($email,$subject,$message){
        //echo $message;
         $config = Array(
              'protocol' =>  EMAIL_PROTOCOL,
              'smtp_host' => EMAIL_HOST,
              'smtp_port' => EMAIL_PORT,
              'smtp_user' => EMAIL_USERNAME,
              'smtp_pass' => EMAIL_PASSWORD,
              'mailtype'  => EMAIL_TYPE, 
              'charset'   => EMAIL_CHARSET,
              'wordwrap' =>  EMAIL_WORDWRAP,
              '_smtp_auth'=> true
          );
       $this->load->library('email',$config);
        $this->email->set_newline("\r\n"); 
        $this->load->library('email');
        $this->email->from(EMAIL_USERNAME, PROJECT_NAME);
        $this->email->subject($subject);
        $this->email->to($email);
        $this->email->message($message);
        $this->email->send();
      }

      function update($field, $id, $array, $table){
	//echo $id;
		$this->db->where($field, $id);
		$this->db->update($table, $array);
	}
	
	function insert($table, $array){
		$this->db->insert($table, $array);
		$id = $this->db->insert_id();
		return $id;
	}

	public function viewallperson()
	{
		$sql="select * from usr_people as usr_ppl left join usr_profession as usr_prof on usr_ppl.PPL_profession = usr_prof.pfs_id";
		$q=$this->db->query($sql);
		$result = $q->result();
		return $result;
		
	}
	
	public function getProductCoverPic($img_type,$prd_id)
	{
		$sql="SELECT `img_id`, `img_type`, `img_type_id`, `img_title`, `img_path`, `img_name`, `img_alternate_text` FROM `images` where img_type_id=".$prd_id." and img_type='".$img_type."' limit 1";
		$query =$this->db->query($sql);
		return $query->row();
	}
	
	public function getAllImages($img_type,$prd_id)
	{
		$sql="SELECT `img_id`, `img_type`, `img_type_id`, `img_title`, `img_path`, `img_name`, `img_alternate_text` FROM `images` where img_type_id=".$prd_id." and img_type='".$img_type."'";
		$query =$this->db->query($sql);
		return $query->result();
	}


	 function generateRandomString($length) 
	 {
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$randomNo = '';
		for ($i = 0; $i < $length; $i++) {
			$randomNo .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomNo;
	}


	function auto_version($file) {
    // $file = str_replace('http://', '', $file);
    // $file = str_replace('https://', '', $file);
    // $file = str_replace($_SERVER['SERVER_NAME'], '', $file);
    $full_file = $_SERVER['DOCUMENT_ROOT'] . $file;


    if (strpos($file, '/') !== 0 || !file_exists($full_file)) {
        $full_file = substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen($_SERVER['SCRIPT_NAME']));
        $full_file .= $file;
        if (!file_exists($full_file)) {
        	 $mtime = filemtime($file).filesize($file);
   			 $new_file = preg_replace('{\\.([^./]+)$}', ".\$1", $file."?v$mtime");
            return $new_file;
        }
    }
    // $mtime = filemtime($full_file);
    // $new_file = preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
    // return $new_file;
}
		public function validate_location($location)
    {
      if ($location == "") {
        return '-1';
      } else {
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($location).'&sensor=false');
    $geo = json_decode($geo, true);
    if ($geo['status'] == 'OK')
    {
    $origLat = $geo['results'][0]['geometry']['location']['lat'];
      $origLon = $geo['results'][0]['geometry']['location']['lng'];
    
    $location_id= $this->location($location,$origLat,$origLon);
    return $location_id;
    }
      else
      {
        return '0';

      }
      }
    	
}
public function location($location,$origLat,$origLon)
  {
        $sql="select  loc_id from location where  loc_lat='".$origLat."' and loc_long='".$origLon."' ";
        $query =$this->db->query($sql);
        $row =$query->row();
   
        if(!empty($row))
        {
          return $row->loc_id;
        }
        else
        {
         $data1 = array(
        'loc_name' => $location,
        'loc_long' => $origLon,
        'loc_lat' =>$origLat,
        'loc_crtd_dt' =>date('Y-m-d h:i:s'),
        
         );
     $this->db->insert('location', $data1);
     return $this->db->insert_id();
        }
     }
     public function generateRandomStringNum($length) {
    $characters = '0123456789';
    $randomNo = '';
    for ($i = 0; $i < $length; $i++) {
      $randomNo .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomNo;
  }
	}
?>