<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConductorRequest;
use App\Http\Requests\UpdateConductorRequest;
use App\Repositories\ConductorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Conductor;
use App\Models\Conductor2;

class ConductorController extends AppBaseController
{
    /** @var  ConductorRepository */
    private $conductorRepository;

    public function __construct(ConductorRepository $conductorRepo)
    {
        $this->conductorRepository = $conductorRepo;
    }

    /**
     * Display a listing of the Conductor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $conductors = $this->conductorRepository->all();

        return view('conductors.index')
            ->with('conductors', $conductors);
    }

    /**
     * Show the form for creating a new Conductor.
     *
     * @return Response
     */
    public function create()
    {
        return view('conductors.create');
    }
	
	public function todos()
    {   $sync=0;
		$todos = Conductor::all();
		$todos2 = Conductor2::all();
		
		if(count($todos)>count($todos2)) 
	  {   $dif = count($todos)-count($todos2);
		  $difer = Conductor::select('*')->latest('created_at')->orderby('created_at','asc')->limit($dif)->get();
		foreach($difer as $dif)
		{
			echo $dif->nombre;
		}
		//$count = ($todos->count())- $dif;
		//$todos = $todos->skip($count)->get();
		$sync =1;
	  }
	  
	return ($sync.count($difer));
    }

    /**
     * Store a newly created Conductor in storage.
     *
     * @param CreateConductorRequest $request
     *
     * @return Response
     */
    public function store(CreateConductorRequest $request)
    {
        $input = $request->all();

        $conductor = $this->conductorRepository->create($input);

        Flash::success('Conductor grabado correctamente.');

        return redirect(route('conductors.index'));
    }

    /**
     * Display the specified Conductor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conductor = $this->conductorRepository->find($id);

        if (empty($conductor)) {
            Flash::error('Conductor not found');

            return redirect(route('conductors.index'));
        }

        return view('conductors.show')->with('conductor', $conductor);
    }

    /**
     * Show the form for editing the specified Conductor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conductor = $this->conductorRepository->find($id);

        if (empty($conductor)) {
            Flash::error('Conductor not found');

            return redirect(route('conductors.index'));
        }

        return view('conductors.edit')->with('conductor', $conductor);
    }

    /**
     * Update the specified Conductor in storage.
     *
     * @param int $id
     * @param UpdateConductorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConductorRequest $request)
    {
        $conductor = $this->conductorRepository->find($id);

        if (empty($conductor)) {
            Flash::error('Conductor not found');

            return redirect(route('conductors.index'));
        }

        $conductor = $this->conductorRepository->update($request->all(), $id);

        Flash::success('Conductor updated successfully.');

        return redirect(route('conductors.index'));
    }

    /**
     * Remove the specified Conductor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conductor = $this->conductorRepository->find($id);

        if (empty($conductor)) {
            Flash::error('Conductor not found');

            return redirect(route('conductors.index'));
        }

        $this->conductorRepository->delete($id);

        Flash::success('Conductor deleted successfully.');

        return redirect(route('conductors.index'));
    }
}
