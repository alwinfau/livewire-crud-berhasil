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
                @error('npm')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="py-3">
                <input type="text" wire:model="name" placeholder="Student Name" class="form-control">
                @error('name')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <a href="/" wire:navigate class="btn btn-secondary">Back</a>
            <button wire:click="clear" class="btn btn-info">Cancel</button>
            <button wire:click="store" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
