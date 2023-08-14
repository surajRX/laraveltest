<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form method="post" id="ValidateForm">
        @csrf
        <div class="container">
            <div class="col-sm-12">
                <div class="card-body">
                    <div style="background-color: orange;" class="card mt-5">
                        <div class="row">
                            <div class=col-sm-10>
                            <h1 style="color:dark;text-align:center ;margin-top:30px">Registration Form</h1>
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label>Name</label>
                                <input type="text" name='name' minlength="8" maxlength="25"
                                    value="{{$product->name}}" placeholder="Enter name" id="" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label>Workflow</label>
                                <input type="text" name='workflow' minlength="8" maxlength="25"
                                    value="{{$product->workflow}}" placeholder="Enter slug" id="" class="form-control">
                            </div>
                            
                            <div class="col-sm-6 mt-3">
                                <label>Day </label>
                                <input type="number" name='day' value="{{$product->day}}" placeholder="Enter price"
                                    id="" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label>Address</label>
                                <input type="text" name='address' value="{{$product->address}}" 
                                    placeholder="Enter quantity" id="" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label>Pincode</label>
                                <input type="number" name='pincode' value="{{$product->pincode}}" placeholder="Enter state"
                                    id="" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label for="">status</label>
                                <select name="status" value="{{$product->status}}" id="status" class='form-control'>
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-5">
                                <input type="submit" value="submit" class="btn btn-dark mt-5" style="display: flex;">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.error {
    color: red;
}
</style>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
$().ready(function() {

    $("#ValidateForm").validate({

        rules: {

            post_name: "required",
            post_slug: "required",
        },

        // in 'messages' user have to specify message as per rules

    });

});
</script>