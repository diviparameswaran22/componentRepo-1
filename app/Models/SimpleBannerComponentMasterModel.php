<?php 
 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
  
class SimpleBannerComponentMasterModel extends Model
{
     protected $table = 'simple_banner_component';
     protected $allowedFields = ['sbc_header_text','sbc_sub_header_text','sbc_btn_text','sbc_background_image_path'];
     protected $primaryKey = 'sbc_component_id'; 
     
    public function __construct() {
        parent::__construct();
         $db = \Config\Database::connect();
          
    }

    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}
?>