<?php

namespace App\Http\Controllers;

use App\Models\Inhabitants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class InhabitantsController extends Controller
{
    public function list()
    {
        return Inhabitants::all();
    }
    public function detail($id)
    {
        return Inhabitants::find($id)->first();
    }
    public function create(Request $req)
    {
        $inhabitantsData = json_decode($req->getContent());

        $inhabitant = new Inhabitants();

        $inhabitant->nome = $inhabitantsData->nome;
        $inhabitant->foto = $inhabitantsData->foto;
        $inhabitant->comune = $inhabitantsData->comune;
        $inhabitant->provincia = $inhabitantsData->provincia;
        $inhabitant->indirizzo = $inhabitantsData->indirizzo;
        $inhabitant->CAP = $inhabitantsData->CAP;
        $inhabitant->nApp = $inhabitantsData->nApp;
        $inhabitant->uc = $inhabitantsData->uc;
        $inhabitant->remota = $inhabitantsData->remota;
        $inhabitant->contab = $inhabitantsData->contab;
        $inhabitant->sonda = $inhabitantsData->sonda;
        $inhabitant->dispositivi = $inhabitantsData->dispositivi;

        $inhabitant->save();
        return $inhabitant;
    }
    public function modify(Request $req, $id)
    {
        $inhabitantData = json_decode($req->getContent());

        $editinhabitant = Inhabitants::find($id);
        Log::info("requetstsefas");
        Log::info($req);
        Log::info($inhabitantData->comune);

        $editinhabitant->nome = $inhabitantData->nome;
        $editinhabitant->foto = $inhabitantData->foto;
        $editinhabitant->comune = $inhabitantData->comune;
        $editinhabitant->provincia = $inhabitantData->provincia;
        $editinhabitant->indirizzo = $inhabitantData->indirizzo;
        $editinhabitant->CAP = $inhabitantData->CAP;
        $editinhabitant->nApp = $inhabitantData->nApp;
        $editinhabitant->uc = $inhabitantData->uc;
        $editinhabitant->remota = $inhabitantData->remota;
        $editinhabitant->contab = $inhabitantData->contab;
        $editinhabitant->dispositivi = $inhabitantData->dispositivi;

        $editinhabitant->save();
        return $editinhabitant;
    }
    public function delete($id)
    {
        return Inhabitants::destroy($id);
    }
}
