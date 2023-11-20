<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Update Visitor</h3>
            <div class="modal-body">
                <form autocomplete="off" method="POST" class="row g-3 needs-validation"
                    action="{{ route('visitor.edit', ['unique_key' => $visitordata->unique_key]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-11">
                        <label class="form-label">Name <span style="color: red">*</span></label>
                        <input class="form-control" type="text"  name="name" id="name" value="{{$visitordata->name}}"
                            required="" >
                    </div>
                    <div class="col-md-11">
                        <label class="form-label">Location <span style="color: red">*</span></label>
                        <textarea name="location" id="location" class="form-control" required="">{{$visitordata->location}}</textarea>
                    </div>
                    <div class="col-md-11">
                        <label class="form-label">Contact Number <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter Contact Number" name="contact_number"
                            required="" value="{{$visitordata->contact_number}}">
                    </div>
                    <div class="col-md-11">
                        <label class="form-label">Description <span style="color: red">*</span></label>
                        <textarea name="description" id="description" class="form-control" required="">{{$visitordata->description}}</textarea>
                    </div>
                    <div class="col-md-11" style="margin-top: 50px;">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
