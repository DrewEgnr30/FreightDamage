<template>
    <div class="container-fluid">
        <div id="printMe">
            <button v-on:click="Test">Canvas</button>
            <div class="mb-3 d-flex flex-row">
                <div>
                    <input v-on:keyup="filterAll1" v-model="filter_1" class="form-control" type="text" placeholder="Filter">
                </div>
                <div>
                    <div class="form-group">
                        <select v-model="filter1" class="form-control" id="select1">
                            <option id="FilterBy1">Filter By</option>
                            <option id="DateCreated1" data-index="2">Date Created</option>
                            <option id="Owner1" data-index="4">Owner</option>
                            <option id="OriginWH1" data-index="5">Origin WH</option>
                            <option id="ReturnWH1" data-index="6">Return WH</option>
                            <option id="Reason1" data-index="7">Reason</option>
                            <option id="Customer1" data-index="8">Customer</option>
                            <option id="POnum1" data-index="9">PO #</option>
                            <option id="Partnum1" data-index="10">Part #</option>
                            <option id="Orientation1" data-index="12">Orientation</option>
                            <option id="Class1" data-index="14">Class</option>
                            <option id="Serialnum1" data-index="15">Serial #</option>
                            <option id="Carrier1" data-index="16">Carrier</option>
                            <option id="Type1" data-index="18">Type</option>
                            <option id="SJA1" data-index="23">SJA</option>
                            <option id="InternalClaimnum1" data-index="26">Internal Claim #</option>
                            <option id="ClaimStatus1" data-index="29">Claim Status</option>
                            <option id="ReturnOrder1" data-index="30">Return Order</option>
                            <option id="Date1" data-index="25">Date</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input v-on:keyup="filterAll2" v-model="filter_2" class="form-control" type="text" placeholder="Filter">
                </div>
                <div>
                    <div class="form-group">
                        <select v-model="filter2" class="form-control" id="select2">
                            <option id="FilterBy2">Filter By</option>
                            <option id="DateCreated2" data-index="2">Date Created</option>
                            <option id="Owner2" data-index="4">Owner</option>
                            <option id="OriginWH2" data-index="5">Origin WH</option>
                            <option id="ReturnWH2" data-index="6">Return WH</option>
                            <option id="Reason2" data-index="7">Reason</option>
                            <option id="Customer2" data-index="8">Customer</option>
                            <option id="POnum2" data-index="9">PO #</option>
                            <option id="Partnum2" data-index="10">Part #</option>
                            <option id="Orientation2" data-index="12">Orientation</option>
                            <option id="Class2" data-index="14">Class</option>
                            <option id="Serialnum2" data-index="15">Serial #</option>
                            <option id="Carrier2" data-index="16">Carrier</option>
                            <option id="Type2" data-index="18">Type</option>
                            <option id="SJA2" data-index="23">SJA</option>
                            <option id="InternalClaimnum2" data-index="26">Internal Claim #</option>
                            <option id="ClaimStatus2" data-index="29">Claim Status</option>
                            <option id="ReturnOrder2" data-index="30">Return Order</option>
                            <option id="Date2" data-index="25">Date</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input v-on:keyup="filterAll3" v-model="filter_3" class="form-control" type="text" placeholder="Filter">
                </div>
                <div>
                    <div class="form-group">
                        <select v-model="filter3" class="form-control" id="select3">
                            <option id="FilterBy3">Filter By</option>
                            <option id="DateCreated3" data-index="2">Date Created</option>
                            <option id="Owner3" data-index="4">Owner</option>
                            <option id="OriginWH3" data-index="5">Origin WH</option>
                            <option id="ReturnWH3" data-index="6">Return WH</option>
                            <option id="Reason3" data-index="7">Reason</option>
                            <option id="Customer3" data-index="8">Customer</option>
                            <option id="POnum3" data-index="9">PO #</option>
                            <option id="Partnum3" data-index="10">Part #</option>
                            <option id="Orientation3" data-index="12">Orientation</option>
                            <option id="Class3" data-index="14">Class</option>
                            <option id="Serialnum3" data-index="15">Serial #</option>
                            <option id="Carrier3" data-index="16">Carrier</option>
                            <option id="Type3" data-index="18">Type</option>
                            <option id="SJA3" data-index="23">SJA</option>
                            <option id="InternalClaimnum3" data-index="26">Internal Claim #</option>
                            <option id="ClaimStatus3" data-index="29">Claim Status</option>
                            <option id="ReturnOrder3" data-index="30">Return Order</option>
                            <option id="Date3" data-index="25">Date</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input v-on:keyup="filterAll4" v-model="filter_4" class="form-control" type="text" placeholder="Filter">
                </div>
                <div>
                    <div class="form-group">
                        <select v-model="filter4" class="form-control" id="select4">
                            <option id="FilterBy4">Filter By</option>
                            <option id="DateCreated4" data-index="2">Date Created</option>
                            <option id="Owner4" data-index="4">Owner</option>
                            <option id="OriginWH4" data-index="5">Origin WH</option>
                            <option id="ReturnWH4" data-index="6">Return WH</option>
                            <option id="Reason4" data-index="7">Reason</option>
                            <option id="Customer4" data-index="8">Customer</option>
                            <option id="POnum4" data-index="9">PO #</option>
                            <option id="Partnum4" data-index="10">Part #</option>
                            <option id="Orientation4" data-index="12">Orientation</option>
                            <option id="Class4" data-index="14">Class</option>
                            <option id="Serialnum4" data-index="15">Serial #</option>
                            <option id="Carrier4" data-index="16">Carrier</option>
                            <option id="Type4" data-index="18">Type</option>
                            <option id="SJA4" data-index="23">SJA</option>
                            <option id="InternalClaimnum4" data-index="26">Internal Claim #</option>
                            <option id="ClaimStatus4" data-index="29">Claim Status</option>
                            <option id="ReturnOrder4" data-index="30">Return Order</option>
                            <option id="Date4" data-index="25">Date</option>
                        </select>
                    </div>
                </div>
            </div>
            <div v-if="show" class="row justify-content-center">
                <div class="col-md-12"> 
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Created At</th>
                            <th>RMA</th>
                            <th>Owner</th>
                            <th>Original WH</th>
                            <th>Return WH</th>
                            <th>Reason</th>
                            <th>Customer</th>
                            <th>PO #</th>
                            <th>Part #</th>
                            <th>Description</th>
                            <th>Orientation</th>
                            <th>Actual Cost</th>
                            <th>Class</th>
                            <th>Serial #</th>
                            <th>Carrier</th>
                            <th>PRO</th>
                            <th>Type</th>
                            <th>Salesforce Ref.</th>
                            <th>Note</th>
                            <th>New Order #</th>
                            <th>Credit Memo #</th>
                            <th>SJA</th>
                            <th>SJA Cost</th>
                            <th>Date Complete</th>
                            <th>Internal Claim #</th>
                            <th>Amount Filed</th>
                            <th>Amount Paid</th>
                            <th>Claim Status</th>
                            <th>Return Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="claim in claims" :key="claim.id">
                            <td><a v-on:click="deleteClaim"><i id="delete" v-bind:index="claim.id" class="fas fa-minus-circle fa-2x"></i></a></td>
                            <td><a v-on:click="editClaim"><i id="edit" v-bind:index="claim.id" class="fas fa-edit fa-2x"></i></a></td>
                            <td>{{claim.created_at}}</td>
                            <td>{{claim.RMA}}</td>
                            <td>{{claim.Owner}}</td>
                            <td>{{claim.Origin_WH}}</td>
                            <td>{{claim.Return_WH}}</td>
                            <td>{{claim.Reason}}</td>
                            <td>{{claim.Customer}}</td>
                            <td>{{claim.PO}}</td>
                            <td>{{claim.PN}}</td>
                            <td>{{claim.Description}}</td>
                            <td>{{claim.Orientation}}</td>
                            <td>$ {{claim.Act_Cost}}</td>
                            <td>{{claim.Class}}</td>
                            <td>{{claim.SN}}</td>
                            <td>{{claim.Carrier}}</td>
                            <td>{{claim.PRO}}</td>
                            <td>{{claim.Type}}</td>
                            <td>{{claim.SF_Ref}}</td>
                            <td>{{claim.Note}}</td>
                            <td>{{claim.New_Order}}</td>
                            <td>{{claim.Credit_Memo}}</td>
                            <td>{{claim.SJA}}</td>
                            <td>$ {{claim.SJA_Cost}}</td>
                            <td>{{claim.Date_Complete}}</td>
                            <td>{{claim.Int_Claim_Num}}</td>
                            <td>$ {{claim.Amount_Filed}}</td>
                            <td>$ {{claim.Amount_Paid}}</td>
                            <td>{{claim.Claim_Status}}</td>
                            <td>{{claim.Return_Order}}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div v-else class="row justify-content-center">
                <div class="col-md-12">
                    <h3>No Claims to Show</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import html2canvas from 'html2canvas'
    import jsPDF from 'jspdf'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.showClaims()
        },
        data: function () {
            return {
                claims: [],
                show: false,
                filter_1: "",
                filter_2: "",
                filter_3: "",
                filter_4: "",
                filter1: "Filter By",
                filter2: "Filter By",
                filter3: "Filter By",
                filter4: "Filter By",
                output: null
                }
        },
        methods: {
            showClaims: function () {
                axios.get('/api/claims')
                    .then(res => {
                        console.log(res)
                        this.claims = res.data
                        if (res.data.length > 0) {
                            this.show = true;
                        }
                        else {
                            this.show = false
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    })
            },
            deleteClaim: function (e) {
                console.log(e.target.attributes.index.value)
                axios.delete(`/api/claims/${e.target.attributes.index.value}`)
                    .then(res => {
                        console.log(res)
                        this.claims = res.data
                    })
                    .catch(err => {
                        console.log(err)
                    })
                this.showClaims()
            },
            editClaim: function (e) {
                console.log(e.target.attributes.index.value)
                window.location.href = `/edit?id=${e.target.attributes.index.value}`
                
            },
            filterAll1: function () {
                console.log("filter 1")
                const table = document.getElementById("myTable")
                const tr = table.getElementsByTagName("tr")
                const filter = this.filter_1.toUpperCase()
                const select = document.getElementById("select1")
                const options = select.getElementsByTagName("option")
                const filter_by = this.filter1.replace(/\s+/g, '').replace('#','num')
                var td
                var filter_index = document.querySelector("#"+filter_by+"1").dataset.index
                if(filter_index > 1){
                    for(var i = 1; i < tr.length; i++){
                        td = tr[i].getElementsByTagName("td")[filter_index]
                        td.innerHTML.toUpperCase().indexOf(filter) > -1 ? tr[i].style.display = "" : tr[i].style.display = "none"
                    }
                }
            },
            filterAll2: function () {
                console.log("filter 2")
                const table = document.getElementById("myTable")
                const tr = table.getElementsByTagName("tr")
                const filter = this.filter_2.toUpperCase()
                const select = document.getElementById("select2")
                const options = select.getElementsByTagName("option")
                const filter_by = this.filter2.replace(/\s+/g, '').replace('#','num')
                var td
                var filter_index = document.querySelector("#"+filter_by+"2").dataset.index
                console.log(filter_index)
                if(filter_index > 1){
                    for(var i = 1; i < tr.length; i++){
                        td = tr[i].getElementsByTagName("td")[filter_index]
                        td.innerHTML.toUpperCase().indexOf(filter) > -1 ? tr[i].style.display = "" : tr[i].style.display = "none"
                    }
                }
            },
            filterAll3: function () {
                console.log("filter 3")
                const table = document.getElementById("myTable")
                const tr = table.getElementsByTagName("tr")
                const filter = this.filter_3.toUpperCase()
                const select = document.getElementById("select3")
                const options = select.getElementsByTagName("option")
                const filter_by = this.filter3.replace(/\s+/g, '').replace('#','num')
                var td
                var filter_index = document.querySelector("#"+filter_by+"3").dataset.index
                console.log(filter_index)
                if(filter_index > 1){
                    for(var i = 1; i < tr.length; i++){
                        td = tr[i].getElementsByTagName("td")[filter_index]
                        td.innerHTML.toUpperCase().indexOf(filter) > -1 ? tr[i].style.display = "" : tr[i].style.display = "none"
                    }
                }
            },
            filterAll4: function () {
                console.log("filter 4")
                const table = document.getElementById("myTable")
                const tr = table.getElementsByTagName("tr")
                const filter = this.filter_4.toUpperCase()
                const select = document.getElementById("select4")
                const options = select.getElementsByTagName("option")
                const filter_by = this.filter4.replace(/\s+/g, '').replace('#','num')
                var td
                var filter_index = document.querySelector("#"+filter_by+"4").dataset.index
                console.log(filter_index)
                if(filter_index > 1){
                    for(var i = 1; i < tr.length; i++){
                        td = tr[i].getElementsByTagName("td")[filter_index]
                        td.innerHTML.toUpperCase().indexOf(filter) > -1 ? tr[i].style.display = "" : tr[i].style.display = "none"
                    }
                }
            },
            Test: function () {
                html2canvas(document.querySelector("#printMe"), {windowWidth: 3000, scale: 0.75}).then(function(canvas) {
                    var imgData = canvas.toDataURL('image/jpeg')
                    var doc = new jsPDF("landscape")
                    doc.addImage(imgData, 10, 10)
                    doc.save('test.pdf')
                })
            }
        }
    }
</script>
<style scoped>
    i{
        cursor: pointer;
    }
    #delete{
        color: red;
    }
    #edit{
        color: orange;
    }
    td{
        text-align: center;
        vertical-align: middle;
    }
</style>

