<?php
/**
* Plugin Name: 1 day Countdown
* Description: This plugin adds Counter for single day, and give you ability to put some text. you can modify color too.
* Version: 1.0.0
* Author: Rj.
* License: WEB2
*/

add_action('admin_menu','time_counter_rj');
function time_counter_rj() 
{
  add_menu_page('Time Counter Settings','Time Counter Settings','administrator', __FILE__,'time_counter_setting_page','' );
  add_action( 'admin_init','time_counter_setting' );
}
function time_counter_setting() 
{
  register_setting('Time-Counter-Settings','time_counter_dd');
  register_setting('Time-Counter-Settings','time_counter_mm');
  register_setting('Time-Counter-Settings','time_counter_yyyy');
  register_setting('Time-Counter-Settings','time_counter_hh');
  register_setting('Time-Counter-Settings','time_counter_min');
  
}
function time_counter_setting_page() 
{
  echo '<div class="wrap"><h2>Section Heading Settings</h2>';
  echo '<form method="post" action="options.php">';
  settings_fields('Time-Counter-Settings');
  do_settings_sections('Time-Counter-Settings');
  echo '<table class="form-table"><thead>';
  echo '<tr valign="top"><th scope="row"><h1>Disign Setting</h1></th></tr>';
    echo '<tr valign="top">
            
            <th ><lable>d</lable></th>
            <th >m</th>
            <th >y</th>
            <th >H</th>
            <th >i</th></tr><tr valign="top">
            <td><input style="width:50%;" type="number" min="1" max="31" placeholder="00" name="time_counter_dd" value="'.esc_attr( get_option('time_counter_dd') ).'" /></td>
            
            
            <td><input style="width:50%;" type="number" min="1" max="12" placeholder="00" name="time_counter_mm" value="'.esc_attr( get_option('time_counter_mm') ).'" /></td>
            
            
            <td><input style="width:50%;" type="number" min="2015" max="2050" placeholder="0000" name="time_counter_yyyy" value="'.esc_attr( get_option('time_counter_yyyy') ).'" /></td>
            
            
            <td><input style="width:50%;" type="number" min="1" max="24" placeholder="12" name="time_counter_hh" value="'.esc_attr( get_option('time_counter_hh') ).'" /></td>
            
            <td><input style="width:50%;" type="number" min="0" max="59" placeholder="00" name="time_counter_min" value="'.esc_attr( get_option('time_counter_min') ).'" /></td>
            </tr>';
  
        echo '</tbody>';  
  echo'</table>';
  submit_button();
  echo '</form>';
  echo '</div>';
  
}
function show_time_counter_rj() 
{
  $current_day = date('d')+2;
  $current_month = date('m');
  $current_year = date('Y');

  $dd   = esc_attr( get_option('time_counter_dd'));
  $mm   = esc_attr( get_option('time_counter_mm'));
  $yy   = esc_attr( get_option('time_counter_yyyy'));
  $hh   = esc_attr( get_option('time_counter_hh'));
  $min  = esc_attr( get_option('time_counter_mm'));
  
  if(is_numeric($dd) && $dd > 0)
  {
      $counter_dd = $dd; 
  }else{
      $counter_dd = $current_day;   
  }

  if(is_numeric($mm) && $mm > 0)
  {
      $counter_mm = $mm; 
  }else{
      $counter_mm = $current_month;   
  }

  if(is_numeric($yy) && $yy > 0)
  {
      $counter_yyyy = $yy; 
  }else{
      $counter_yyyy = $current_year;   
  }

  if(is_numeric($min) && $min > 0)
  {
      $counter_min = $min; 
  }else{
      $counter_min = '00';   
  }

  if(is_numeric($hh) && $hh > 0)
  {
      $counter_hh = $hh; 
  }else{
      $counter_hh = 12;   
  }

  return '<div class="counter_date" date="'.$counter_mm.'/'.$counter_dd.'/'.$counter_yyyy.' '.$counter_hh.':'.$counter_min.':00" day="'.$counter_dd.'" month="'.$counter_mm.'" year="'.$counter_yyyy.'" hour="'.$counter_hh.'" minute="'.$counter_min.'" seconds="00" ></div>';


}
add_shortcode( 'show_time_counter_rj', 'show_time_counter_rj' );
?>
