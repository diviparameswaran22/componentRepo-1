<?php 
 
namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\SimpleBannerComponentMasterModel;
  
class SimpleBannerComponentMaster extends Controller
{
  
    public function index()
    {   helper(['form', 'url']); 
        

        $model = new SimpleBannerComponentMasterModel();
        $data['simple_banner_component_details'] = $model->orderBy('sbc_component_id', 'DESC')->findAll();
        return view('components/simplebannercomponentList', $data);
    }    
 
  
    public function store()
    {  
        helper(['form', 'url']);
          
        $model = new SimpleBannerComponentMasterModel();
        $data['simple_banner_component_details'] = $model->orderBy('sbc_component_id', 'DESC')->first();
         
        foreach($data as $row){
            if (isset($row['sbc_component_id'])){
                $nextPageId=intval($row['sbc_component_id']+1); 
            }
            else
            {
                $nextPageId=1;
            }
        }
        $data = [
            'sbc_component_id' => $nextPageId,
            'sbc_header_text'  => $this->request->getVar('sbc_header_text'),
            'sbc_sub_header_text'  => $this->request->getVar('sbc_sub_header_text'),
            'sbc_btn_text'  => $this->request->getVar('sbc_btn_text'),
            'sbc_background_image_path'  => $this->request->getVar('sbc_background_image_path'),
            ];
            $save = $model->insert_data($data);
        if($save != false)
        {
            $data = $model->where('sbc_component_id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function edit($sbc_component_id = null)
    {
       
     $model = new SimpleBannerComponentMasterModel();
     
     $data = $model->where('sbc_component_id', $sbc_component_id)->first();
      
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
  
    public function update()
    {  
  
        helper(['form', 'url']);
          
        $model = new SimpleBannerComponentMasterModel();
 
        $sbc_component_id = $this->request->getVar('sbc_component_id');
 
        $data = [
            'sbc_header_text'  => $this->request->getVar('sbc_header_text'),
            'sbc_sub_header_text'  => $this->request->getVar('sbc_sub_header_text'),
            'sbc_btn_text'  => $this->request->getVar('sbc_btn_text'),
            'sbc_background_image_path'  => $this->request->getVar('sbc_background_image_path'),
            ];
 
        $update = $model->update($sbc_component_id,$data);
        if($update != false)
        {
            $data = $model->where('sbc_component_id', $sbc_component_id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
  
    public function delete($admin_page_id= null){
        $model = new SimpleBannerComponentMasterModel();
        $delete = $model->where('sbc_component_id', $sbc_component_id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}
 
?>