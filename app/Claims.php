<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claims extends Model
{
    protected $fillable = ['RMA','Owner','Origin_WH','Return_WH','Reason','Customer','PO','PN','Description','Orientation','Act_Cost','Class','SN','Carrier','PRO','Type','SF_Ref','Note','New_Order','Credit_Memo','SJA','SJA_Cost','Date_Complete','Int_Claim_Num','Amount_Filed','Amount_Paid','Claim_Status','Return_Order'];
}
