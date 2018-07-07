<?php

namespace App\Http\Controllers;

use App\Message ;


use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    // 前台畫面資料
    public function  select(){
//        $message = Message::all();
        $message = Message::orderBy('id','desc')->get();


//        return view('testData',compact('name','title','content'));
        return view('index')->with('messageObj',$message);
    }


    // 後台資料管理
    public function  dataSelect(){

        $message = Message::orderBy('id','desc')->get();

        return view('admin.data')->with('messageObj',$message);
    }

    // form 表單 submit 後執行 function
    public function dataInsert(Request $request){

        //orm
        Message::create($request->all());

        return redirect()->route('index');
//        return redirect('/index');
    }


    //後台 點擊Update後 route連到的function
    public function dataEdit($id)
    {
        //點擊

        $message  = Message::findOrFail($id);

        return view('admin.edit', compact('message'));


    }

    // Edit view 點擊修改後route連到的function
    public function dataUpdate(Request $request, $id){



        $message  = Message::findOrFail($id);

        $message->update($request->all());

        return redirect()->route('admin.data');

    }


    public function dataConfirmDelete($id)
    {
        //點擊

        $message  = Message::findOrFail($id);

        return view('admin.confirm_delete', compact('message'));


    }


    public function dataDelete($id)
    {
        //
        Message::whereId($id)->delete();

        return redirect()->route('admin.data');
    }












}
