<?php
/*
Plugin Name: Custom Table
Description: Create custom table
Version: 1.1
Text Domain: custom_table_byrj
License: GPLv2
*/

function custom_table($atts,$content = null){
    $compare_table_attr = shortcode_atts( array(
        'header'        => '',
        'header_class'  => '',
        'detail'        => '',
        'class'         => '',
        'heading'       => '',
        'heading_class' =>  '',
        'heading_bgclass' =>  'gray_back',
        'subheading'    =>  '',
        'subheading_class' =>  '',
        'topheader'     => '',
        'topheadercol'  => '',
    ), $atts ,'compare_table_attr');
        $header_array = explode(',',$compare_table_attr['header']);
        $topheader_array = explode(',',$compare_table_attr['topheader']);
        $topheadercol_array = explode(',',$compare_table_attr['topheadercol']);
        $temp_array = explode(';',$compare_table_attr['detail']);
        //print_r($header_array);
        $count_1 = count($header_array);
        $count_2 = count($temp_array);
        $topheader_count = count($topheader_array);
        $topheadercol_count = count($topheadercol_array);
        $content = '';

        

        $table = '<div class="panel registration_detail_table ">';
                        if(isset($compare_table_attr['heading']) && !empty($compare_table_attr['heading']))
                        {
                            $table .= '<div class="panel-heading '.$compare_table_attr['heading_bgclass'].'">
                                <h3 class=" '.$compare_table_attr['heading_class'].'">'.$compare_table_attr['heading'].'</h3>';
                            if(isset($compare_table_attr['subheading']) && !empty($compare_table_attr['subheading']))
                            {
                                $table .= '<p class="sub_heading '.$compare_table_attr['subheading_class'].' text-center margin_b20">'.$compare_table_attr['subheading'].'</p>';
                            }    
                            $table .= '</div>';
                        }
                        
                            
                            $table .= '<div class="table-responsive"><table class="table table-hover '.$compare_table_attr['class'].'" id="dev-table">';
                                
                            if($topheader_count>1)
                            {
                                if(isset($topheadercol_array[$i]) && $topheadercol_array[$i]>1)
                                {
                                    $cols = ' colspan="'.$topheadercol_array[$i].'" ';
                                }else{ $cols = ' ';}
                                $table .= '<thead class="main-table-head">
                                    <tr class="activated">';
                                    for ($i=0; $i < $topheader_count ; $i++) {
                                        $table .= '<th colspan="'.$topheadercol_array[$i].'" class="text-center">'.$topheader_array[$i].'</th>';
                                    }   
                                    $table .= '</tr>
                                </thead>';
                            }
                                $table .= '<thead class="sub-table-head">
                                    <tr>';
                                    for ($i=0; $i < $count_1 ; $i++) {
                                        $table .= '<th class="text-center">'.$header_array[$i].'</th>';
                                    }   
                                    $table .= '</tr>
                                </thead>';

                                $table .= '<tbody>';
                                    for ($i=0; $i < $count_2 ; $i++) {
                                        $content_array = explode(',',$temp_array[$i]);
                                        $table .= '<tr>';
                                        //<td class="descr">Assessment</td>
                                        //<td data-title="Basic"><img alt="Yes" src="images/cm.png"></td>
                                        for ($ii=0; $ii < $count_1 ; $ii++) {
                                            $table .= '<td>'.$content_array[$ii].'</th>';
                                        }
                                        $table .= '</tr>';
                                    }
                                    
                                $table .= '</tbody>
                            </table></div>
                       </div>';
                    
                       
                        
        
    //$img_url = '<img src="'.$class['class'].'" alt=""/>';

        //echo do_shortcode($content);
        //'.do_shortcode($cotent).'
        return do_shortcode($table);

}
add_shortcode('custom_table','custom_table');

