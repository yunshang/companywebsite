<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\PositionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use League\Flysystem\Filesystem;

class PositionsController extends Controller
{
    private $position;
    public function __construct(PositionRepository $position)
    {
        $this->position = $position;
        $this->middleware('admin');
    }
    public function index()
    {
        $positions = $this->position->getAllPositions();
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            return view('admin.positions.index',compact('positions'));
        }
        return redirect()->route('admin.index');
    }

    public function create()
    {
        if(user()->hasRole('admin')){
            return view("admin.positions.create");
        }
    }

    public function store(Request $request)
    {
        $data = [
            'job' => $request->get('job'),
            'department' => $request->get('department'),
            'quantity' => $request->get('quantity'),
            'academic_requirements' => $request->get('academic_requirements'),
            'work_area' => $request->get('work_area'),
            'content' => $request->get('content'),
        ];
        $position = $this->position->position($data);
        return redirect()->route('admin.positions', [$position->id]);
    }

    //编辑问题页面
    public function edit($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $position = $this->position->byId($id);
            return view("admin.positions.edit",compact('position'));
        }
        return redirect()->route('admin.index');

    }

    public function update(Request $request,$id)
    {
        $position = $this->position->byId($id);
//        $topics = $this->question->normalizeTopics($request->get('topics'));
        $position->update([
            'job' => $request->get('job'),
            'department' => $request->get('department'),
            'quantity' => $request->get('quantity'),
            'academic_requirements' => $request->get('academic_requirements'),
            'work_area' => $request->get('work_area'),
            'content' => $request->get('content'),
        ]);

        return redirect()->route('admin.positions');
    }

    public function destroy($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $position = $this->position->byId($id);
            $position->delete();
            return redirect()->route('admin.positions');
        }
        return redirect()->route('admin.index');
    }
}
