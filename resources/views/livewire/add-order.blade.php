<div>
    <div class="conteiner">
        <form action="" class="form-group" wire:submit.prevent='submitForm'>

          <div class="first_section">
            @foreach ($inputs as $index => $input)
            <div class="row mt-2" wire:key='{{ $index }}'>
            
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Order Name" wire:model="order.order_code.[{{ $index }}]">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Name Of Sender" wire:model="order.senderName.[{{ $index }}]">
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Phone Number" wire:model="order.number.[{{ $index }}]">
                </div>
              
                <div class="col-md-3 ">
                    <select class="form-select form-control" aria-label="Default select example" wire:model="order.status.[{{ $index }}]">
                        <option selected>Order Status</option>
                        <option value="1">Normal</option>
                        <option value="2">Urgent</option>
                      </select>
                </div>
              
         

            </div>

            @endforeach
            @if (count($inputs) >= 2)
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            @endif

            <div class="col-md-12 mt-2 text-center">
                <button class="btn btn-success" wire:click.prevent='MoreInputs'>+ Add More Order</button>
            </div>

          </div>

          
          <hr class="bg-primary">
            
          <div class="secound_section">
           @foreach ($inputsItems as $index => $item)
               
           <div class="row mt-2" wire:key='{{ $index }}'>
                <hr>
                <div class="col-md-4 ">
                    <label for="perDistenation">Item Name</label>
                    <input type="text" class="form-control" id="" wire:model="items.{{ $loop->index }}">
                </div>
             
                <div class="col-md-4 ">
                    <label for="perDistenation">Item Weight</label>
                    <input type="text" class="form-control" id="" wire:model="item.weight.{{ $index }}">
                </div>
             
                <div class="col-md-4 ">
                    <label for="">Order Material</label>
                    <select class="form-select form-control" aria-label="Default select example" wire:model="item.material.{{ $index }}">
                        <option selected>Order material</option>
                        <option value="1">Normal</option>
                        <option value="2">Frozen</option>
                      </select>
                </div>
             
                <div class="col-md-12 text-center mt-3 ">
                    <label for="">Note</label>
                    <textarea type="text" class="form-control" id="" rows="3" wire:model="item.note.{{ $index }}"></textarea>
                </div>
            

            </div>
            @endforeach
            @if (count($inputsItems) >= 2)
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            @endif
            <div class="col-md-12 mt-2 text-center">
                <button class="btn btn-success" wire:click.prevent='MoreInputsItems'>+ Add More Items</button>
            </div>

          </div>
            <hr class="bg-primary">

          <div class="third_section">
            <h2 class="display-5 text-center">Destination Area</h2>
            @foreach ($inputsDestinations as $index => $item)
            <div class="row mt-2 " wire:key='{{ $index }}'>
                <div class="col-md-3">
                    <select class="form-select form-control" aria-label="Default select example" wire:model="destination.item.{{ $index }}">
                        <option selected>Select The Item</option>
                        @foreach ($items as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                            
                        @endforeach
                        
                      </select>
                </div>
               
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Distenation Area" wire:model="destination.area.{{ $index }}">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Risever Name" wire:model="destination.name.{{ $index }}">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Risever Phone Number" wire:model="destination.phone_number.{{ $index }}">
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" class="form-control" placeholder="Package Size Mg " wire:model="destination.size.{{ $index }}">
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" class="form-control" placeholder="Quantity" wire:model="destination.quantity.{{ $index }}">
                </div>
            </div>
        
            @endforeach
            @if (count($inputsDestinations) >= 2)
            <div class="col-md-3 mt-2">
                <button class="btn btn-danger" wire:click.prevent="DeleteInput">Delete Row</button>
            </div>

            @endif
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

</div>