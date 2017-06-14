<?php

namespace App\Http\Controllers;

use App\Repositories\ResumeRepository;
use App\User;
use Storage;
use Illuminate\Http\Request;
use Auth;

class JoinusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $resume;

    public function __construct(ResumeRepository $resume)
    {
        $this->resume = $resume;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = User::find(2);
//        dd(Auth::user());
        return view('joinus');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('annex');
            if ($file->isValid()) {
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                Storage::disk('uploads')->put($filename, file_get_contents($realPath));
            }
        }

        $resume = $this->resume->create([
            'name'=>$request->get('name'),
            'gender'=>$request->get('gender'),
            'phone'=>$request->get('phone'),
            'age'=>$request->get('age'),
            'years_work'=>$request->get('years_work'),
            'apply_job'=>$request->get('apply_job'),
            'office_status'=>$request->get('office_status'),
            'education_level'=>$request->get('education_level'),
            'expect_workplace'=>$request->get('expect_workplace'),
            'induction_time'=>$request->get('induction_time'),
            'educational_experience'=>$request->get('educational_experience'),
            'work_experience'=>$request->get('work_experience'),
            'self_evaluation'=>$request->get('self_evaluation'),
            'annex'=>$filename,
        ]);
        return back();
    }
}
