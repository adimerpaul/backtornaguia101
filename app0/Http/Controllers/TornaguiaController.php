<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTornaguiaRequest;
use App\Http\Requests\UpdateTornaguiaRequest;
use App\Repositories\TornaguiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Transporte;
use App\Models\Conductor;
use App\Models\Contratista;
use Flash;
use Response;
use PDF;
use  SimpleSoftwareIO\QrCode\Facades\QrCode;

class TornaguiaController extends AppBaseController
{
    /** @var  TornaguiaRepository */
    private $tornaguiaRepository;

    public function __construct(TornaguiaRepository $tornaguiaRepo)
    {
        $this->tornaguiaRepository = $tornaguiaRepo;
    }

    /**
     * Display a listing of the Tornaguia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tornaguias = $this->tornaguiaRepository->all();

        return view('tornaguias.index')
            ->with('tornaguias', $tornaguias);
    }

    public function torna_view($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

         //   return redirect(route('tornaguias.index'));
        }

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
       
        return view('tornaguias.torna_view',compact('tornaguia'));
        
    }


    public function pdf($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

         //   return redirect(route('tornaguias.index'));
        }

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        //return view('tornaguias.pdf',compact('tornaguia'));
        $url = 'http://tornaguias.pragmaticsol.com/torna_view/'.$id;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->generate($url)); 
          
        $pdf = PDF::loadView('tornaguias.pdf',compact('tornaguia','qrcode'));

        $pdf->download('tornaguias01.pdf');

        return $pdf->stream($id,array('Attachment'=>0))->header('Content-Type','application/pdf');


    //    return view('tornaguias.show')->with('tornaguia', $tornaguia);
    }

    public function pdfblanco($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

         //   return redirect(route('tornaguias.index'));
        }

        $data = [
            'title' => 'Welcome to PRAGMATIC SOLUTIONS',
            'date' => date('m/d/Y')
        ];
        $url = 'http://tornaguias.pragmaticsol.com/torna_view/'.$id;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->generate($url)); 
          
        $pdf = PDF::loadView('tornaguias.pdfblanco',compact('tornaguia','qrcode'));
          
        $pdf->download('tornaguias01.pdf');

        return $pdf->stream($id,array('Attachment'=>0))->header('Content-Type','application/pdf');
    }

    public function pdfgen($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

         //   return redirect(route('tornaguias.index'));
        }

        $data = [
            'title' => 'Welcome to PRAGMATIC SOLUTIONS',
            'date' => date('m/d/Y')
        ];

        $url = 'http://tornaguias.pragmaticsol.com/torna_view/'.$id;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->generate($url)); 
          
        $pdf = PDF::loadView('tornaguias.pdfgen',compact('tornaguia','qrcode'));
    
        $pdf->download('tornaguias01.pdf');

        return $pdf->stream($id,array('Attachment'=>0))->header('Content-Type','application/pdf');
    //    return view('tornaguias.show')->with('tornaguia', $tornaguia);
    }
    /**
     * Show the form for creating a new Tornaguia.
     *
     * @return Response
     */
    public function create()
    {

        $proceso = Empresa::all();
        $unidadOptions = array('' => 'Seleccione Empresa') + $proceso->pluck('nombre', 'id')->toArray();
        $proceso = Transporte::all();
        $transporteOptions = array('' => 'Seleccione Transporte') + $proceso->pluck('placa', 'id')->toArray();
        $proceso = Conductor::all();
        $conductorOptions = array('' => 'Seleccione Conductor') + $proceso->pluck('nombre', 'id')->toArray();
        $proceso = Contratista::all();
        $contratistaOptions = array('' => 'Seleccione Contratista') + $proceso->pluck('nombre', 'id')->toArray();

        return view('tornaguias.create',compact('unidadOptions','transporteOptions','conductorOptions','contratistaOptions'));

    //    return view('tornaguias.create');
    }

    public function myformAjax($id)
    {
        $transporte = Transporte::select('*')->where("id",$id)->first();
        return json_encode($transporte);
    }

    public function myformAjax2($id)
    {
        $transporte = Conductor::select('*')->where("id",$id)->first();
        return json_encode($transporte);
    }

    public function myformAjax3($id)
    {
        $transporte = Contratista::select('*')->where("id",$id)->first();
        return json_encode($transporte);
    }

    



    /**
     * Store a newly created Tornaguia in storage.
     *
     * @param CreateTornaguiaRequest $request
     *
     * @return Response
     */
    public function store(CreateTornaguiaRequest $request)
    {
        $input = $request->all();

        $tornaguia = $this->tornaguiaRepository->create($input);

        Flash::success('Tornaguia grabado correctamente.');

        return redirect(route('tornaguias.index'));
    }

    /**
     * Display the specified Tornaguia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

            return redirect(route('tornaguias.index'));
        }

        return view('tornaguias.show')->with('tornaguia', $tornaguia);
    }

    /**
     * Show the form for editing the specified Tornaguia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

            return redirect(route('tornaguias.index'));
        }

        return view('tornaguias.edit')->with('tornaguia', $tornaguia);
    }

    /**
     * Update the specified Tornaguia in storage.
     *
     * @param int $id
     * @param UpdateTornaguiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTornaguiaRequest $request)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

            return redirect(route('tornaguias.index'));
        }

        $tornaguia = $this->tornaguiaRepository->update($request->all(), $id);

        Flash::success('Tornaguia updated successfully.');

        return redirect(route('tornaguias.index'));
    }

    /**
     * Remove the specified Tornaguia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tornaguia = $this->tornaguiaRepository->find($id);

        if (empty($tornaguia)) {
            Flash::error('Tornaguia not found');

            return redirect(route('tornaguias.index'));
        }

        $this->tornaguiaRepository->delete($id);

        Flash::success('Tornaguia deleted successfully.');

        return redirect(route('tornaguias.index'));
    }
}
