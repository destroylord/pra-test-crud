<?php

namespace App\Controllers;

use App\Models\Ownership;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $ownerships;
    protected $validation;

    public function __construct()
    {
        $this->ownerships = new Ownership();
        $this->validation = \Config\Services::validation();
        helper(['form','url']);
    }

    public function index()
    {
        $data['ownershipses']   = $this->ownerships->findAll();
        $data['validation']     = $this->validation;
        return view('default', $data);
    }


    public function store()
    {
        // condifitioinal
        $check_businnes = (!$this->request->getVar('businnes_entity') ? "0" : "1");
        $individual = (!$this->request->getVar('individual') ? "0" : "1");
        $foundation = (!$this->request->getVar('foundation') ? "0" : "1");


        // validation
       if (!$this->validate([
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama kepemilikan wajib diisi'
                    ]
                ],
       ])) {
           return redirect()->back()->withInput()->with('validation', $this->validation);
       }       

            // progres input
            $this->ownerships->insert([
                'name' => $this->request->getVar('name'),
                'businnes_entity' => $check_businnes,
                'individual' => $individual,
                'foundation' => $foundation,
                'created_at' => Time::now()
            ]);

            return redirect()->to('/');
        
    }

    public function edit($id)
    {
        $data['ownerships'] = $this->ownerships->find($id);
        
        echo json_encode($data);
    }

    public function update($id = null)
    {
        // condifitioinal
        $check_businnes = (!$this->request->getVar('businnes_entity') ? "0" : "1");
        $individual = (!$this->request->getVar('individual') ? "0" : "1");
        $foundation = (!$this->request->getVar('foundation') ? "0" : "1");

        // validation
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kepemilikan wajib diisi'
                ]
            ],
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validation);
        }    

       $this->ownerships->update($id, [
            'name' => $this->request->getVar('name'),
            'businnes_entity' => $check_businnes,
            'individual' => $individual,
            'foundation' => $foundation,
            'created_at' => Time::now()
       ]);

       return redirect()->to('/');
          
    }

    public function destroy($id = null)
    {
        $this->ownerships->where('id', $id)->delete($id);
        return redirect()->to('/');
    }

}
