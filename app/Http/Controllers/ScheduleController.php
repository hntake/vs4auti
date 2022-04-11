<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Image;

class ScheduleController extends Controller
{
    /**
     * 新規作成画面へ遷移
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $images = Image:: all();
        return view('create',[
            'images' => $images,
        ]);
    }
    /**
     * スケジュール検索画面へ遷移
     *
     * @param Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        return view('search');
    }


    /**
     * IDを選んだスケジュール表示
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $schedule = Schedule::where('id', $request->id)->first();

/* dd($schedule->imageOne); */

        return view('schedule',compact('schedule'));
    }

    /**
     * 画像保存ページへ遷移
     *
     * @param  Request  $request
     * @return Response
     */

    public function picture(Request $request)
    {
        $images = Image::all();
        return view('store', ['images'=>$images]);
    }

    /**
     * 新しい画像を保存
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request){

        $image = new Image();
        $uploadImg = $request->image;
        if($uploadImg->isValid()) {
            $filePath = $uploadImg->store('public');
            $image->image = str_replace('public/', '', $filePath);
        }
        $image->save();
        return redirect('/store');
    }
 /**
     * 新しいスケジュールを作成保存
     *
     * @param  Request  $request
     * @return Response
     */
    public function schedule(Request $request){

        $validate = $request -> validate([
            'schedule_name' => 'required|max:25',
            'image0' => 'required|max:25',
            'image1' => 'required|max:25',
            'image2' => 'required|max:25',
            'image3' => 'required|max:25',
            'image4' => 'required|max:25',

        ]);

        //schedulesテーブルへの受け渡し
        $schedule = new Schedule;
        $schedule->schedule_name = $request->schedule_name;
        $schedule->image0 = $request->image0;
        $schedule->image1 = $request->image1;
        $schedule->image2 = $request->image2;
        $schedule->image3 = $request->image3;
        $schedule->image4 = $request->image4;
        $schedule->save();


        $schedules = Schedule::all();

        return view('list', ['schedules'=>$schedules]);



    }
     /**
     * リスト画面へ遷移
     *
     * @param Request $request
     * @return Response
     */
    public function list(Request $request)
    {

         $schedules = Schedule::all();

        return view('list', ['schedules'=>$schedules]);
    }
     /**
     * 選択したリストを削除
     *
     * @param Request $request
     * @return Response
     */
    public function delete_list(Request $request)
    {
        $schedule = Schedule::where('id', $request->id)->delete();
        return redirect('list');

    }
    /**
     * リスト画面で並び替え
     *
     * @param Request $request
     * @return Response
     */
    public function sort(Request $request)
    {
        $schedules = Schedule::sortable()->get();
        return view('list', ['schedules'=>$schedules]);
    }

    /**
     * 選択画像ページへ遷移
     *
     * @param Request $request
     * @return Response
     */
    public function select_picture(Request $request)
{

    $image = Image::where('id', $request->id)->first();



    return view('picture',compact('image'));
}
/**
* 選択した画像を削除
*
* @param Request $request
* @return Response
*/
public function delete_picture(Request $request)
{
   $image = Image::where('id', $request->id)->delete();
   return redirect('store');

}


}
