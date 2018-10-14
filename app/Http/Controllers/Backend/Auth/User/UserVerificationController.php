<?php

namespace App\Http\Controllers\Backend\Auth\User;;

use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Auth\UserRepository;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;

class UserVerificationController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show( User $user)
    {
        return view('backend.auth.user.verify')
            ->withUser($user);
    }

    public function update(Request $request, User $user)
    {
        if($request->identity_approval == null)
        {
            $approval = 0;
        }
        else
        {
            $approval = 1;
        }


        $this->userRepository->identityApproval($user, $approval);

        return redirect()->route('admin.auth.user.account.verify.show', $user)->withFlashSuccess(__('alerts.backend.users.updated'));
    }
}
