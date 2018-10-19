<template>
    <div class="container">
        <label for="serialnumber">Serial Number</label>
        <input v-model="claim.SN" class="form-control" type="text" id="serialnumber" placeholder="Serial Number">
        <form>
            <div class="form-group">
                <label for="ponumber">PO Number</label>
                <input v-model="claim.PO" class="form-control" type="text" id="ponumber" placeholder="PO Number">
            </div>
            <div class="form-group">
                <label for="partnumber">Part Number</label>
                <input v-model="claim.PN" class="form-control" type="text" id="partnumber" placeholder="Part Number">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input v-model="claim.Description" class="form-control" type="text" id="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="customer">Customer</label>
                <input v-model="claim.Customer" class="form-control" type="text" id="customer" placeholder="Customer">
            </div>
            <div class="form-group">
                <label for="actualcost">Actual Cost</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input v-model="claim.Act_Cost" class="form-control" type="text" id="actualcost" placeholder="Actual Cost">
                </div> 
            </div>
            <div class="form-group">
                <label for="owner">Owner</label>
                <select v-model="claim.Owner" class="form-control" id="owner">
                    <option>DMS</option>
                    <option>BCT</option>
                    <option>DSM</option>
                </select>
            </div>
             <div class="form-group">
                <label for="originwh">Origin Warehouse</label>
                <select v-model="claim.Origin_WH" class="form-control" id="originwh">
                    <option>BM</option>
                    <option>RH</option>
                    <option>NS</option>
                    <option>DS</option>
                    <option>MK</option>
                    <option>AT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="returnwh">Return Warehouse</label>
                <select v-model="claim.Return_WH" class="form-control" id="returnwh">
                    <option>BM</option>
                    <option>RH</option>
                    <option>NS</option>
                    <option>DS</option>
                    <option>MK</option>
                    <option>AT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rmanum">RMA Number</label>
                <input v-model="claim.RMA" class="form-control" type="text" id="rmanum" placeholder="RMA Number">
            </div>
            <div class="form-group">
                <label for="reason">Reason</label>
                <select v-model="claim.Reason" class="form-control" id="reason">
                    <option>Freight Damage</option>
                    <option>Return</option>
                    <option>Warranty</option>
                </select>
            </div>
            <div class="form-group">
                <label for="orientation">Orientation</label>
                <select v-model="claim.Orientation" class="form-control" id="orientation">
                    <option>Vertical</option>
                    <option>Horizontal</option>
                    <option>QSI</option>
                    <option>QGV</option>
                </select>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <select v-model="claim.Class" class="form-control" id="class">
                    <option>Piston</option>
                    <option>Rotary</option>
                    <option>Dryer</option>
                    <option>Vacuum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carrier">Carrier</label>
                <select v-model="claim.Carrier" class="form-control" id="carrier">
                    <option>ABF</option>
                    <option>UPS</option>
                    <option>UPS G</option>
                    <option>XPO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pro">PRO</label>
                <input v-model="claim.PRO" class="form-control" type="text" id="pro" placeholder="PRO">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select v-model="claim.Type" class="form-control" id="type">
                    <option>Repair and return to stock</option>
                    <option>Total loss - destroy in field</option>
                    <option>Discard in field</option>
                    <option>Repair and return to customer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sfref">Salesforce Reference</label>
                <input v-model="claim.SF_Ref" class="form-control" type="text" id="sfref" placeholder="Salesforce Reference">
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <textarea v-model="claim.Note" class="form-control" id="notes" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="neworder">New Order Number</label>
                <input v-model="claim.New_Order" class="form-control" type="text" id="neworder" placeholder="New Order Number">
            </div>
            <div class="form-group">
                <label for="creditmemo">Credit Memo Number</label>
                <input v-model="claim.Credit_Memo" class="form-control" type="text" id="creditmemo" placeholder="Credit Memo Number">
            </div>
            <div class="form-group">
                <label for="sja">SJA</label>
                <input v-model="claim.SJA" class="form-control" type="text" id="sja" placeholder="SJA">
            </div>
            <div class="form-group">
                <label for="sjacost">SJA Cost</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input v-model="claim.SJA_Cost" class="form-control" type="text" id="sjacost" placeholder="SJA Cost">
                </div>
            </div>
            <div class="form-group">
                <label for="datecomplete">Date Complete</label>
                <input v-model="claim.Date_Complete" class="form-control" type="text" id="datecomplete" placeholder="YYYYMMDD">
            </div>
            <div class="form-group">
                <label for="internalclaim">Internal Claim Number</label>
                <input v-model="claim.Int_Claim_Num" class="form-control" type="text" id="internalclaim" placeholder="Internal Claim Number">
            </div>
            <div class="form-group">
                <label for="amountfiled">Amount Filed</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input v-model="claim.Amount_Filed" class="form-control" type="text" id="amountfiled" placeholder="Amount Filed">
                </div>
            </div>
            <div class="form-group">
                <label for="amountpaid">Amount Paid</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input v-model="claim.Amount_Paid" class="form-control" type="text" id="amountpaid" placeholder="Amount Paid">
                </div>
            </div>
            <div class="form-group">
                <label for="claimstatus">Claim Status</label>
                <input v-model="claim.Claim_Status" class="form-control" type="text" id="claimstatus" placeholder="Claim Status">
            </div>
            <div class="form-group">
                <label for="returnorder">Return Order</label>
                <input v-model="claim.Return_Order" class="form-control" type="text" id="returnorder" placeholder="Return Order">
            </div>
        </form>
        <button v-on:click="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.showClaim()
        },
        created() {
        },
        props: ['id'],
        data: function () {
            return {
                claim: {}
            }
        },
        methods: {
            showClaim: function () {
                axios.get(`/api/claims/${this.id}`)
                    .then(res => {
                        console.log(res)
                        this.claim = res.data
                    })
                    .catch(err => {
                        console.log(err)
                    })
            },
            submit: function() {
                console.log(this.claim.RMA)
                axios.put(`/api/claims/${this.id}`, {
                    RMA: this.claim.RMA,
                    Owner: this.claim.Owner,
                    Origin_WH: this.claim.Origin_WH,
                    Return_WH: this.claim.Return_WH,
                    Reason: this.claim.Reason,
                    Customer: this.claim.Customer,
                    PO: this.claim.PO,
                    PN: this.claim.PN,
                    Description: this.claim.Description,
                    Act_Cost: this.claim.Act_Cost,
                    Class: this.claim.Class,
                    SN: this.claim.SN,
                    Carrier: this.claim.Carrier,
                    PRO: this.claim.PRO,
                    Type: this.claim.Type,
                    SF_Ref: this.claim.SF_Ref,
                    Note: this.claim.Note,
                    New_Order: this.claim.New_Order,
                    Credit_Memo: this.claim.Credit_Memo,
                    SJA: this.claim.SJA,
                    SJA_Cost: this.claim.SJA_Cost,
                    Date_Complete: this.claim.Date_Complete,
                    Int_Claim_Num: this.claim.Int_Claim_Num,
                    Amount_Filed: this.claim.Amount_Filed,
                    Amount_Paid: this.claim.Amount_Paid,
                    Claim_Status: this.claim.Claim_Status,
                    Return_Order: this.claim.Return_Order
                })
                    .then(res => {
                        console.log(res)
                        window.location.href = "/"
                    })
                    .catch(err => {
                        console.log(err)
                    })
            },
        }
    }
</script>
