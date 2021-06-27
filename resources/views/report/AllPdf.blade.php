
<style>
    #order {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #order td, #order th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #order tr:nth-child(even){background-color: #f2f2f2;}

    #order tr:hover {background-color: #ddd;}

    #order th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<table id="order" width="100%">
<thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Total Bayar</th>
                        </tr>
                        </thead>

                        @php
                            $no = 1;
                        @endphp

                        @foreach($orders as $order)
                        <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $order->date }}</td>
                            <td>Rp. {{ number_format($order->total,0) }}</td>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach

                        @foreach($totals as $total)
                        <tr>
                            <th></th>
                            <th>TOTAL PENDAPATAN</th>
                            <th>Rp. {{ number_format($total->total,0) }}</th>
                        </tr>
                        @endforeach

</table>




