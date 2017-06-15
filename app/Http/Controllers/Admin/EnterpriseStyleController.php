<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\EnterpriseStyleRepository;
use App\Repositories\Admin\ImgRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EnterpriseStyleController extends Controller
{
    private $enterprise_style;
    public function __construct(EnterpriseStyleRepository  $enterprise_style)
    {
        $this->enterprise_style = $enterprise_style;
        $this->middleware('admin');
    }


    public function index()
    {
        $enterprise_styles = $this->enterprise_style->getAllEnteriseStyles();
        return view("admin.enterprisestyles.index",compact('enterprise_styles'));
    }

    public function store(Request $request, ImgRepository $img)
    {
        $data = [
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
        ];
        $enterprise_style = $this->enterprise_style->EnterpriseStyle($data);

        if (!empty ( $request->get('img'))) {
            foreach ($request->get('img') as $item) {
                $img_data = [
                    'filepath' => $item,
                    'styles' => 'enterprise_style',
                    'styles_id' => $enterprise_style->id,
                    'description' => '',
                ];
                $img->Img($img_data);
            }
        }
        return redirect()->route('admin.enterprisestyles', [$enterprise_style->id]);
    }

    public function create()
    {
        if(user()->hasRole('admin')){
            return view("admin.enterprisestyles.create");
        }
    }

    public function edit($id, ImgRepository $img)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $enterprise_style = $this->enterprise_style->byId($id);
            $imgs = $img->findEnterpriseStyleBystyles('enterprise_style',$enterprise_style->id);
            return view("admin.enterprisestyles.edit",compact(['enterprise_style','imgs']));
        }
        return redirect()->route('admin.index');
    }

    public function update(Request $request,$id,ImgRepository $img)
    {
        $enterprise_style = $this->enterprise_style->byId($id);
        $enterprise_style->update([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
        ]);

        $img->deleteall('enterprise_style',$enterprise_style->id);
        if (!empty ( $request->get('img'))){
            foreach ($request->get('img') as $item) {
                $img_data = [
                    'filepath' => $item,
                    'styles' => 'enterprise_style',
                    'styles_id' => $enterprise_style->id,
                    'description' => '',
                ];
                $img->Img($img_data);
            }
        }
        return redirect()->route('admin.enterprisestyles');
    }

    public function destroy($id,ImgRepository $img)
    {
        $enterprise_style = $this->enterprise_style->byId($id);
        $img->deleteall('enterprise_style',$enterprise_style->id);
        $enterprise_style->delete();
        return redirect()->route('admin.enterprisestyles');
    }
}
