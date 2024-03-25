<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Response;

use App\Services\UserService;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            new UserCollection($this->userService->getUsers())
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        if($request->fails()) {
            return response()->json($request->errors());
        }

        return response()->json(
            new UserResource($this->userService->save($request->validated()))
        );
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        return response()->json(
            new UserResource($this->userService->getById($id))
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, $id)
    {
        return response()->json(
            new UserResource($this->userService->save($request->validated(), $id))
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(
            $this->userService->delete($id),
        );
    }
}
