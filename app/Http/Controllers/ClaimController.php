<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claims;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims = Claims::all();
        return $claims;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $claim = new Claims;
        $claim->RMA = $request->RMA ?: null;
        $claim->Owner = $request->Owner ?: null;
        $claim->Origin_WH = $request->Origin_WH ?: null;
        $claim->Return_WH = $request->Return_WH ?: null;
        $claim->Reason = $request->Reason ?: null;
        $claim->Customer = $request->Customer ?: null;
        $claim->PO = $request->PO ?: null;
        $claim->PN = $request->PN ?: null;
        $claim->Description = $request->Description ?: null;
        $claim->Orientation = $request->Orientation ?: null;
        $claim->Act_Cost = $request->Act_Cost ?: null;
        $claim->Class = $request->Class ?: null;
        $claim->SN = $request->SN ?: null;
        $claim->Carrier = $request->Carrier ?: null;
        $claim->PRO = $request->PRO ?: null;
        $claim->Type = $request->Type ?: null;
        $claim->SF_Ref = $request->SF_Ref ?: null;
        $claim->Note = $request->Note ?: null;
        $claim->New_Order = $request->New_Order ?: null;
        $claim->Credit_Memo = $request->Credit_Memo ?: null;
        $claim->SJA = $request->SJA ?: null;
        $claim->SJA_Cost = $request->SJA_Cost ?: null;
        $claim->Date_Complete = $request->Date_Complete ?: null;
        $claim->Int_Claim_Num = $request->Int_Claim_Num ?: null;
        $claim->Amount_Filed = $request->Amount_Filed ?: null;
        $claim->Amount_Paid = $request->Amount_Paid ?: null;
        $claim->Claim_Status = $request->Claim_Status ?: null;
        $claim->Return_Order = $request->Return_Order ?: null;
        $claim->save();
        return $claim;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $claim = Claims::findorFail($id);
        return $claim;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claim = Claims::findorFail($id);
        return $claim;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $claim = Claims::findorFail($id);
        $claim->RMA = $request->RMA ?: null;
        $claim->Owner = $request->Owner ?: null;
        $claim->Origin_WH = $request->Origin_WH ?: null;
        $claim->Return_WH = $request->Return_WH ?: null;
        $claim->Reason = $request->Reason ?: null;
        $claim->Customer = $request->Customer ?: null;
        $claim->PO = $request->PO ?: null;
        $claim->PN = $request->PN ?: null;
        $claim->Description = $request->Description ?: null;
        $claim->Orientation = $request->Orientation ?: null;
        $claim->Act_Cost = $request->Act_Cost ?: null;
        $claim->Class = $request->Class ?: null;
        $claim->SN = $request->SN ?: null;
        $claim->Carrier = $request->Carrier ?: null;
        $claim->PRO = $request->PRO ?: null;
        $claim->Type = $request->Type ?: null;
        $claim->SF_Ref = $request->SF_Ref ?: null;
        $claim->Note = $request->Note ?: null;
        $claim->New_Order = $request->New_Order ?: null;
        $claim->Credit_Memo = $request->Credit_Memo ?: null;
        $claim->SJA = $request->SJA ?: null;
        $claim->SJA_Cost = $request->SJA_Cost ?: null;
        $claim->Date_Complete = $request->Date_Complete ?: null;
        $claim->Int_Claim_Num = $request->Int_Claim_Num ?: null;
        $claim->Amount_Filed = $request->Amount_Filed ?: null;
        $claim->Amount_Paid = $request->Amount_Paid ?: null;
        $claim->Claim_Status = $request->Claims_Status ?: null;
        $claim->Return_Order = $request->Return_Order ?: null;
        $claim->save();
        return $claim;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Claims::destroy($id);
        return "Claim has been destroyed.";
    }
}
