@extends('layouts.app')

@section('content')
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ZXing for JS">

  

  <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
  <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/milligram@1.3.0/dist/milligram.min.css">
</head>

<body>

  <main class="wrapper" style="padding-top:2em">

    <section class="container-fluid" id="demo-content">

    <div class="row justify-content-center p-2">
      <div class="col-12">
      <div class="row justify-content-center">
        <div class="col-4 col-xs-12">
            <div>
                <a class="button" id="startButton">Start</a>
            </div>
            <div class="justify-content-center">
              <video id="video" class="w-100" height="250" style="border: 1px solid gray"></video>
            </div><br>

            <form action="{{url('new_qr-store')}}" method="POST">
              @csrf
              <input type="text" id="scan" name="scanned_text">
              <button type="submit" class="">Go</button>
            <form><br>
        </div>
        <div class="col-4 col-xs-12 ps-5">
        <div class="row">
          <div class="col-12">
              <!-- @if($game_one == 'played')
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
              <label for="vehicle1">Game 1</label><br>
              @else
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
              <label for="vehicle1">Game 1</label><br>
              @endif -->
              @if($game_one == 'played')
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
              <label for="vehicle1" class="d-inline-block">Game 1</label><br>
              @else
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
              <label for="vehicle1" class="d-inline-block">Game 1</label><br>
              @endif
          </div>
          <div class="col-12 d-inline-block">
              @if($game_two == 'played')
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
              <label for="vehicle1" class="d-inline-block">Game 2</label><br>
              @else
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
              <label for="vehicle1" class="d-inline-block">Game 2</label><br>
              @endif
          </div>
          <div class="col-12">
              @if($game_three == 'played')
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
              <label for="vehicle1" class="d-inline-block">Game 3</label><br>
              @else
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
              <label for="vehicle1" class="d-inline-block">Game 3</label><br>
              @endif
          </div>
        </div>
        </div>
      </div>



    </div>
    

    </div>
      <!--{{ $game_one }}<br>
      {{ $game_two }}<br>
      {{ $game_three }}
      <a href="{{url('one')}}">one</a>-->

      <label style="visibility: hidden;">Result:</label>
      <pre style="visibility: hidden;"><code id="result" style="visibility: hidden;"></code></pre>
      

      <div id="sourceSelectPanel" style="display:none">
        <label for="sourceSelect" style="visibility: hidden;">Change video source:</label>
        <select id="sourceSelect" style="max-width:400px;visibility: hidden;">
        </select>
      </div>

      <div style="display: table">
        <label for="decoding-style"  style="visibility: hidden;"> Decoding Style:</label>
        <select id="decoding-style" size="1"  style="visibility: hidden;">
          <option value="once">Decode once</option>
          <option value="continuously">Decode continuously</option>
        </select>
      </div>

      
      <!-- <pre><code id="result"></code></pre> -->

    </section>

    <!-- <section class="container py-3 px-2">
        <div>
            <a class="button" id="startButton">Start</a>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <div class="justify-content-center">
                    <video id="video" class="w-100" height="250" style="border: 1px solid gray"></video>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                  <div class="col-12">
                      @if($game_one == 'played')
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
                      <label for="vehicle1" class="d-inline-block">Game 1</label><br>
                      @else
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
                      <label for="vehicle1" class="d-inline-block">Game 1</label><br>
                      @endif
                  </div>
                  <div class="col-12">
                      @if($game_two == 'played')
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
                      <label for="vehicle1" class="d-inline-block">Game 2</label><br>
                      @else
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
                      <label for="vehicle1" class="d-inline-block">Game 2</label><br>
                      @endif
                  </div>
                  <div class="col-12">
                      @if($game_three == 'played')
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
                      <label for="vehicle1" class="d-inline-block">Game 3</label><br>
                      @else
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
                      <label for="vehicle1" class="d-inline-block">Game 3</label><br>
                      @endif
                  </div>
                </div>
            </div>
            <div class="col-12">          
                <form action="{{url('new_qr-store')}}" method="POST">
                    @csrf
                    <input type="text" class="w-50" id="scan" name="scanned_text"><br>
                    <button type="submit" class="button">Goe</button>
                <form>
            </div>
        </div>
    </section> -->

  </main>

  <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
  <script type="text/javascript">
    function decodeOnce(codeReader, selectedDeviceId) {
      codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
        console.log(result)
        document.getElementById('result').textContent = result.text
        //document.getElementById('result').textContent = result.text
        document.getElementById('scan').value = result.text.toString()
        //x.innerHTML = result.text.toString();
        //x.setAttribute("type", "text");
        //x.setAttribute("value", result.text.toString());
        /*x.type = "text";
        x.name = "scanned_text";
        x.value = result.text.toString();
        document.body.appendChild(x);*/
      }).catch((err) => {
        console.error(err)
        document.getElementById('result').textContent = err
      })
    }

    function decodeContinuously(codeReader, selectedDeviceId) {
      codeReader.decodeFromInputVideoDeviceContinuously(selectedDeviceId, 'video', (result, err) => {
        if (result) {
          // properly decoded qr code
          console.log('Found QR code!', result)
          document.getElementById('result').textContent = result.text
        }

        if (err) {
          // As long as this error belongs into one of the following categories
          // the code reader is going to continue as excepted. Any other error
          // will stop the decoding loop.
          //
          // Excepted Exceptions:
          //
          //  - NotFoundException
          //  - ChecksumException
          //  - FormatException

          if (err instanceof ZXing.NotFoundException) {
            console.log('No QR code found.')
          }

          if (err instanceof ZXing.ChecksumException) {
            console.log('A code was found, but it\'s read value was not valid.')
          }

          if (err instanceof ZXing.FormatException) {
            console.log('A code was found, but it was in a invalid format.')
          }
        }
      })
    }

    window.addEventListener('load', function () {
      let selectedDeviceId;
      const codeReader = new ZXing.BrowserQRCodeReader()
      console.log('ZXing code reader initialized')

      codeReader.getVideoInputDevices()
        .then((videoInputDevices) => {
          const sourceSelect = document.getElementById('sourceSelect')
          selectedDeviceId = videoInputDevices[0].deviceId
          if (videoInputDevices.length >= 1) {
            videoInputDevices.forEach((element) => {
              const sourceOption = document.createElement('option')
              sourceOption.text = element.label
              sourceOption.value = element.deviceId
              sourceSelect.appendChild(sourceOption)
            })

            sourceSelect.onchange = () => {
              selectedDeviceId = sourceSelect.value;
            };

            const sourceSelectPanel = document.getElementById('sourceSelectPanel')
            sourceSelectPanel.style.display = 'block'
          }

          document.getElementById('startButton').addEventListener('click', () => {

            const decodingStyle = document.getElementById('decoding-style').value;

            if (decodingStyle == "once") {
              decodeOnce(codeReader, selectedDeviceId);
            } else {
              decodeContinuously(codeReader, selectedDeviceId);
            }

            console.log(`Started decode from camera with id ${selectedDeviceId}`)
          })

          document.getElementById('resetButton').addEventListener('click', () => {
            codeReader.reset()
            document.getElementById('result').textContent = '';
            console.log('Reset.')
          })

        })
        .catch((err) => {
          console.error(err)
        })
    })
  </script>

</body>

</html>
@endsection
