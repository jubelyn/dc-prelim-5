<div>
    <div class="card w-50 container">
     <div class="card-header bg-info">
         <h3>Update Food Details</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Food name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='price'>
             <label for="price">Price</label>
             @error('price')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="type" class="form-select" wire:model.defer='type'>
             <option hidden="true">Select type</option>
             <option selected disabled>Select type</option>
             <option value="protein">protein</option>
             <option value="sour">sour</option>
             <option value="fruit">fruit</option>
             <option value="dairy">dairy</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='editFood()'>
                Save Changes
             </button>
          </div>
     </div>
    </div>
 </div>
