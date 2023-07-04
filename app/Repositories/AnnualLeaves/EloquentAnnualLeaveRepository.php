<?php

namespace App\Repositories\AnnualLeaves;

use App\AnnualLeave;
use App\Http\Requests\AnnualLeaveRequest;
use App\Repositories\AnnualLeaves\AnnualLeaveInterface;

class EloquentAnnualLeaveRepository implements AnnualLeaveInterface
{

    public function getAnnualLeaves()
    {
        return AnnualLeave::all();
    }
    public function getAnnualLeaveById($id)
    {
        return AnnualLeave::find($id);
    }
    public function createAnnualLeave(AnnualLeaveRequest $request)
    {

        $annualLeave = new AnnualLeave();
        $annualLeave->user_id = $request->userId;
        $annualLeave->start_date = $request->startDate;
        $annualLeave->end_date = $request->endDate;
        $annualLeave->reason = $request->reason;
        $annualLeave->status = 'pending';
        $annualLeave->save();
        return $annualLeave;
    }
}
