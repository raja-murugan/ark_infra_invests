<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">New Visitor</h3>
            <div class="modal-body">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('visitor.store') }}">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Name <span style="color: red">*</span></label>
                        <input class="form-control" type="text"  name="name" id="name"
                            required="" >
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Location <span style="color: red">*</span></label>
                        <textarea name="location" id="location" class="form-control" required=""></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Contact Number <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter Contact Number" name="contact_number"
                            required="">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Description <span style="color: red">*</span></label>
                        <textarea name="description" id="description" class="form-control" required=""></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
