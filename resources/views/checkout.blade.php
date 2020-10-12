<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satispay Checkout</title>
</head>
<body>
    <script src="https://online.satispay.com/button.min.js"
      id="SatispayWebButton"
      data-key="dk_DaJsNISULqtLybhOvGsG"
      data-amount='100'
      data-description="GOPIB"
      data-usercallback="http://satispay.local/callback"
    ></script>

    <script>
        var satispayButton = document.getElementById('SatispayWebButton')
        satispayButton.on('load', function() {
            console.log('load event')
        })
        satispayButton.on('close', function() {
            console.log('close event')
        })
        satispayButton.on('completed', function(chargeId) {
            console.log('payment completed event', chargeId)
        })
    </script>
</body>
</html>