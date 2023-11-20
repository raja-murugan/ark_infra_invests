<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">New Reference</h3>
            <div class="modal-body">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('reference.store') }}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Name <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter your plot no" name="name"
                            required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone Number <span style="color: red">*</span></label>
                        <input class="form-control" type="text" name="phone_no" placeholder="Enter your plot Sq.ft"
                            required="">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Address </label>
                        <input class="form-control"type="text" name="address"
                            placeholder="Enter your Rate Per Sq.ft">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
