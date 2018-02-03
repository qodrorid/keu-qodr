<?php
use Phalcon\Mvc\view;
use Phalcon\Security;

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if (!$this->session->has('auth')) {
            $this->response->redirect('login');
        }
        
        $data_user = User::find();
        $this->view->data_user = $data_user;
    }
    
    public function getAjaxAction()
    {
        $user = new User();
        $json_data = $user->getDataUser();
        die(json_encode($json_data));
    }

    public function addUserAction()
    {
        $user = new User();


        if ($this->request->isPost() && $this->request->hasFiles()) {
            $cabang_id  = $this->request->getPost('cabang_id');
            $username  = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $type = $this->request->getPost('type');
            $upload_dir = BASE_PATH . '/public/uploads/';
            foreach ($this->request->getUploadedFiles() as $file) {
                $file->moveTo($upload_dir . $file->getName());
                $foto_user = $file->getName();
            }
            $id = "ID-".$username;
            
            $user->assign(array(
                'id' => $id,
                'cabang_id' => $cabang_id,
                'username' => $username,
                'password' => $this->security->hash($password),
                'type' => $type,
                'foto_user' => $foto_user,
            ));

            if ($user->save()) {
                $notif['title']="Sukses";
                $notif['text']="Data telah berhasil di simpan!";
                $notif['type']="success";
            }else{
                $pesan_eror = $user->getMessages();
                $data_pesan_eror ='';
                foreach ($pesan_eror as $pesanError) {
                    $data_pesan_eror="$pesanError";
                }
                $notif['title']="Error";
                $notif['text']="Data tidak berhasil di simpan! ".$data_pesan_eror;
                $notif['type']="error";
            }
            echo json_encode($notif);
            die();
        }
    }

    public function editUserAction()
    {
        
        if ($this->request->isPost()) {
            $id = $this->request->getPost('id');
            $cabang_id  = $this->request->getPost('cabang_id');
            $username  = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $type = $this->request->getPost('type');
            
            $user = User::findFirst("id='$id'");

            $user->assign(array(
                'id' => $id,
                'cabang_id' => $cabang_id,
                'username' => $username,
                'password' => $this->security->hash($password),
                'type' => $type
            ));

            if ($user->save()) {
                $notif['title']="Sukses";
                $notif['text']="Data telah berhasil di simpan!";
                $notif['type']="success";
            }else{
                $pesan_eror = $user->getMessages();
                $data_pesan_eror ='';
                foreach ($pesan_eror as $pesanError) {
                    $data_pesan_eror="$pesanError";
                }
                $notif['title']="Error";
                $notif['text']="Data tidak berhasil di simpan!";
                $notif['type']="error";
            }
            echo json_encode($notif);
            die();
        }
    }

    public function deleteUserAction()  
    {
        if ($this->request->isPost()) {
            $id = $this->request->getPost('id');

            $user = User::findFirst("id='$id'");

            if ($user->delete()) {
                $notif['title']="Sukses";
                $notif['text']="Data telah berhasil di hapus!";
                $notif['type']="success";
            }else{
                $pesan_eror = $user->getMessages();
                $data_pesan_eror ='';
                foreach ($pesan_eror as $pesanError) {
                    $data_pesan_eror="$pesanError";
                }
                $notif['title']="Error";
                $notif['text']="Data tidak berhasil di hapus!";
                $notif['type']="error";
            }
            echo json_encode($notif);
            die();
        }
    }

    public function listUserAction()
    {
        $this->view->data_user = User::find();
        $this->view->pick("user/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function getDataAction($id)
    {
        $data_user = User::findFirst("id='$id'");
        die(json_encode($data_user));
    }
}