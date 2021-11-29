<?php
/**
 * Template Name: Calculator
 */
?>

<?php get_template_part('templates/page', 'header'); ?>
  <div class="content-wrap">
    <div class="container">

        <script defer type="application/javascript" src="/wp-content/themes/enplast/lib/calculator.js"></script>
        <p class="lead green-txt mb-4">ShockDrain is a shock attenuation and synthetic aggregate technology designed for the use beneath synthetic turf designed to achieve optimum advanced artificial athlete performance. Additionally, this pad-based technology delivers high fluid and air transmissivity and low thermal gradient between sub-grade and turf. This design calculator focuses on the drainage performance of ShockDrain in sports field applications. Please refer to "<u><a href="https://en-plast.us/wp-content/uploads/2021/11/ShockDrain_Design_Procedures.pdf" target="_blank">ShockDrain Design Procedures</a></u>" for the technical background and details on the Input Parameters and design steps performed to determine the drainage capacity, and time to drain.</p>

        <p><strong>ShockDrain embodies En-Plast technology's innovative design concept which revolves around three pillars:</strong></p>
        <p><strong>Structural stability;</strong> where ShockDrain is an integral part with sub-base. The bottom square structure transfers vertical load to base at 360 degrees, the force reduction control to perform as a surface to athletes, and the high-friction angle subbase to pad.</p>
        <p><strong>Top-Surface Integrity;</strong> as ShockDrain is resilient to thermal cycles and play stress forces. It provides true expansion and contraction joints to combat thermal movements in hot or cold climates, and neutral frost cycles to transfer zero forces to top-surface. ShockDrain has high-friction angle turf-pad maintains field configuration integrity under the life of the field. The braced vertical pillar ribs of ShockDrain control playing stressors and provide impact attenuation and energy restitution optimizers. ShockDrain grantszero-line movements above ground.</p>
        <p><strong>Drainage Performance;</strong> the cross-section ribs and perforation of ShockDrain facilitate vertical and horizontal drainage, quick time for lateral drainage, and flash infiltration, turf-to-pad.</p>
        <p class="lead green-txt mb-5">In such application, a typical section consists of, from top down, turf & fill cover layer, ShockDrain, 6-inch leveling stone, a separation geotextile layer, and then the prepared subgrade.</p>
        
        <img src="/wp-content/uploads/2021/11/sports-field-section-shockdrain-@3x.png" class="img-fluid">

        <p>&nbsp;</p>
        <div class="d-block d-lg-none my-4"><em>*We recommend using the below form while viewing from a desktop display.</em></div>

        <h2 style="font-size: 36px;color: #00a76f;" class="mb-2 green-txt">Input Values</h2>
        <form action="shockDrain_calc" class="drainage-calc">

            <h2 class="mb-2 mt-4" style="color: #000;">Field Conditions</h2>
          <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Drainage_Length">Drainage Length, L (ft)</label>
                <input name="Drainage_Length" id="Drainage_Length" value="100">
                <p class="pl-lg-5 pl-0">Length of the field from the crest or center of the field to the edge drain</p>
          </div>
           
            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Field_length">Field length, W  (ft) </label>
                <input name="Field_length" id="Field_length" value="400">
                <p class="pl-lg-5 pl-0">Length of the field parallel to the edge drain</p>
            </div>
            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Gradient">Gradient, s (%)</label>
                <input name="Gradient" id="Gradient" value="0.50">
                <p class="pl-lg-5 pl-0">Slope of the field towards the edge drain</p>
            </div>
            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Runoff">Runoff, C (-)</label>
                <input name="Runoff" id="Runoff" value="0.4">
                <p class="pl-lg-5 pl-0">(1-all runoff; 0-zero runoff)</p>
            </div>
            <h2 class="mb-2 mt-4" style="color: #000;">Rainfall Properties</h2>
            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Rainfall_frequency">Rainfall frequency, f (years) </label>
                <input name="Rainfall_frequency" id="Rainfall_frequency" value="10">
                <p class="pl-lg-5 pl-0">Average recurrence interval of the design rainfall event </p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Event_duration">Event duration, T (hr) </label>
                <input name="Event_duration" id="Event_duration" value="1">
                <p class="pl-lg-5 pl-0">Duration of the rainfall which the drainage system needs to designed for</p>
           </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Rainfall_intensity">Rainfall intensity, I (inch/hour)</label>
                <input name="Rainfall_intensity" id="Rainfall_intensity" value="3.22">
                <p class="pl-lg-5 pl-0">Intensity of the rain for the selected event duration and frequency <a href="https://hdsc.nws.noaa.gov/hdsc/pfds"> NOAA Precipitation Frequency Data Server</a></p>
            </div>

            <h2 class="mb-2 mt-4" style="color: #000;">ShockDrain Properties</h2>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Thickness_D1_mils">Thickness, D<sub>1</sub> (mils) </label>
                <input name="Thickness_D1_mils" id="Thickness_D1_mils" value="580">
                <p class="pl-lg-5 pl-0">Thickness of the product as measured by a caliber</p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Transmisssivity_TRANS_m3_sec_m">Transmisssivity, TRANS (m<sup>3</sup>/sec-m)</label>
                <input name="Transmisssivity_TRANS_m3_sec_m" id="Transmisssivity_TRANS_m3_sec_m" value="0.0035">
                <p class="pl-lg-5 pl-0">The transmissivity is the ability of the product to transmit a volume of water in a given time. It is equal to the hydraulic conductivity times the thickness measured at a given slope. The slope for this transmissivity value is 5%</p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="Effective_porosity_n1">Effective porosity, n<sub>1</sub> (-)</label>
                <input name="Effective_porosity_n1" id="Effective_porosity_n1" value="0.65">
                <p class="pl-lg-5 pl-0">Volume of voids percent to the total volume which will enable the water to flow through</p>
            </div>

           <h2 class="mb-2 mt-4" style="color: #000;">Leveling Stone</h2>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="hydraulic_conductivity_k2">Hydraulic Conductivity, k<sub>2</sub>     (cm/sec)</label>
                <input name="hydraulic_conductivity_k2" id="hydraulic_conductivity_k2" value="0.01">
                <p class="pl-lg-5 pl-0">Represents how fast the water can flow through the leveling stone voids. </p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="thickness_d2">Thickness, D<sub>2</sub>  (ft) </label>
                <input name="thickness_d2" id="thickness_d2" value="0.83">
                <p class="pl-lg-5 pl-0">Average thickens of the stone as placed in the field.</p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="effective_porosity_n2">Effective porosity, n<sub>2</sub> (-)</label>
                <input name="effective_porosity_n2" id="effective_porosity_n2" value="0.4">
                <p class="pl-lg-5 pl-0">Volume of voids percent to the total volume which will enable the water to flow through</p>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group">
                <label for="initial_degree_sat">Initial degree of saturation, IS (%)</label>
                <input name="initial_degree_sat" id="initial_degree_sat" value="40">
                <p class="pl-lg-5 pl-0">Represents the percent of voids occupied by water initially before the system be in operation. 100% is fully saturated</p>
            </div>
            
            <h2 style="font-size: 36px;color: #00a76f;" class="mb-2 green-txt">Output</h2>
            <h2 class="mb-2 black-text" style="color: #000;">Drainage Capacity</h2>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="Infiltrated_flow_rate">Infiltrated flow rate per unit width, Q<sub>in</sub></label>
                <div><input name="Infiltrated_flow_rate" id="Infiltrated_flow_rate" disabled> ft<sup>3</sup>/hour.ft</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-ceter input-group inline-group">
                <label for="water_storage">Water storage in leveling stone, ST</label>
                <div><input name="water_storage" id="water_storage" disabled> ft<sup>3</sup>/hr.ft</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="lateral_drainage_shock">Lateral drainage outflow per unit width through ShockDrain, Q<sub>out1</sub></label>
                <div><input name="lateral_drainage_shock" id="lateral_drainage_shock" disabled> ft<sup>3</sup>/hr.ft</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="Lateral_drainage_stonee">Lateral drainage outflow per unit width through leveling stone, Q<sub>out2</sub></label>
                <div><input name="Lateral_drainage_stone" id="Lateral_drainage_stone" disabled> ft<sup>3</sup>/hr.ft</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="factor_of_safety">Drainage factor of safety, FS<sub>drain</sub></label>
                <div><input name="factor_of_safety" id="factor_of_safety" disabled></div>
            </div>

            <h2 class="mb-2 mt-4" style="color: #000;">Time to Drain / using ShockDrain</h2>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="slope_factor_1">Slope factor, S<sub>1</sub></label>
                <div><input name="slope_factor_1" id="slope_factor_1" disabled></div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="Time_factor_1">Time factor for 50% drainage, T<sub>501</sub></label>
                <div><input name="Time_factor_1" id="Time_factor_1" disabled></div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="m_factor_1">"m" factor through leveling stone, m<sub>1</sub></label>
                <div><input name="m_factor_1" id="m_factor_1" disabled> hours</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="time_to_drain_1">Time to drain, t<sub>1</sub></label>
                <div><input name="time_to_drain_1" id="time_to_drain_1" disabled> hours</div>
            </div>
            
            <h2 class="mb-2 mt-4" style="color: #000;">Time to Drain / without ShockDrain</h2>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="slope_factor_2">Slope factor, S<sub>2</sub></label>
                <div><input name="slope_factor_2" id="slope_factor_2" disabled></div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="Time_factor_2">Time factor for 50% drainage, T<sub>502</sub></label>
                <div><input name="Time_factor_2" id="Time_factor_2" disabled></div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="m_factor_2">"m" factor through leveling stone, m<sub>2</sub></label>
                <div><input name="m_factor_2" id="m_factor_2" disabled> hours</div>
            </div>

            <div class="d-lg-flex d-block justify-content-start align-items-center input-group inline-group">
                <label for="time_to_drain_2">Time to drain, t<sub>2</sub></label>
                <div><input name="time_to_drain_2" id="time_to_drain_2" disabled> hours</div>
            </div>

        </table>

        <!--
        <table>
            <tr>
                <td colspan="2" align="center"><input value="Calculate Drainage Capacity Factor of Safety and Time to Drain" type="submit">
            </tr>
        </table>
        -->

        </form>


        <h3 class="mt-5 mb-2" style="font-size: 36px;color:#000;">References</h3>
        <ol style="margin-left: 0;padding-left: 17px;">
          <li> FHWA , 1992,  FHWA-SA-92-008.</li>
          <li> Giroud, J.P. Designing with Geotextiles. Definitions of Properties and Design. 1985, pp 266 - 292.</li>
          <li> Koerner, Robert M. 2005. Designing with Geosynthetics, 5th Ed. New Jersey: Pearson Prentice Hall.</li>
          <li> NOAA National Weather NOAA National Weather Services: Precipitation Frequency Estimate, <a href="https://hdsc.nws.noaa.gov/hdsc/pfds">https://hdsc.nws.noaa.gov/hdsc/pfds</a></li>
          <li> US Army Corps of Engineers, Slope Stability, Engineering and Design Manual. EM 1110-2-1902, October 31, 2003.</li>
        </ol>
            
    </div>
</div>