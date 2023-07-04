<?php
namespace App\Repositories\AnnualLeaves;

use App\Http\Requests\AnnualLeaveRequest;

interface AnnualLeaveInterface
{
    public function createAnnualLeave(AnnualLeaveRequest $request);
    public function getAnnualLeaves();
    public function getAnnualLeaveById($id);

}
