<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="mb-4">Google Sheet Record</h2>
  <!-- <p>The .table-hover class enables a hover state on table rows:</p>             -->
<br>
  <table class="table table-hover mt-4">
    <tbody>
    @if(!empty($response))
        @foreach($response->values as $key => $resp)

          @if($key == '0')

      <tr>
      @foreach($resp as $respVal)
        <th>{{$respVal}}</th>
      @endforeach
      </tr>

          @else

      <tr>
      @foreach($resp as $respVal)
        <td>{{$respVal}}</td>
      @endforeach
      </tr>

          @endif

        @endforeach
      @endif
    </tbody>
  </table>
  <br>
  <a href="{{url('export-csv')}}" target="_blank" class="pt-3">
  <button type="button" class="btn btn-success" style="background-color: #b6b49e;border-color: #b6b49e;padding: 9px 14px 5px 11px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Microsoft_Excel_2013_logo.svg/1043px-Microsoft_Excel_2013_logo.svg.png" style="height: 21px;padding: 0;margin: -3px 1px 1px 1px;"> Export</button>
  </a>

</div>

</body>
</html>
