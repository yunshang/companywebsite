<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\ResumeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ResumeController extends Controller
{
    private $resume;
    public function __construct(ResumeRepository  $resume)
    {
        $this->resume = $resume;
        $this->middleware('admin');
    }


    public function index()
    {
        $resumes = $this->resume->getAllResumes();
        return view("admin.resume.index",compact('resumes'));
    }

    public function show($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $resume = $this->resume->byId($id);
            return view("admin.resume.show",compact('resume'));
        }
        return redirect()->route('admin.resume.index');
    }

    public function getDownload($id)
    {
        $resume = $this->resume->byId($id);
        $file= public_path()."/uploads/".$resume->annex;
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $resume->annex, $headers);
    }

    public function destroy($id)
    {
        $user = $this->resume->byId($id);
        $user->delete();
        return redirect()->route('admin.resume');
    }
}
