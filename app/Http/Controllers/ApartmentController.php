<?php

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::query()->paginate(6);
        return view('list',[
            'data' => $apartments,
        ]);
    }
    public function create()
    {
        return view('form',[
            'data' => null
        ]);
    }
    public function store(ApartmentRequest $request)
    {
        $apartment = new Apartment();
        $apartment->fill($request->validated());
        $apartment->save();
        return redirect()->route('listAP');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }
    public function edit($id)
    {
        $detail = Apartment::find($id);
        return view('form',[
            'data' => $detail
        ]);
        //
    }
    public function update(ApartmentRequest $request, $id)
    {
        $detail = Apartment::find($id);
        $detail->update($request->validated());
        $detail->save();
        return redirect()->route('listAP');
        //
    }
    public function destroy($id)
    {
        $detail = Apartment::find($id);
        $detail->delete();
        return redirect()->route('listAP');
        //
    }
}
