<?php

namespace App\Http\Controllers;

use App\Objects;
use Illuminate\Http\Request;
use App\Promos;

class PromosController extends Controller
{
    /*
     * returns view with all promos
     *
     * @return view
     */
    public function index()
    {
        $promos = Promos::all();
        $objects = Objects::all();

        return view('promosOverview', compact('promos', 'objects'));
    }

    public function newPromoIndex()
    {
        $objects = Objects::all();
        return view('promo-new', compact('objects'));
    }


    public function newPromo(Request $request)
    {
        $request->validate([
            'percentage' => 'required',
            'object' => 'required'
        ]);

        $data = $request->all();

        $active = 0;
        if(isset($data['active'])){
            $active = 1;
        }

        Promos::create([
            'percentage' => $data['percentage'],
            'object_id'  => $data['object'],
            'active'   => $active,
        ]);

        flash('Actie is aangemaakt!');

        return redirect('/promos');
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function delPromo(Request $request)
    {
        $params = $request->all();

        $id = $params['id'];

        $promo = Promos::find($id);
        $promo->delete();

        return "success";
    }

    /*
     * Returns detail page for given object
     */
    public function info(Request $request,$id)
    {
        $promo = Promos::find($id);
        $objects = Objects::all();

        return view('promo-info', compact('promo', 'objects'));
    }

    public function save(Request $request)
    {
        $data = $request->all();

        $promo = Promos::find($data['object']);
        $promo->percentage = $data['percentage'];
        $promo->object_id = $data['object'];

        if (isset($data['active'])) {
            $promo->active = 1;
        }else {
            $promo->active = 0;
        }

        $promo->save();

        flash("Actie is bijgewerkt!");

        return redirect('/promos');
    }
}
