<?php

namespace App\Http\Controllers\admin;

use App\Models\Bill;
use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
   /**
     * index.
     *
     * @param Request $request
     *
     * @return orders.index
     */
    public function index(Request $request)
    {
        if (isset($_GET['is_active'])) {
            $is_active = $_GET['is_active'];
            if ($is_active == 'cho-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 0)->Paginate(8);
            } elseif ($is_active == 'da-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 1)->Paginate(8);
            } elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill = Bill::where('bill_active', '=', 4)->Paginate(8);
            }
        } else {
            $bill = Bill::orderBy('id', 'asc')->Paginate(8);
        }
        return view('admin.orders.index', compact('bill'));
    }

     /**
     * delete.
     *
     * @param Request $request
     *
     * @return orders.index
     */
    public function delete(Request $request)
    {
        $bills = Bill::find($request->id);
        $bills->delete();
        return redirect()->route('order.index')->with('msg', 'Xóa sản phẩm thành công');
    }
  /**
     * search.
     *
     * @param Request $request
     *
     * @return orders.search
     */
    public function search(Request $request)
    {
        $confisions = [
            [
                'field' => 'id',
                'where' => '=',
                'value' => $request->id
            ],
            [
                'field' => 'full_name',
                'where' => 'like',
                'value' => '%' . $request->full_name . '%'
            ],

        ];
        if (isset($_GET['is_active'])) {
            $is_active = $_GET['is_active'];
            if ($is_active == 'cho-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 0)->Paginate(8);
            } elseif ($is_active == 'da-xac-nhan') {
                $bill = Bill::where('bill_active', '=', 1)->Paginate(8);
            } elseif ($is_active == 'da-thanh-toan') {
                $bill = Bill::where('bill_active', '=', 2)->Paginate(8);
            } elseif ($is_active == 'da-hoan-thanh') {
                $bill = Bill::where('bill_active', '=', 3)->Paginate(8);
            } elseif ($is_active == 'huy-don-hang') {
                $bill = Bill::where('bill_active', '=', 4)->Paginate(8);
            }
        } else {
            if($request->id){
                $search_bill = Bill::where($confisions)->get();
            }
            if($request->full_name){
                $search_bill = Bill::where('full_name', 'like', '%'.$request->full_name.'%')->get();
            }
            if($request->price){
                $search_bill = Bill::where('total', 'like','%'.$request->price.'%')->get();
            }
            if($request->date_order){
                $search_bill = Bill::where('date_order','like',$request->date_order)->get();
            }
            if($request->updated_at){
                $search_bill = Bill::where('updated_at','like','%'. $request->updated_at .'%')->get();
            }
            if($request->full_name && $request->id){
                $search_bill = Bill::where('full_name', 'like', '%'.$request->full_name.'%')->orWhere('id','=',$request->id)->get();
            }
            if($request->price && $request->full_name && $request->id){
                $search_bill = Bill::where('total', 'like','%'.$request->price.'%')->orWhere('full_name', 'like', '%'.$request->full_name.'%')->orWhere('id','=',$request->id)->get();
            }
        }
        return view('admin.orders.search', compact('search_bill'));
    }

    /**
     * orderTrash(Hiển thị các đơn hàng đã hủy )
     *
     * @param Request $request
     *
     * @return orders.trash
     */
    public function orderTrash(Request $request)
    {
        $bills = Bill::onlyTrashed()->get();
        return view('admin.orders.trash', compact('bills'));
    }

    /**
     * trashOut(Xóa vĩnh viễn đơn hàng ).
     *
     * @param Request $request
     *
     * @return  orrder.trash
     */
    public function trashOut(Request $request)
    {
        $bills = Bill::withTrashed()->where('id', $request->id)->forceDelete();
        return view('admin.orders.trash', compact('bills'));
    }

    /**
     * Edit bill.
     *
     * @param Request $request
     *
     * @return orders.index
     */
    public function billEdit(Request $request)
    {
        $data = $request->all();

        $bill = Bill::find($request->id);

        $bill->bill_active = $data['active'];

        $bill->save();
    }
}
