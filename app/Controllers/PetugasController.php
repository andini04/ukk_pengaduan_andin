<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Petugas;
class PetugasController extends BaseController{
    protected $petugass;

    function __construct(){
        $this->petugass = new Petugas();
    }
    public function index(){
        $data['petugas'] = $this->petugass->findAll();
        return view('petugas_view',$data);
    }
    public function save(){
        $data = array(
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
            'password'=> password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
        );
        $this->petugass->insert($data);
        session()->setFlashdata("message","Data berhasil Disimpan");
        return $this->response->redirect('/petugas');
    }
    public function edit($id){
        if ($this->request->getPost('ubahpassword')){
            $data = array('nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        );
        }else{
            $data = array('nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        );
        }
        $this->petugass->update($id, $data);
        session()->setFlashdata('message','Data petugas berhasil di edit');
        return redirect('petugas')->with('Sukses nih!!!','update berhasil');
    }
    public function delete($id){
        $this->petugass->delete($id);
        session()->setFlashdata("message","Data Berhasil Dihapus");
        return $this->response->redirect('/petugas');
    }

}
