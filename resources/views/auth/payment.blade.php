<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body>
    <form method="POST" action="/dashboard/postpayment" enctype="multipart/form-data">
        @csrf
        <input type="file" name="payment_confirm"><br>
        <button type="submit">Konfirmasi</button>
    </form>
</body>

</html>