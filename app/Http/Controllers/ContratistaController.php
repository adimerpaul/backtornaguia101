<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratistaRequest;
use App\Http\Requests\UpdateContratistaRequest;
use App\Repositories\ContratistaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContratistaController extends AppBaseController
{
    /** @var  ContratistaRepository */
    private $contratistaRepository;

    public function __construct(ContratistaRepository $contratistaRepo)
    {
        $this->contratistaRepository = $contratistaRepo;
    }

    /**
     * Display a listing of the Contratista.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contratistas = $this->contratistaRepository->all();

        return view('contratistas.index')
            ->with('contratistas', $contratistas);
    }

    /**
     * Show the form for creating a new Contratista.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratistas.create');
    }

    /**
     * Store a newly created Contratista in storage.
     *
     * @param CreateContratistaRequest $request
     *
     * @return Response
     */
    public function store(CreateContratistaRequest $request)
    {
        $input = $request->all();

        $contratista = $this->contratistaRepository->create($input);

        Flash::success('Contratista grabado correctamente.');

        return redirect(route('contratistas.index'));
    }

    /**
     * Display the specified Contratista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratista = $this->contratistaRepository->find($id);

        if (empty($contratista)) {
            Flash::error('Contratista not found');

            return redirect(route('contratistas.index'));
        }

        return view('contratistas.show')->with('contratista', $contratista);
    }

    /**
     * Show the form for editing the specified Contratista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratista = $this->contratistaRepository->find($id);

        if (empty($contratista)) {
            Flash::error('Contratista not found');

            return redirect(route('contratistas.index'));
        }

        return view('contratistas.edit')->with('contratista', $contratista);
    }

    /**
     * Update the specified Contratista in storage.
     *
     * @param int $id
     * @param UpdateContratistaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratistaRequest $request)
    {
        $contratista = $this->contratistaRepository->find($id);

        if (empty($contratista)) {
            Flash::error('Contratista not found');

            return redirect(route('contratistas.index'));
        }

        $contratista = $this->contratistaRepository->update($request->all(), $id);

        Flash::success('Contratista updated successfully.');

        return redirect(route('contratistas.index'));
    }

    /**
     * Remove the specified Contratista from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratista = $this->contratistaRepository->find($id);

        if (empty($contratista)) {
            Flash::error('Contratista not found');

            return redirect(route('contratistas.index'));
        }

        $this->contratistaRepository->delete($id);

        Flash::success('Contratista deleted successfully.');

        return redirect(route('contratistas.index'));
    }
}
