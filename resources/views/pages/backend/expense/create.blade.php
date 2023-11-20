<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">New Expense</h3>
            <div class="modal-body">
                <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('expense.store') }}">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Date <span style="color: red">*</span></label>
                        <input class="form-control" type="date"  name="date" id="date"
                            required="" value="{{$today}}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Description <span style="color: red">*</span></label>
                        <textarea name="description" id="description" class="form-control" required=""></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Amount <span style="color: red">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter Amount" name="amount"
                            required="">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
