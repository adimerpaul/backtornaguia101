<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransporteRequest;
use App\Http\Requests\UpdateTransporteRequest;
use App\Repositories\TransporteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TransporteController extends AppBaseController
{
    /** @var  TransporteRepository */
    private $transporteRepository;

    public function __construct(TransporteRepository $transporteRepo)
    {
        $this->transporteRepository = $transporteRepo;
    }

    /**
     * Display a listing of the Transporte.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transportes = $this->transporteRepository->all();

        return view('transportes.index')
            ->with('transportes', $transportes);
    }

    /**
     * Show the form for creating a new Transporte.
     *
     * @return Response
     */
    public function create()
    {
        return view('transportes.create');
    }

    /**
     * Store a newly created Transporte in storage.
     *
     * @param CreateTransporteRequest $request
     *
     * @return Response
     */
    public function store(CreateTransporteRequest $request)
    {
        $input = $request->all();

        $transporte = $this->transporteRepository->create($input);

        Flash::success('Transporte grabado correctamente.');

        return redirect(route('transportes.index'));
    }

    /**
     * Display the specified Transporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transporte = $this->transporteRepository->find($id);

        if (empty($transporte)) {
            Flash::error('Transporte not found');

            return redirect(route('transportes.index'));
        }

        return view('transportes.show')->with('transporte', $transporte);
    }

    /**
     * Show the form for editing the specified Transporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transporte = $this->transporteRepository->find($id);

        if (empty($transporte)) {
            Flash::error('Transporte not found');

            return redirect(route('transportes.index'));
        }

        return view('transportes.edit')->with('transporte', $transporte);
    }

    /**
     * Update the specified Transporte in storage.
     *
     * @param int $id
     * @param UpdateTransporteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransporteRequest $request)
    {
        $transporte = $this->transporteRepository->find($id);

        if (empty($transporte)) {
            Flash::error('Transporte not found');

            return redirect(route('transportes.index'));
        }

        $transporte = $this->transporteRepository->update($request->all(), $id);

        Flash::success('Transporte updated successfully.');

        return redirect(route('transportes.index'));
    }

    /**
     * Remove the specified Transporte from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transporte = $this->transporteRepository->find($id);

        if (empty($transporte)) {
            Flash::error('Transporte not found');

            return redirect(route('transportes.index'));
        }

        $this->transporteRepository->delete($id);

        Flash::success('Transporte deleted successfully.');

        return redirect(route('transportes.index'));
    }
}
