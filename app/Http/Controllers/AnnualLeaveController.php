<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnualLeaveRequest;
use App\Repositories\AnnualLeaves\EloquentAnnualLeaveRepository;

class AnnualLeaveController extends Controller
{

     /**
     * AnnualLeaveController constructor.
     *
     * @param EloquentAnnualLeaveRepository $annualLeave
     */
    protected $annualLeave;
    public function __construct(EloquentAnnualLeaveRepository $annualLeave)
    {
        $this->annualLeave = $annualLeave;
    }

    /**
     * Display the specified annual leave.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Retrieve annual leave by ID
        $annualLeaves = $this->annualLeave->getAnnualLeaveById($id);

        // Return the annual leave as JSON response
        return response()->json($annualLeaves);
    }

    /**
     * Display a listing of the annual leaves.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Retrieve all annual leaves
        $annualLeaves = $this->annualLeave->getAnnualLeaves();

        // Return the annual leaves as JSON response
        return response()->json($annualLeaves);
    }

    /**
     * Store a newly created annual leave in storage.
     *
     * @param AnnualLeaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AnnualLeaveRequest $request)
    {
        // Create a new annual leave
        $annualLeave = $this->annualLeave->createAnnualLeave($request);

        // Return the created annual leave as JSON response
        return response()->json($annualLeave);
    }
}