$new_general_setting_logo2 = new new_general_setting_logo2();
class new_general_setting_logo2 {
    function new_general_setting_logo2( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'site_logo_2', 'esc_attr' );
        add_settings_field('site_logo_2', '<label for="site_logo_2">'.__('Left Logo URL' , 'site_logo_2' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value1 = get_option( 'site_logo_2', '' );
        echo '<input type="text" id="site_logo_2" class="regular-text ltr" name="site_logo_2" value="' . $value1 . '" />';
    }
    
}

$new_general_setting_logo3 = new new_general_setting_logo3();
class new_general_setting_logo3 {
    function new_general_setting_logo3( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'site_logo_3', 'esc_attr' );
        add_settings_field('site_logo_3', '<label for="site_logo_3">'.__('Right Logo URL' , 'site_logo_3' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value1 = get_option( 'site_logo_3', '' );
        echo '<input type="text" id="site_logo_3" class="regular-text ltr" name="site_logo_3" value="' . $value1 . '" />';
    }
    
}

function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyBENlVW7-uTgHLoP00PwOzeBlRmrd6nFtU';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function heading_with_map($atts,$content = null){
    $heading_with_map_attr = shortcode_atts( array(
        'heading'   => 'Heading',
    ), $atts ,'heading_with_map_attr');
    return '<h3 class="comm_heading text-center site_blue wow fadeInUp margin_b20" data-wow-duration="1s"> '.$heading_with_map_attr['heading'].' </h3>';

}

function new_tag($atts,$content = null){
    $new_tag_attr = shortcode_atts( array(
        'class'   => '',
        'tag'      => 'div',
        'id'        => '',
        'style'     => '',
        'attr'      => '',
    ), $atts ,'new_tag_attr');
    return '<'.$new_tag_attr['tag'].' id="'.$new_tag_attr['id'].'" '.$new_tag_attr['attr'].' class="'.$new_tag_attr['class'].'"> '.do_shortcode($content).' </'.$new_tag_attr['tag'].'>';

}
add_shortcode('new_tag','new_tag');

function show_categories($atts, $content) {
    extract( shortcode_atts( array('taxonomy' => 'category'), $atts ) );
    $cats = get_categories(array('taxonomy' => $taxonomy,'hide_empty' => 1, 'hierarchical' => 0, 'parent' => 0));
    //return show_categories_level($cats, '', '', $taxonomy);
    return $cats;
}


function open_tag($atts,$content = null){
    $new_tag_attr = shortcode_atts( array(
        'class'   => '',
        'tag'      => 'div',
        'id'        => '',
        'style'     => '',
        'attr'      => '',
    ), $atts ,'new_tag_attr');
    remove_filter($content, 'wpautop');
    //remove_filter($content, 'wpautop');
    //add_filter($content, 'removeEmptyParagraphs',99999);
    $class=""; if(!empty($new_tag_attr['class'])){ $class=$new_tag_attr['class'];}
    $id=""; if(!empty($new_tag_attr['id'])){ $class=$new_tag_attr['id'];}
    $style=""; if(!empty($new_tag_attr['style'])){ $class=$new_tag_attr['style'];}

    return '<'.$new_tag_attr['tag'].' id="'.$id.'" '.$new_tag_attr['attr'].' style="'.$style.'" class="'.$class.'"> '.do_shortcode($content);

}
add_shortcode('open_tag','open_tag');
function close_tag($atts){
    $new_tag_attr = shortcode_atts( array(
        'tag'      => 'div',
    ), $atts ,'new_tag_attr');
    return ' </'.$new_tag_attr['tag'].'>';

}
add_shortcode('close_tag','close_tag');

function acf_google_map($atts,$content = null){

    $location = get_field('add_google_map');
            $conent = null ;
            if( !empty($location) ):
              
            $content = '<div class="acf-map">
                <div class="marker" data-lat="'.$location['lat'].'" data-lng="'.$location['lng'].'"></div>
              </div>';
            endif;
            return do_shortcode($content);
}
add_shortcode('acf_google_map','acf_google_map',80);

remove_filter('the_content', 'wpautop');
//add_filter('the_content', 'removeEmptyParagraphs',99999);



// time counter code
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