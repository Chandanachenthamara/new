<!DOCTYPE html>
<html>
<head>
    <title>Mail For Payment Details</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <p>Thanks for paying against coupon code : <b> {{ token_string }} </b></p>
    <p>Thank you</p>
</body>
</html>