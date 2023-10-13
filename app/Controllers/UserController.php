<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index() {
        $data = [
            'title' => $this->request->getVar('Index'),
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function profile($nama = "", $kelas = "", $npm = "") {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create() {

        $kelasModel = new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => $this->request->getVar('App'),
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store() {

        $userModel = new UserModel();
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if(!$this->validate($userModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        if ($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');

        return redirect()->to('/user');

    }

    public function show($id) {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];

        return view('profile', $data);
    }
}
