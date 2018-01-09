<?php
use Phalcon\Mvc\view;


class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
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
        
        if ($this->request->isPost()) {
            $cabang_id  = $this->request->getPost('cabang_id');
            $username  = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $type = $this->request->getPost('type');
            $id = "ID-".$username;
            
            $user->assign(array(
                'id' => $id,
                'cabang_id' => $cabang_id,
                'username' => $username,
                'password' => $password,
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
                'password' => $password,
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
}