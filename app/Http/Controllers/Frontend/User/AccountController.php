<?php

namespace App\Http\Controllers\Frontend\User;

use App\category;
use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Auth\UserRepository;
use App\Http\Requests\Frontend\User\VerifyIDRequest;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ProfileController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $categoryModels = category::all();
        foreach ($categoryModels as $categoryModel)
        {
            $categories[$categoryModel->id] =  $categoryModel->name;
        }
        return view('frontend.user.account', ['categories' => $categories]);
    }

    public function idVerify(VerifyIDRequest $request)
    {
         $this->userRepository->confirmID(
            $request->user()->id,
            $request->has('upload_identity') ? $request->file('upload_identity') : false
        );
        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.profile_updated'));
    }
}
