<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/addons/p5.dom.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/addons/p5.sound.min.js"></script>
    <script type="text/javascript" src="sketch.js"></script>
    <script type="text/javascript" src="nn.js"></script>
    <script type="text/javascript" src="matrix.js"></script>
  </head>
  <style>
    table, th, td {
      border: 1px solid black;
      text-align: center;
    }
  </style>
   <body>
          Programmed by Abdulla.A.Khalid

    <table>
      <tr>
        <th>Property</th>
        <th>Equal to </th>
      </tr>
      <tr>
        <td>CircularShaped</td>
        <td>1</td>
      </tr>
      <tr>
        <td>ElongateShaped</td>
        <td>2</td>
      </tr>
      <tr>
        <td>OvalShaped</td>
        <td>3</td>
      </tr>
      <tr>
        <td>FractureShaped</td>
        <td>4</td>
      </tr>
      <tr>
        <td>ChannelShaped</td>
        <td>5</td>
      </tr>
      <tr>
        <td>StraightShaped</td>
        <td>6</td>
      </tr>
      <tr>
        <td>EmptyFilling</td>
        <td>3</td>
      </tr>
      <tr>
        <td>MicrateFilling</td>
        <td>4</td>
      </tr>
      <tr>
        <td>50%/50%Filling</td>
        <td>2</td>
      </tr>
      <tr>
        <td>Size</td>
        <td>from 0.1 to 9 micrometers</td>
      </tr>
      
    </table>
    
     PorosityShape :
     <br>
     <input type="text" id="type">
     <br>
     PorosityFilling  :
     <br>
     <input type="text" id="fill">
     <br>
     PorositySize  :
     <br>
     <input type="text" id="size">
     <br>
     <br>
     <button onclick="setup()">Pridiction</button>
     <br>
     <br>
     PorosityShape :
     <br>
     <input type="text" id="bbt">
     <br>
     PorosityFilling  :
     <br>
     <input type="text" id="bbf">
     <br>
     PorositySize  :
     <br>
     <input type="text" id="bbs">
     <br>
     <br>
     PredictionType Result  :
     <br>
     <input type="text" id="pt">
     <br>
     PredictionOrigin Result  :
     <br>
     <input type="text" id="po">
     <br>
     <br>
     <table>
      <tr>
        <th>Porosity Type</th>
        <th>Equal to</th>
      </tr>
        <tr>
          <td>VugPorosity type</td>
          <td>1</tr>
        </tr>
        <tr>
          <td>MoldicPorosity type</td>
          <td>2</tr>
        </tr>
        <tr>
          <td>IPPorosity type</td>
          <td>3</tr>
        </tr>
        <tr>
          <td>FructurePorosity type</td>
          <td>4</tr>
        </tr>
        <tr>
          <th>Porosity Origin</th>
          <th>Equal to</th>
        </tr>
        <tr>
          <td>Primary Origin</td>
          <td>1</tr>
        </tr>
        <tr>
          <td>Secondary Origin</td>
          <td>2</tr>
        </tr>

    </body>
</html>
