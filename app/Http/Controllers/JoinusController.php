<?php

namespace App\Http\Controllers;

use App\Repositories\ResumeRepository;
use App\Repositories\Admin\PositionRepository;
use App\Repositories\Admin\EntryRepository;
use App\Repositories\Admin\SettingRepository;
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
    protected $position;
    protected $entry;
    protected $setting;

    public function __construct(ResumeRepository $resume, PositionRepository $position, EntryRepository $entry, SettingRepository $setting)
    {
        $this->setting = $setting;
        $this->resume = $resume;
        $this->position = $position;
        $this->entry = $entry;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = parent::getsetting($this->setting);
        $positions = $this->position->getAllPositions();
        $entries = $this->entry->getAllEntries();
        return view('joinus', compact(['positions','entries','setting']));
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
