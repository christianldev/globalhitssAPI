<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiErrorHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserController extends Controller
{

    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return response()->json($this->users->all());
        } catch (\Throwable $e) {
            return ApiErrorHandler::handle($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        try {
            $user = $this->users->create($request->validated());
            return response()->json($user, 201);
        } catch (\Throwable $e) {
            return ApiErrorHandler::handle($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = $this->users->find($id);
            if (!$user) {
                throw new ModelNotFoundException();
            }
            return response()->json($user);
        } catch (\Throwable $e) {
            return ApiErrorHandler::handle($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        try {
            $user = $this->users->update($id, $request->validated());
            if (!$user) {
                throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
            }
            return response()->json($user);
        } catch (\Throwable $e) {
            return ApiErrorHandler::handle($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = $this->users->delete($id);
            if (!$user) {
                throw new ModelNotFoundException();
            }
            return response()->json(null, 204);
        } catch (\Throwable $e) {
            return ApiErrorHandler::handle($e);
        }
    }
}
