<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{

    public function index(Reply $reply)
    {
        return $reply->like()->count();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Reply $reply
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Reply $reply)
    {
        $reply->likeIt();
        return response('Created', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Reply $reply
     * @return void
     * @throws \Exception
     */
    public function destroy(Reply $reply)
    {
        $reply->unLikeIt();
    }
}
