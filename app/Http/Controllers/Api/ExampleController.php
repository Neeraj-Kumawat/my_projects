<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{

    
    public function posts()
    {
       
        $data = array();
        $data['customer'] = view('admin.folder.post');
        return view('admin.home',$data);
       
    }



    public function storemyapi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            $post = new Post;
            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();

        //     return redirect()->back()->with('success', 'Your data has been inserted successfully');
        // }
        return response()->json([
            'message' => 'Your data has been inserted successfully'
        ], 200);
    }
    }


    // public function destroy($id)
    // {
    //     $post = Post::find($id);
    
    //     if (is_null($post)) {
    //         $response = [
    //             'message' => "Post doesn't exist",
    //             'status' => 0
    //         ];
    //         $respCode = 404;
    //     } else {
    //         DB::beginTransaction();
    //         try {
    //             $post->delete();
    //             DB::commit();
    //             $response = [
    //                 'message' => "Post deleted successfully",
    //                 'status' => 1
    //             ];
    //             $respCode = 200;
    //         } catch (\Exception $err) {
    //             DB::rollBack();
    //             $response = [
    //                 'message' => "Internal server error",
    //                 'status' => 0
    //             ];
    //             $respCode = 500;
    //         }
    //     }
    //     return response()->json($response, $respCode);
    // }

}
