<!DOCTYPE html>
<html>
<head>
    <title>Mail For Payment Details</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
   
  <p>  
   <b> {{ $cus->name }} - {{ $cus->phone_number }} </b> Successfully paid {{ mode }} payment of <b> {{ amount }} </b> against coupon: <b> {{ token_string }}</b>
</p>


</body>
</html>