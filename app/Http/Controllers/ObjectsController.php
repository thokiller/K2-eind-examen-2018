<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objects;
use App\Http\Requests\ObjectRequest;

class ObjectsController extends Controller
{
    /*
     * returns view with all objects
     *
     * @return view
     */
    public function index()
    {
        $objects = Objects::orderBy('obj_id', 'DESC')->get();
        return view('objectOverview', compact('objects'));
    }

    /*
     * Returns detail page for given object
     */
    public function info($id)
    {
        $object = Objects::find($id);
        $priceArray = $object->getPriceArray();

        return view('object-info', compact('object', 'priceArray'));
    }

    public function adminIndex()
    {
        $objects = Objects::orderBy('obj_id', 'DESC')->get();
        return view('admin.objects', compact('objects'));
    }

    public function edit($id)
    {
        $object = Objects::findOrFail($id);
        return view('admin.editObject', compact('object'));
    }

    public function store(ObjectRequest $request)
    {
        $input = $request->all();
        Objects::create($input);

        return redirect('/admin/objects');
    }

    public function update(ObjectRequest $request, $id)
    {
        $input = $request->all();
        Objects::findOrFail($id)->update($input);

        return redirect('/admin/objects');
    }

    public function remove($id)
    {
        $object = Objects::findOrFail($id)->delete();

        return redirect('/admin/objects');
    }
    
    public function isAvailable(Request $request, Objects $object)
    {
        if (!$request->has('from-date') || !$request->has('till-date')) {
            throw new \Exception('Ongeldige datums');
        }

        try {
            $from = \DateTime::createFromFormat('d-m-Y', $request->get('from-date'));
            $till = \DateTime::createFromFormat('d-m-Y', $request->get('till-date'));
        } catch (\Throwable $throwable) {
            throw new \Exception('Ongeldige datums');
        }

        if($from > $till) {
            throw new \Exception('De tot datum mag niet groter zijn dan de van datum');
        }

        return [
            'available' => $object->isAvailable($from, $till, $request->get('ignore', null))
        ];
    }


}
