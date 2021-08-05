@include('layouts.header')
<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">

        <!--page title-->
        <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data Table</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">DataTable</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--/page title-->

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Datatable</div>
                        </div>
                    </div>
                    <div class="card-body- pt-3 pb-4">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Model</th>
                                        <th>Mileage</th>
                                        <th>Trasmission</th>
                                        <th>Drive</th>
                                        <th>Dealer</th>
                                        <th>Price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Model</th>
                                        <th>Mileage</th>
                                        <th>Trasmission</th>
                                        <th>Drive</th>
                                        <th>Dealer</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($products as $pd)
                                    <tr>
                                        <td><img src="images/{{$pd->photo}}" width="85" height="50" /></td>
                                        <td>{{$pd->title}}</td>
                                        <td>{{$pd->model}}</td>
                                        <td>{{$pd->mileage}}</td>
                                        <td>{{$pd->trans}}</td>
                                        <td>{{$pd->drive}}</td>
                                        <td>{{$pd->dealer}}</td>
                                        <td>{{$pd->price}}</td>
                                        <td> <button type="button" data-value="{{$pd->id}}" class="btn btn-sm btn-purple detail" data-toggle="modal" data-target=".bd-example-modal-lg">Details</button>
                                            <form method="post" action="/delete-stock">
                                                @csrf
                                                <input type="hidden" value="{{$pd->id}}" name="id_stk" />
                                                <button class="btn btn-sm btn-danger" name="submit" type="submit" style="margin-top:2px">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaltitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="needs-validation" method="post" action="/update-stock" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Status</label>
                                    <select class="custom-select" id="status" name="status">
                                        <option>Choose...</option>
                                        <option value="available">Available</option>
                                        <option value="sold_out">Sold Out</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Stock Location</label>
                                    <select class="custom-select" id="stk_loc" name="stock_loc">
                                        <option>Choose...</option>
                                        <option value="pakistan">Pakistan</option>
                                        <option value="dubai">Dubai</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Stock Port</label>
                                    <select class="custom-select" id="stk_port" name="stock_port">
                                        <option>Choose...</option>
                                        <option value="bin_qasim">Bin Qasim</option>
                                        <option value="dubai_port">Dubai Port</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip03">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                    <div class="invalid-tooltip">
                                        Please provide a Title.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">Model</label>
                                    <input type="text" class="form-control" name="model" id="model" placeholder="Model No" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid Model No.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Vehicle Type</label>
                                    <select class="custom-select" id="veh_type" name="veh_type">
                                        <option>Choose...</option>
                                        <option value="car">Car</option>
                                        <option value="bike">Bike</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Transmission</label>
                                    <select class="custom-select" id="trans" name="trans">
                                        <option>Choose...</option>
                                        <option value="auto">Auto</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Drive</label>
                                    <select class="custom-select" id="drive" name="drive">
                                        <option>Choose...</option>
                                        <option value="RHD">RHD</option>
                                        <option value="LHD">LHD</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">Dealer</label>
                                    <input type="text" class="form-control" name="dealer" id="dealer" placeholder="Dealer" required>
                                    <div class="invalid-tooltip">
                                        Please provide a Dealer.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip03">Mileage</label>
                                    <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Milage" required>
                                    <div class="invalid-tooltip">
                                        Please provide a Mileage.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">Chasis No</label>
                                    <input type="text" class="form-control" name="chasisno" id="chs_no" placeholder="Chasis No" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid Chasis No.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip03">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
                                    <div class="invalid-tooltip">
                                        Please provide a Price.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Fuel</label>
                                    <select class="custom-select" id="fuel" name="fuel">
                                        <option selected>Choose...</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="cng">CNG</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip02">Upload Photo</label>
                                    <input type="file" name="select_file" id="photo" />
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="stockid" name="stock_id" />
                            <button class="btn btn-primary" name="submit" type="submit">Update</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" charset="utf-8">
        window.addEventListener('load', function() {
            let btn = document.getElementsByClassName('detail')
            for (let i = 0; i < btn.length; i++) {
                btn[i].addEventListener('click', function(e) {
                    let id = e.target.dataset.value
                    // console.log(id)
                    var xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                        let data = JSON.parse(this.response)
                        document.getElementById('modaltitle').innerHTML = data.data.title
                        document.getElementById('status').value = data.data.status
                        document.getElementById('stk_loc').value = data.data.stock_location
                        document.getElementById('stk_port').value = data.data.stock_port
                        document.getElementById('title').value = data.data.title
                        document.getElementById('model').value = data.data.model
                        document.getElementById('veh_type').value = data.data.veh_type
                        document.getElementById('trans').value = data.data.trans
                        document.getElementById('drive').value = data.data.drive
                        document.getElementById('dealer').value = data.data.dealer
                        document.getElementById('mileage').value = data.data.mileage
                        document.getElementById('chs_no').value = data.data.chasis_no
                        document.getElementById('price').value = data.data.price
                        document.getElementById('fuel').value = data.data.fuel
                        // document.getElementById('photo').value = data.data.photo
                        document.getElementById('stockid').value = data.data.id



                    }
                    xhttp.open("GET", `product/${id}`, true)
                    xhttp.send();
                })
            }
        })
    </script>
    @include('layouts.footer')
