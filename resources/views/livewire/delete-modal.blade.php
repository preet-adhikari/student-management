<div class="p-8">
    <div class="m-3">
        <h4 class="text-lg font-bold">
            Are you sure you want to delete this record?
        </h4>
        <div class="mt-3 flex justify-end space-x-3">
            <button wire:click="$emit('delete')" class="p-2 bg-red-800 hover:bg-red-500 rounded shadow-sm text-white">
                Yes, Delete.
            </button>
            <button wire:click="$emit('closeModal')" class="p-2 bg-gray-400 hover:bg-indigo-500 rounded shadow-sm text-white">
                Cancel
            </button>
        </div>
    </div>
</div>
