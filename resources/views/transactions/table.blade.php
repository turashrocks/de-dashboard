<table class="table table-responsive" id="transactions-table">
    <thead>
        <tr>
        <th>Qrcode Name</th>
        <th>Buyer Name</th>
        <th>Method</th>
        <th>Message</th>
        <th>Amount</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{!! $transaction->qrcode['product_name'] !!}</td>
            <td>{!! $transaction->user['name'] !!}</td>
            <td>{!! $transaction->payment_method !!}</td>
            <td>{!! $transaction->message !!}</td>
            <td>${!! $transaction->amount !!}</td>
            <td>{!! $transaction->status !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>