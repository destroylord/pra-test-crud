<?php

namespace App\Controllers;

use App\Models\Ownership;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $ownerships;

    public function __construct()
    {
        $this->ownerships = new Ownership();
    }

    public function index()
    {
        $data['ownershipses'] = $this->ownerships->findAll();
        return view('default', $data);
    }


    public function store()
    {

        // condifitioinal
        $check_businnes = (!$this->request->getVar('businnes_entity') ? "0" : "1");
        $individual = (!$this->request->getVar('individual') ? "0" : "1");
        $foundation = (!$this->request->getVar('foundation') ? "0" : "1");


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

    public function destroy($id = null)
    {
        $this->ownerships->where('id', $id)->delete($id);
        return redirect()->to('/');
    }

}
