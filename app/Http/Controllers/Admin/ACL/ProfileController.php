<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProfile;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    private $repository;

    public function __construct(Profile $profile)
    {
        $this->repository = $profile;
    }

    public function index()
    {
        $profiles = $this->repository->latest()->paginate();

        return view('admin.pages.profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.pages.profiles.create');
    }

    public function store(StoreUpdateProfile $request)
    {
        $this->repository->create($request->all());

        return redirect(route('profiles.index'))
            ->with('success', 'Perfil criado com sucesso');
    }

    public function show($id)
    {
        $profile = $this->repository->find($id);

        if (!$profile) {
            return redirect()->back();
        }

        return view('admin.pages.profiles.show', compact('profile'));
    }

    public function destroy($id)
    {
        $profile = $this->repository->find($id);

        if (!$profile) {
            return redirect()->back();
        }

        $this->repository->destroy($profile->id);

        return redirect(route('profiles.index'))->with('success', 'Perfil excluido com sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');
        $profiles = $this->repository
            ->where(function ($query) use ($request) {
                if ($request->filter) {
                    $query->where('name', 'like', "%{$request->filter}%")
                        ->orWhere('description', 'like', "%{$request->filter}%");
                }
            })
            ->paginate(1);

        return view('admin.pages.profiles.index', compact('profiles', 'filters'));
    }

    public function edit($id)
    {
        $profile = $this->repository->find($id);

        if (!$profile) {
            return redirect()->back();
        }

        return view('admin.pages.profiles.edit', compact('profile'));
    }

    public function update(StoreUpdateProfile $request, $id)
    {
        $profile = $this->repository->find($id);

        if (!$profile) {
            return redirect()->back();
        }

        $profile->update($request->all());

        return redirect(route('profiles.index'))
            ->withSuccess('Perfil atualizado com sucesso');
    }
}
