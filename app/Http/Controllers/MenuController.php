<?php

namespace App\Http\Controllers;

use App\Core\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    private $sortMark;
    public function __construct()
    {
        // $this->getVarVal();
        $this->sortMark = ['ASC' => '▲', 'DESC' => '▼'];
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

        $RouteOrder = session('RoutePath') . '_order';
        $RouteSort = session('RoutePath') . '_sort';

        $sort = 'ASC';
        if (session()->has($RouteOrder)) {
            if ($request->order != session($RouteOrder)) {
                $order = $request->order;
            } else if ($request->order == session($RouteOrder)) {
                $sort = session($RouteSort);
                session([$RouteSort => $sort == 'ASC' ? 'DESC' : 'ASC']);
                $order = $request->order;
            } else {
                $order = 'a.MenuNo';
            }
        } else {
            $order = 'a.MenuNo';
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

        return view('s1000.s1030', [
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
        //
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
