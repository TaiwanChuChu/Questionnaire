<?php

namespace App\Http\Controllers;

use App\Core\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    private $ConfigRoutePath;
    private $sortMark;
    private $defOrder;

    public function __construct()
    {
        // $this->getVarVal();
        $this->ConfigRoutePath = config('OtherConfig.finalvariable.route.ROUTEPATH');
        $this->sortMark = ['ASC' => '▲', 'DESC' => '▼'];
        $this->defOrder = 'a.MenuNo';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Request handle ..
        Helper::VarReset();

        $MenuNo = $request->MenuNo;
        $MenuName = $request->MenuName;

        $RouteOrder = $this->ConfigRoutePath . '_order';
        $RouteSort = $this->ConfigRoutePath . '_sort';

        $sort = 'ASC';
        if (session()->has($RouteOrder)) {
            if ($request->order != '' && $request->order != session($RouteOrder)) {
                $order = $request->order;
            } else if ($request->order == session($RouteOrder)) {
                $sort = session($RouteSort);
                session([$RouteSort => $sort == 'ASC' ? 'DESC' : 'ASC']);
                $order = $request->order;
            } else {
                $order = session($RouteOrder);
            }
        } else {
            $order = $this->defOrder;
        }

        $where = [];
        if ($MenuNo) {
            $where[] = ['MenuNo', 'like', '%' . $MenuNo . '%'];
        }
        if ($MenuName) {
            $where[] = ['MenuName', 'like', '%' . $MenuName . '%'];
        }

        $UpperMenuName = DB::table('Menu AS b')->where('b.MenuID', DB::raw('a.UpperID'))->select('MenuName');
        $data = DB::table('Menu AS a')->where([['IsHide', '0'], ['Status', '1']])
            ->select('MenuID', 'MenuNo', 'MenuName', 'UpperID', 'IsHide', 'Status')
            ->selectSub($UpperMenuName, 'UpperMenuName')
            ->where($where)
            ->orderBy('a.Sort')
            ->orderBy($order, $sort)
            ->paginate(10);

        return view('s1000.s1030.index', [
            'data' => $data,
            'MenuNo' => $MenuNo,
            'MenuName' => $MenuName,
            'order' => session($RouteOrder),
            'sortMark' => $this->sortMark[$sort],
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MenuNo = '';
        $MenuName = '';
        $UpperID = '';
        $IsHide = '1';
        $Status = '1';
        return view('s1000.s1030.view', [
            'MenuNo' => $MenuNo,
            'MenuName' => $MenuName,
            'UpperID' => $UpperID,
            'IsHide' => $IsHide,
            'Status' => $Status,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function event(Request $request)
    {
        return $this->index($request);
    }
}
