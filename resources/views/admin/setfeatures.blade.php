@extends("adminlayout.adminlayout")
@section("body")


<div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>

</button>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">

<div><h3>set Features figures</h3></div>
<div class="table table-responsive">

    <table class="table" style="background-color: rgb(226, 215, 215)" style="">
        <thead>
            <tr>

                <th>Transactions</th>
                <th>Wallets</th>
                <th>Countries</th>
                <th>Operators</th>
                <th>Online visitors</th>
                <th>save</th>

            </tr>

        </thead>
        <tbody> <form action="{{route('statistics_set_post')}}" method="post">
                    @csrf
                    <tr class="tr-shadow">
                        <td>
                            <input type="text" required placeholder="set transactions here" name="totalusers" value="{{$feature ? $feature->totalusers :''}}" id=""></td>
                        <td>
                            <span class="desc"><input required placeholder="set Wallets here"  type="text" value="{{$feature ? $feature->totaldeposit :''}}" name="totaldeposit" id=""></span>
                        </td>

                        <td><input type="text" required name="totalwithdrawn" placeholder="set Countries here"  id="" value="{{$feature? $feature->totalwithdrawn :''}}"></td>

                        <td>
                            <span class="desc"><input  required type="text" placeholder="set Operators here"  value="{{$feature ? $feature->started :''}}" name="started" id=""></span>
                        </td>

                        <td>
                            <span class="desc"><input required type="text" placeholder="set online visitors users here"  value="{{$feature ? $feature->onlinevisitors :''}}" name="onlinevisitors" id=""></span>
                        </td>

                        <td>
                            <button type="submit" class="btn btn-primary">change</button>
                        </td>
                    </tr>
                </form>
                <tr class="spacer"></tr>

        </tbody>
    </table>

</div>

</div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- END DATA TABLE-->

@endsection
