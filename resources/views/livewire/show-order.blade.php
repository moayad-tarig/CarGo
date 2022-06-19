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

      @foreach ($orders as $order)
      <tr>
        <td>1</td>
        <td>{{ $order->order_code }}</td>

        <td>{{ $order->sender_name; }}</td>
        <td class="bg bg-success text-center">{{ $order->order_status; }}</td>
        <td>
          @foreach ($order->item as $item)
          <p>{{ $item->name }}</p>
          @endforeach
        </td>
        <td class="">

          @foreach ($order->destination as $dis)
          <p>{{ $dis->area }}</p>
          @endforeach

        </td>
        <td>
          @foreach ($order->destination as $dis)
          <p>{{ $dis->size }}</p>
          @endforeach
        </td>

      </tr>
      @endforeach


    </tbody>
  </table>




</div>