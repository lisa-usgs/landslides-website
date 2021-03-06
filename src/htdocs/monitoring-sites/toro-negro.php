<?php
//  Author: Lisa Wald
//  Contact:  Jonathan Godt,
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Toro Negro, Puerto Rico - Recent Conditions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#moisture">Soil Moisture</a>
  <a href="#pore">Pore Pressure</a>
  <a href="#temp">Soil Temperature</a>
  <a href="#battery">Battery Voltage</a>
</nav>

<p><strong>
  Note: This site is currently experiencing communications problems so recent data are not available.
</strong></p>

<h2 id="rainfall">Rainfall</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/prToroNegro_precip_twoWeek.png">
</div>

<h2 id="rainfall">Soil Moisture</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/prToroNegro_vWC_twoWeek.png">
</div>

<h2 id="pore">Pore Pressure</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/prToroNegro_porePressure_twoWeek.png">
</div>

<h2 id="pore">Soil Temperature</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/prToroNegro_soilTemp_twoWeek.png">
</div>

<h2 id="battery">Battery Voltage</h2>
  <p>
  </p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center">
      <img alt="2 week" src="/static/landslides-realtime/plots/prElToroNegro_batteryTemp_twoWeek.png">
</div>
