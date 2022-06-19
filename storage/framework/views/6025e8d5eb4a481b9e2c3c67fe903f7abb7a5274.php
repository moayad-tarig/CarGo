<div>
    <div class="conteiner">
        <form action="" class="form-group" wire:submit.prevent='submitForm'>

          <div class="first_section">
            <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mt-2" wire:key='<?php echo e($index); ?>'>
            
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Order Name" wire:model="order.order_code.[<?php echo e($index); ?>]">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Name Of Sender" wire:model="order.senderName.[<?php echo e($index); ?>]">
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Phone Number" wire:model="order.number.[<?php echo e($index); ?>]">
                </div>
              
                <div class="col-md-3 ">
                    <select class="form-select form-control" aria-label="Default select example" wire:model="order.status.[<?php echo e($index); ?>]">
                        <option selected>Order Status</option>
                        <option value="1">Normal</option>
                        <option value="2">Urgent</option>
                      </select>
                </div>
              
         

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($inputs) >= 2): ?>
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            <?php endif; ?>

            <div class="col-md-12 mt-2 text-center">
                <button class="btn btn-success" wire:click.prevent='MoreInputs'>+ Add More Order</button>
            </div>

          </div>

          
          <hr class="bg-primary">
            
          <div class="secound_section">
           <?php $__currentLoopData = $inputsItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
           <div class="row mt-2" wire:key='<?php echo e($index); ?>'>
                <hr>
                <div class="col-md-4 ">
                    <label for="perDistenation">Item Name</label>
                    <input type="text" class="form-control" id="" wire:model="items.<?php echo e($loop->index); ?>">
                </div>
             
                <div class="col-md-4 ">
                    <label for="perDistenation">Item Weight</label>
                    <input type="text" class="form-control" id="" wire:model="item.weight.<?php echo e($index); ?>">
                </div>
             
                <div class="col-md-4 ">
                    <label for="">Order Material</label>
                    <select class="form-select form-control" aria-label="Default select example" wire:model="item.material.<?php echo e($index); ?>">
                        <option selected>Order material</option>
                        <option value="1">Normal</option>
                        <option value="2">Frozen</option>
                      </select>
                </div>
             
                <div class="col-md-12 text-center mt-3 ">
                    <label for="">Note</label>
                    <textarea type="text" class="form-control" id="" rows="3" wire:model="item.note.<?php echo e($index); ?>"></textarea>
                </div>
            

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($inputsItems) >= 2): ?>
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            <?php endif; ?>
            <div class="col-md-12 mt-2 text-center">
                <button class="btn btn-success" wire:click.prevent='MoreInputsItems'>+ Add More Items</button>
            </div>

          </div>
            <hr class="bg-primary">

          <div class="third_section">
            <h2 class="display-5 text-center">Destination Area</h2>
            <?php $__currentLoopData = $inputsDestinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mt-2 " wire:key='<?php echo e($index); ?>'>
                <div class="col-md-3">
                    <select class="form-select form-control" aria-label="Default select example" wire:model="destination.item.<?php echo e($index); ?>">
                        <option selected>Select The Item</option>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                </div>
               
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Distenation Area" wire:model="destination.area.<?php echo e($index); ?>">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Risever Name" wire:model="destination.name.<?php echo e($index); ?>">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Risever Phone Number" wire:model="destination.phone_number.<?php echo e($index); ?>">
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" class="form-control" placeholder="Package Size Mg " wire:model="destination.size.<?php echo e($index); ?>">
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" class="form-control" placeholder="Quantity" wire:model="destination.quantity.<?php echo e($index); ?>">
                </div>
            </div>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($inputsDestinations) >= 2): ?>
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            <?php endif; ?>
            <hr>
            <div class="col-md-12  text-center">
                <button class="btn btn-success mt-2" wire:click.prevent='MoreInputsDestination'>+ Add More Destination</button>
            </div>
          </div>

         


            <div class="row">
                <div class="col-md-12 text-center mt-5">

                    <button type="submit" class="btn btn-primary "> Save </button>
                </div>
            </div>
        </form>
    </div>

</div><?php /**PATH C:\laragon\www\CarGo\resources\views/livewire/add-order.blade.php ENDPATH**/ ?>