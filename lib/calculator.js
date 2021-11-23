// Rounding function, second argument is optional
const round = (num, places = 3) => Number(num).toFixed(places);

const calc = () => {
  // Actual rate with full precision
  const actual_rate =
    (Number(Rainfall_intensity.value) / 12) * Number(Drainage_Length.value);

  const Thickness_D1_ft = Thickness_D1_mils.value / 1000 / 12;
  const Transmisssivity_TRANS_ft3_hr_ft =
    Transmisssivity_TRANS_m3_sec_m.value * 38753.86;

  //new calcs under "drainage Capacity"

  Infiltrated_flow_rate.value = round(
    ((1 - Runoff.value) * Drainage_Length.value * Rainfall_intensity.value) / 12
  );

  water_storage.value = round(
    (Drainage_Length.value *
      effective_porosity_n2.value *
      thickness_d2.value *
      (1 - initial_degree_sat.value / 100)) /
      Event_duration.value
  );

  lateral_drainage_shock.value = round(
    (Transmisssivity_TRANS_ft3_hr_ft * Gradient.value) / 100
  );

  Lateral_drainage_stone.value = round(
    (hydraulic_conductivity_k2.value *
      118.11 *
      thickness_d2.value *
      Gradient.value) /
      100
  );

  factor_of_safety.value = round(
    (Number(water_storage.value) +
      Number(lateral_drainage_shock.value) +
      Number(Lateral_drainage_stone.value)) /
      Number(Infiltrated_flow_rate.value)
  );

  //new calcs under "time to drain using ShockDrain"

  slope_factor_1.value = round(
    (Drainage_Length.value * Gradient.value) / 100 / Thickness_D1_ft
  );

  Time_factor_1.value = round(0.2426 * Math.pow(slope_factor_1.value, -0.7028));

  m_factor_1.value = round(
    (Effective_porosity_n1.value * Math.pow(Drainage_Length.value, 2)) /
      Transmisssivity_TRANS_ft3_hr_ft
  );

  time_to_drain_1.value = round(Time_factor_1.value * m_factor_1.value);

  //new calcs under "time to drain without ShockDrain"

  slope_factor_2.value = round(
    (Drainage_Length.value * Gradient.value) / 100 / thickness_d2.value
  );

  Time_factor_2.value = round(0.2426 * Math.pow(slope_factor_2.value, -0.7028));

  m_factor_2.value = round(
    (effective_porosity_n2.value * Math.pow(Drainage_Length.value, 2)) /
      hydraulic_conductivity_k2.value /
      118.11 /
      thickness_d2.value
  );

  time_to_drain_2.value = round(Time_factor_2.value * m_factor_2.value);
};

calc(); // Calc one time at the beginning

document
  .querySelectorAll("input") // gets all <input> elements
  .forEach((input) => (input.onchange = calc)); // When value changes, calc is called
