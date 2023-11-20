<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Update Expense</h3>
            <div class="modal-body">
                <form autocomplete="off" method="POST" class="row g-3 needs-validation"
                    action="{{ route('expense.edit', ['unique_key' => $expensedata->unique_key]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-11">
                        <label class="form-label">Date <span style="color: red">*</span></label>
                        <input class="form-control" type="date"  name="date" id="date" value="{{$expensedata->date}}"
                            required="">
                    </div>
                    <div class="col-md-11">
                        <label class="form-label">Description <span style="color: red">*</span></label>
                        <textarea name="description" id="description" class="form-control" required="">{{$expensedata->description}}</textarea>
                    </div>
                    <div class="col-md-11">
                        <label class="form-label">Amount <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter Amount" name="amount" value="{{$expensedata->amount}}"
                            required="">
                    </div>
                    <div class="col-md-11" style="margin-top: 50px;">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
