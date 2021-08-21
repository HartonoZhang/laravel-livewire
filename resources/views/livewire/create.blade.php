<div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" wire:model="firstname" placeholder="Enter..">
                        @error('firstname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" wire:model="lastname" placeholder="Enter..">
                        @error('lastname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" wire:model="email" placeholder="Enter..">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" wire:model="phone" placeholder="Enter..">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent = "store()">Submit</button>
            </div>
        </div>
    </div>
</div>
