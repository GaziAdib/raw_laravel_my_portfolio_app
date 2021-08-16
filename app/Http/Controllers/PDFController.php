<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use PDF;

class PDFController extends Controller
{
    public function PdfConvert(){


        $projects = Project::all();

        view()->share('projects', $projects);

        $pdf_doc = PDF::loadView('PDF.show_info', compact('projects'));

        return $pdf_doc->download('myPdf.pdf');

    }
}
