<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <strong>Name:</strong> {{ $memory->name }}<br  />
    <strong>Body:</strong><br />
    {{ $memory->body }}
    <br /><br />
    <a href="http://rememberernie.com/memories/approve/{{ $memory->unique_id }}">Approve</a>
  </body>
</html>
