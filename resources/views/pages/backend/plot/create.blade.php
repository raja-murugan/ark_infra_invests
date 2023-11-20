<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">New Plot</h3>
            <div class="modal-body">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('plot.store') }}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Plot No <span style="color: red">*</span></label>
                        <input class="form-control" type="numer" placeholder="Enter your plot no" name="plot_no"
                            required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control" type="text" name="Sq_ft" placeholder="Enter your plot Sq.ft"
                            required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Rate Per Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control"type="numer" name="rate_per_Sq_ft"
                            placeholder="Enter your Rate Per Sq.ft" required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Block <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="block" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Facing <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="facing" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="North">North</option>
                            <option value="South">South</option>
                            <option value="East">East</option>
                            <option value="West">West</option>
                            <option value="North East">North East</option>
                            <option value="North West">North West</option>
                            <option value="South East">South East</option>
                            <option value="South West">South West</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
