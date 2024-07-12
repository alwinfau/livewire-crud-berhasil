<div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between items-center">
                <h5 class="card-title">Entry Student</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="py-3">
                <input type="number" wire:model="npm" placeholder="NPM" class="form-control">
            </div>
            <div class="py-3">
                <input type="text" wire:model="name" placeholder="Student Name" class="form-control">
            </div>
        </div>

        <div class="card-footer">
            <a href="/" wire:navigate class="btn btn-secondary">Back</a>
            <button wire:click="cancel" class="btn btn-info">Cancel</button>
            <button wire:click="update" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
