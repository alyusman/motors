@include('layouts.header')
<div class="content-wrapper">
    <div class="container-fluid">

        <!--page title-->
        <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Create Product</h4>
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

        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-warning">
                        <div class="custom-title">Details</div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="needs-validation" method="post" action="/create-product" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Status</label>
                                <select class="custom-select" id="inputGroupSelect01" name="status">
                                    <option selected>Choose...</option>
                                    <option value="available">Available</option>
                                    <option value="sold_out">Sold Out</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Stock Location</label>
                                <select class="custom-select" id="inputGroupSelect01" name="stock_loc">
                                    <option selected>Choose...</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="dubai">Dubai</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Stock Port</label>
                                <select class="custom-select" id="inputGroupSelect01" name="stock_port">
                                    <option selected>Choose...</option>
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
                                <input type="text" class="form-control" name="title" id="validationTooltip03" placeholder="Title" required>
                                <div class="invalid-tooltip">
                                    Please provide a Title.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04">Model</label>
                                <input type="text" class="form-control" name="model" id="validationTooltip04" placeholder="Model No" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid Model No.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Vehicle Type</label>
                                <select class="custom-select" id="inputGroupSelect01" name="veh_type">
                                    <option selected>Choose...</option>
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
                                <select class="custom-select" id="inputGroupSelect01" name="trans">
                                    <option selected>Choose...</option>
                                    <option value="auto">Auto</option>
                                    <option value="manual">Manual</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Drive</label>
                                <select class="custom-select" id="inputGroupSelect01" name="drive">
                                    <option selected>Choose...</option>
                                    <option value="RHD">RHD</option>
                                    <option value="LHD">LHD</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04">Dealer</label>
                                <input type="text" class="form-control" name="dealer" id="validationTooltip04" placeholder="Dealer" required>
                                <div class="invalid-tooltip">
                                    Please provide a Dealer.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip03">Mileage</label>
                                <input type="text" class="form-control" name="mileage" id="validationTooltip03" placeholder="Milage" required>
                                <div class="invalid-tooltip">
                                    Please provide a Mileage.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04">Chasis No</label>
                                <input type="text" class="form-control" name="chasisno" id="validationTooltip04" placeholder="Chasis No" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid Chasis No.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip03">Price</label>
                                <input type="text" class="form-control" name="price" id="validationTooltip03" placeholder="Price" required>
                                <div class="invalid-tooltip">
                                    Please provide a Price.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip01">Fuel</label>
                                <select class="custom-select" id="inputGroupSelect01" name="fuel">
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
                                <input type="file" name="select_file" />
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@include('layouts.footer')
