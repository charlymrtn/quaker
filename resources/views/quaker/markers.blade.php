<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style type="text/css">

.map-container {
    display: block;
    position: relative;
    width: 70%;
    height: 70%;
    padding-bottom: calc(50% - 60px);
}

.map {
    position: absolute;
    width: 60%;
    height: 60%;
}

</style>

<div class="map-container">
    <div class="map">{!! $map->render() !!}</div>
</div>
</body>
</html>
