<?php

namespace App\Http\Controllers\Backend\Auth\Category;

use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\Auth\CategoryRepository;
use App\Repositories\Backend\Auth\PermissionRepository;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var PermissionRepository
     */
    protected $permissionRepository;

    /**
     * @param CategoryRepository       $categoryRepository
     * @param PermissionRepository $permissionRepository
     */
    public function __construct(CategoryRepository $categoryRepository, PermissionRepository $permissionRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.auth.category.index')
            ->withCategories($this->categoryRepository
                ->paginate(25));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.auth.category.create')
            ->withPermissions($this->permissionRepository->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->name);
        $this->categoryRepository->create($request->only('name'));

        return redirect()->route('admin.auth.category.index')->withFlashSuccess(__('alerts.backend.categories.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
