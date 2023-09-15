<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class PersonController extends Controller
{
    use HttpResponses;
    
    //for index
    public function store(StoreUserRequest $request)
    {

        // validate the result
        $request->validated();

        if(User::where('name', $request->name)->first()) {

            // return a response
            return $this->success([
                "user" => 'These person name already exit',
            ]);

        } else {

            // store a user
            $user = User::create([
                'name' => $request->name
            ]);

            // return a response
            return $this->success([
                "user" => $user,
            ]);

        }

    }

    public function single(Request $request) 
    {

        $user = User::where('id', $request->id)
        ->orWhere('name', $request->id)
        ->first();

        if ($user) {
            return $this->success([
                "user" => $user,
            ]);
        } else {
            // return a response
            return $this->success([
                "failed" => "User does not exist",
            ]);
        }


    }


    public function update(UpdateUserRequest $request, $id) 
    {
       
        // validate the result
        $request->validated();

        $record = User::find($id); // Retrieve the model instance you want to update

        if ($record) {
            $record->update($request->all());
            
            return $this->success([
                "user" => User::find($id),
            ]);
        } else {
            // Check if a user with the given name exists
            $userByName = User::where('name', $request->id)->first();
            
            if ($userByName) {
                $userByName->update($request->all());
        
                return $this->success([
                    "user" => User::find($userByName->id), // Use the ID of the user found by name
                ]);
            } else {
                // return a response
                return $this->success([
                    "failed" => "User does not exist",
                ]);
            }
        }
        


    }

    public function delete($id)
    {

        $record = User::find($id); // Retrieve the model instance you want to delete

        if ($record) {
        
            $record->delete();
            
            return $this->success([
                "user" => "Deleted Successfully",
            ]);
        } else {
            // Check if a user with the given name exists
            $userByName = User::where('name', $id)->first();
            
            if ($userByName) {
                $userByName->delete();

                return $this->success([
                    "user" => "Deleted Successfully",
                ]);

            } else {
                // return a response
                return $this->success([
                    "failed" => "User does not exist",
                ]);
            }
        }


    }
}
