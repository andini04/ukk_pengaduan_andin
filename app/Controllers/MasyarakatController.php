<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Masyarakat;
class MasyarakatController extends Controller{
    protected $masyarakats;

    function __construct(){
        $this->masyarakats = new Masyarakat();
    }
    public function index(){
        $data['masyarakat'] = $this->masyarakats->findAll();
        return view('masyarakat_view',$data);
    }
    public function delete($id){
        $this->masyarakats->delete($id);
        session()->setFlashdata("message","Data Berhasil Dihapus");
        return $this->response->redirect('/masyarakat');
    }


}
