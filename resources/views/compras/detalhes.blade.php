<table class="table table-bordered table-warning">
    <thead>
        <tr class="text-center">
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor (R$)</th>
        </tr>
    </thead>

    <tbody>
        @php $total=0; @endphp
        @foreach ($listaItens as $item)
            <tr class="text-center">
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>{{ $item->valorItem }}</td>
                @php $total = $total + $item->valorItem; @endphp
            </tr>
            @endforeach
            <tr class="text-center">
                <td colspan="2"><i>Total</i></td>
                <td>{{ number_format($total, 2) }}</td>
            </tr>
    </tbody>
</table>

