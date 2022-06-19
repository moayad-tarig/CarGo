<div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Order Number</th>
        <th scope="col">Sender Name</th>
        <th scope="col">Order Status</th>
        <th scope="col">Items</th>
        <th scope="col">To</th>
        <th scope="col">size</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td>1</td>
        <td><?php echo e($order->order_code); ?></td>

        <td><?php echo e($order->sender_name); ?></td>
        <td class="bg bg-success text-center"><?php echo e($order->order_status); ?></td>
        <td>
          <?php $__currentLoopData = $order->item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($item->name); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
        <td class="">

          <?php $__currentLoopData = $order->destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($dis->area); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </td>
        <td>
          <?php $__currentLoopData = $order->destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($dis->size); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
  </table>




</div><?php /**PATH C:\laragon\www\CarGo\resources\views/livewire/show-order.blade.php ENDPATH**/ ?>