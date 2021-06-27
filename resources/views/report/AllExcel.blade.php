<table cellspacing='0'>
    
                        @php
                            $no = 1;
                        @endphp
		<tr>
			<th>No</th>
			<th>Tanggal</th>
            <th>Jumlah</th>
		</tr>
        
        @php
                            $no = 1;
                        @endphp
		@foreach($orders as $order)
		<tr>
        <td>{{ $no++ }}</td>
			<td>{{ $order->date }}</td>
			<td>{{ $order->total }}</td>
		</tr>
		@endforeach
        @foreach($totals as $total)
                        <tr>
                            <th></th>
                            <th>TOTAL PENDAPATAN</th>
                            <th>Rp. {{ number_format($total->total,0) }}</th>
                        </tr>
                        @endforeach
	</table>