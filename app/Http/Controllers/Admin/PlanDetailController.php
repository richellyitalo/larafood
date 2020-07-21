<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlanDetailRequest;
use App\Models\Plan;
use App\Models\PlanDetail;
use Illuminate\Http\Request;

class PlanDetailController extends Controller
{
    private $repository, $planRepository;

    public function __construct(PlanDetail $planDetail, Plan $plan)
    {
        $this->repository = $planDetail;
        $this->planRepository = $plan;
    }

    public function index($urlPlan)
    {
        $plan = $this->planRepository->where('url', $urlPlan)->first();

        if (!$plan) {
            return redirect()->back();
        }

        $details = $plan->details()->paginate();

        return view('admin.pages.plans.details.index', compact('details', 'plan'));
    }

    public function create($urlPlan)
    {
        $plan = $this->planRepository->where('url', $urlPlan)->first();

        if (!$plan) {
            return redirect()->back();
        }

        return view('admin.pages.plans.details.create', compact('plan'));
    }

    public function store(StoreUpdatePlanDetailRequest $request, $urlPlan)
    {
        if (!$plan = $this->planRepository->where('url', $urlPlan)->first()) {
            return redirect()->back();
        }

        $plan->details()->create($request->all());

        return redirect(route('plans.details', $plan->url));
    }

    public function edit($urlPlan, $idPlanDetail)
    {
        $plan = $this->planRepository->where('url', $urlPlan)->first();

        if (!$plan || !$planDetail = $plan->details()->find($idPlanDetail)) {
            return redirect()->back();
        }

        return view('admin.pages.plans.details.edit', compact('plan', 'planDetail'));
    }

    public function update(StoreUpdatePlanDetailRequest $request, $urlPlan, $idPlanDetail)
    {
        $plan = $this->planRepository->where('url', $urlPlan)->first();

        if (!$plan || !$planDetail = $plan->details()->find($idPlanDetail)) {
            return redirect()->back();
        }

        $planDetail->update($request->all());
        return redirect(route('plans.details', $plan->url));
    }
}
