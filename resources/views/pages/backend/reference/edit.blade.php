<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Update Reference ID</h3>
            <div class="modal-body">
                <form autocomplete="off" method="POST"
                    action="{{ route('reference.edit', ['unique_key' => $referencedata->unique_key]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-11">
                        <label class="form-label">Name <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter your plot no" name="name"
                            required="" value="{{ $referencedata->name }}">
                    </div>
                    <div class="col-md-11">
                        <label class="form-label" style="margin-top: 10px">Phone Number<span style="color: red">*</span></label>
                        <input class="form-control" type="text" name="phone_no" placeholder="Enter your plot phone no"
                            required="" value="{{ $referencedata->phone_no }}">
                    </div>
                    <div class="col-md-11">
                        <label class="form-labe" style="margin-top: 10px">Address <span style="color: red">*</span></label>
                        <input class="form-control"type="numer" name="address"
                            placeholder="Enter your Address" required="" value="{{ $referencedata->address }}">
                    </div>
                    <div class="col-md-12" style="margin-top: 50px;">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
