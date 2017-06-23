<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\EntryRepository;
use App\Repositories\Admin\ImgRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EntryController extends Controller
{
    private $entry;
    public function __construct(EntryRepository $entry)
    {
        $this->entry = $entry;
        $this->middleware('admin');
    }

    public function index() {
        $entries = $this->entry->getAllEntries();
        return view("admin.entries.index",compact('entries'));
    }

    public function create()
    {
        if(user()->hasRole('admin')){
            return view("admin.entries.create");
        }
    }

    public function store(Request $request, ImgRepository $img)
    {
        $data = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ];
        $entry = $this->entry->Entry($data);

        $index = 0;
        if (!empty ( $request->get('img'))) {
            foreach ($request->get('img') as $item) {
                $img_data = [
                    'filepath' => $item,
                    'description'  => $request->get('description')[$index],
                    'styles' => 'entry',
                    'styles_id' => $entry->id,
                ];
                $img->Img($img_data);
            }
            $index++;
        }
        return redirect()->route('admin.entries', [$entry->id]);
    }

    public function edit($id, ImgRepository $img)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $entry = $this->entry->byId($id);
            $imgs = $img->findEnterpriseStyleBystyles('entry',$entry->id);
            return view("admin.entries.edit",compact(['entry','imgs']));
        }
        return redirect()->route('admin.index');
    }

    public function update(Request $request,$id,ImgRepository $img)
    {
        $entry = $this->entry->byId($id);
        $entry->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        $img->deleteall('entry',$entry->id);
        $index = 0;
        if (!empty ( $request->get('img'))){
            foreach ($request->get('img') as $item) {
                $img_data = [
                    'filepath' => $item,
                    'styles' => 'entry',
                    'styles_id' => $entry->id,
                    'description' => $request->get('description')[$index],
                ];
                $img->Img($img_data);
            }
            $index++;
        }
        return redirect()->route('admin.entries');
    }

    public function destroy($id,ImgRepository $img)
    {
        $entry = $this->entry->byId($id);
        $img->deleteall('entry',$entry->id);
        $entry->delete();
        return redirect()->route('admin.entries');
    }

}
