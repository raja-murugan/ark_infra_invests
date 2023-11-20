<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
            <h3 class="modal-header justify-content-center border-0">Status Update</h3>
            <div class="modal-body">
               <h5>Are your Sure ?</h5>
               <p class="text-muted font-size-16 mb-4">Are you block this plot!</p>

               <div class="hstack gap-2 justify-content-center mb-0">
                  <form autocomplete="off" method="POST"
                     action="{{ route('plot.status_update', ['unique_key' => $plotdata->unique_key]) }}">
                     @method('PUT')
                     @csrf
                     <button type="submit" class=" btn-danger">Yes, Block</button>
                  </form>
                  <button type="button" class=" btn-secondary"
                     data-bs-dismiss="modal">Cancel</button>
               </div>

            </div>
        </div>
    </div>
</div>
