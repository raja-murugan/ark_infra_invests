<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Update Plot</h3>
            <div class="modal-body">
                <form autocomplete="off" method="POST"
                    action="{{ route('plot.edit', ['unique_key' => $plotdata->unique_key]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Plot No <span style="color: red">*</span></label>
                        <input class="form-control" type="numer" placeholder="Enter your plot no" name="plot_no"
                            required="" value="{{ $plotdata->plot_no }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" style="margin-top: 10px">Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control" type="text" name="Sq_ft" placeholder="Enter your plot Sq.ft"
                            required="" value="{{ $plotdata->Sq_ft }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-labe" style="margin-top: 10px">Rate Per Sq.ft <span style="color: red">*</span></label>
                        <input class="form-control"type="numer" name="rate_per_Sq_ft"
                            placeholder="Enter your Rate Per Sq.ft" required="" value="{{ $plotdata->rate_per_Sq_ft }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Block <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="block" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="A"@if ('A' === $plotdata->block) selected='selected' @endif>A</option>
                            <option value="B"@if ('B' === $plotdata->block) selected='selected' @endif>B</option>
                            <option value="C"@if ('C' === $plotdata->block) selected='selected' @endif>C</option>
                            <option value="D"@if ('D' === $plotdata->block) selected='selected' @endif>D</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" style="margin-top: 10px">Facing <span style="color: red">*</span></label>
                        <select class="form-select" id="publishStatus" name="facing" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="North" @if ('North' === $plotdata->facing) selected='selected' @endif>North</option>
                            <option value="South" @if ('South' === $plotdata->facing) selected='selected' @endif>South</option>
                            <option value="East" @if ('East' === $plotdata->facing) selected='selected' @endif>East</option>
                            <option value="West" @if ('West' === $plotdata->facing) selected='selected' @endif>West</option>
                            <option value="North East" @if ('North East' === $plotdata->facing) selected='selected' @endif>North East</option>
                            <option value="North West" @if ('North West' === $plotdata->facing) selected='selected' @endif>North West</option>
                            <option value="South East" @if ('South East' === $plotdata->facing) selected='selected' @endif>South East</option>
                            <option value="South West" @if ('South West' === $plotdata->facing) selected='selected' @endif>South West</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top: 50px;">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
