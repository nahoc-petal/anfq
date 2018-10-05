<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add admin options page
function vsel_menu_page() {
    add_options_page( __( 'VSEL', 'very-simple-event-list' ), __( 'VSEL', 'very-simple-event-list' ), 'manage_options', 'vsel', 'vsel_options_page' );
}
add_action( 'admin_menu', 'vsel_menu_page' );

// add admin settings and such 
function vsel_admin_init() {
	add_settings_section( 'vsel-general-section', __( 'General', 'very-simple-event-list' ), '', 'vsel-general' );

	add_settings_field( 'vsel-field', __( 'Uninstall', 'very-simple-event-list' ), 'vsel_field_callback', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting', 'esc_attr' );

	add_settings_section( 'vsel-page-section', __( 'Page', 'very-simple-event-list' ), '', 'vsel-page' );

	add_settings_field( 'vsel-field-35', __( 'Event Meta', 'very-simple-event-list' ), 'vsel_field_callback_35', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-35', 'esc_attr' );

	add_settings_field( 'vsel-field-9', __( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_9', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-9', 'esc_attr' );

	add_settings_field( 'vsel-field-29', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_29', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-29', 'esc_attr' );

	add_settings_field( 'vsel-field-36', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_36', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-36', 'esc_attr' );

	add_settings_field( 'vsel-field-30', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_30', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-30', 'esc_attr' );

	add_settings_field( 'vsel-field-13', __( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_13', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-13', 'esc_attr' );

	add_settings_field( 'vsel-field-15', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_15', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-15', 'esc_attr' );

	add_settings_field( 'vsel-field-8', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_8', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-8', 'esc_attr' );

	add_settings_field( 'vsel-field-11', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_11', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-11', 'esc_attr' );

	add_settings_field( 'vsel-field-12', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_12', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-12', 'esc_attr' );

	add_settings_field( 'vsel-field-33', __( 'Event Categories', 'very-simple-event-list' ), 'vsel_field_callback_33', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-33', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-27', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_27', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-27', 'esc_attr' );

	add_settings_field( 'vsel-field-28', __( 'Content', 'very-simple-event-list' ), 'vsel_field_callback_28', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-28', 'esc_attr' );

	add_settings_field( 'vsel-field-10', __( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_10', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-10', 'esc_attr' );

	add_settings_field( 'vsel-field-16', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_16', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-16', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-17', __( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_17', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-17', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-18', __( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_18', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-18', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-19', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_19', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-19', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-20', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_20', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-20', 'sanitize_text_field' );

	add_settings_section( 'vsel-widget-section', __( 'Widget', 'very-simple-event-list' ), '', 'vsel-widget' );

	add_settings_field( 'vsel-field-14', __( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_14', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-14', 'esc_attr' );

	add_settings_field( 'vsel-field-31', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_31', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-31', 'esc_attr' );

	add_settings_field( 'vsel-field-37', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_37', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-37', 'esc_attr' );

	add_settings_field( 'vsel-field-32', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_32', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-32', 'esc_attr' );

	add_settings_field( 'vsel-field-1', __( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_1', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-1', 'esc_attr' );

	add_settings_field( 'vsel-field-21', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_21', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-21', 'esc_attr' );

	add_settings_field( 'vsel-field-2', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_2', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-2', 'esc_attr' );

	add_settings_field( 'vsel-field-3', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_3', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-3', 'esc_attr' );

	add_settings_field( 'vsel-field-4', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_4', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-4', 'esc_attr' );

	add_settings_field( 'vsel-field-34', __( 'Event Categories', 'very-simple-event-list' ), 'vsel_field_callback_34', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-34', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-5', __( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_5', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-5', 'esc_attr' );

	add_settings_field( 'vsel-field-7', __( 'Content', 'very-simple-event-list' ), 'vsel_field_callback_7', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-7', 'esc_attr' );

	add_settings_field( 'vsel-field-6', __( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_6', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-6', 'esc_attr' );

	add_settings_field( 'vsel-field-22', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_22', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-22', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-23', __( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_23', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-23', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-24', __( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_24', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-24', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-25', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_25', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-25', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-26', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_26', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-26', 'sanitize_text_field' );
}
add_action( 'admin_init', 'vsel_admin_init' );

function vsel_field_callback() {
	$value = esc_attr( get_option( 'vsel-setting' ) );
	?>
	<input type='hidden' name='vsel-setting' value='no'>
	<label><input type='checkbox' name='vsel-setting' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Do not delete events and settings.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_35() {
	$setting = esc_attr( get_option( 'vsel-setting-35' ) );
 	?>
	<select id='vsel-setting-35' name='vsel-setting-35'> 
		<option value='left'<?php echo ($setting == 'left') ? 'selected' : ''; ?>><?php _e( 'Align Left', 'very-simple-event-list' ); ?></option> 
		<option value='right'<?php echo ($setting == 'right') ? 'selected' : ''; ?>><?php _e( 'Align Right', 'very-simple-event-list' ); ?></option> 
	</select> 
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Left', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_9() {
	$value = esc_attr( get_option( 'vsel-setting-9' ) );
	?>
	<input type='hidden' name='vsel-setting-9' value='no'>
	<label><input type='checkbox' name='vsel-setting-9' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_29() {
	$value = esc_attr( get_option( 'vsel-setting-29' ) );
	?>
	<input type='hidden' name='vsel-setting-29' value='no'>
	<label><input type='checkbox' name='vsel-setting-29' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_36() {
	$setting = esc_attr( get_option( 'vsel-setting-36' ) );
 	?>
	<select id='vsel-setting-36' name='vsel-setting-36'> 
		<option value='right'<?php echo ($setting == 'right') ? 'selected' : ''; ?>><?php _e( 'Align Right', 'very-simple-event-list' ); ?></option> 
		<option value='left'<?php echo ($setting == 'left') ? 'selected' : ''; ?>><?php _e( 'Align Left', 'very-simple-event-list' ); ?></option> 
	</select> 
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Right', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_30() {
	$setting = esc_attr( get_option( 'vsel-setting-30' ) );
 	?>
	<select id='vsel-setting-30' name='vsel-setting-30'> 
		<option value='post-thumbnail'<?php echo ($setting == 'post-thumbnail') ? 'selected' : ''; ?>><?php _e( 'Post Thumbnail', 'very-simple-event-list' ); ?></option> 
		<option value='large'<?php echo ($setting == 'large') ? 'selected' : ''; ?>><?php _e( 'Large', 'very-simple-event-list' ); ?></option> 
		<option value='medium'<?php echo ($setting == 'medium') ? 'selected' : ''; ?>><?php _e( 'Medium', 'very-simple-event-list' ); ?></option> 
		<option value='small'<?php echo ($setting == 'small') ? 'selected' : ''; ?>><?php _e( 'Small', 'very-simple-event-list' ); ?></option> 
	</select> 
	<?php _e( 'Change size to avoid a tiny or blurry featured image.', 'very-simple-event-list' ); ?>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Post Thumbnail', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_13() {
	$value = esc_attr( get_option( 'vsel-setting-13' ) );
	?>
	<input type='hidden' name='vsel-setting-13' value='no'>
	<label><input type='checkbox' name='vsel-setting-13' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Show a summary instead of all content.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_15() {
	$value = esc_attr( get_option( 'vsel-setting-15' ) );
	?>
	<input type='hidden' name='vsel-setting-15' value='no'>
	<label><input type='checkbox' name='vsel-setting-15' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_8() {
	$value = esc_attr( get_option( 'vsel-setting-8' ) );
	?>
	<input type='hidden' name='vsel-setting-8' value='no'>
	<label><input type='checkbox' name='vsel-setting-8' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_11() {
	$value = esc_attr( get_option( 'vsel-setting-11' ) );
	?>
	<input type='hidden' name='vsel-setting-11' value='no'>
	<label><input type='checkbox' name='vsel-setting-11' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_12() {
	$value = esc_attr( get_option( 'vsel-setting-12' ) );
	?>
	<input type='hidden' name='vsel-setting-12' value='no'>
	<label><input type='checkbox' name='vsel-setting-12' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_33() {
	$value = esc_attr( get_option( 'vsel-setting-33' ) );
	?>
	<input type='hidden' name='vsel-setting-33' value='no'>
	<label><input type='checkbox' name='vsel-setting-33' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_27() { 
	$value = esc_attr( get_option( 'vsel-setting-27' ) );
	?>
	<input type='hidden' name='vsel-setting-27' value='no'>
	<label><input type='checkbox' name='vsel-setting-27' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_28() { 
	$value = esc_attr( get_option( 'vsel-setting-28' ) );
	?>
	<input type='hidden' name='vsel-setting-28' value='no'>
	<label><input type='checkbox' name='vsel-setting-28' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_10() {
	$value = esc_attr( get_option( 'vsel-setting-10' ) );
	?>
	<input type='hidden' name='vsel-setting-10' value='no'>
	<label><input type='checkbox' name='vsel-setting-10' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_16() {
	$vsel_placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-16' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-16' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_17() {
	$vsel_placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-17' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-17' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_18() {
	$vsel_placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-18' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-18' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_19() {
	$vsel_placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-19' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-19' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_20() {
	$vsel_placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-20' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-20' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_14() {
	$value = esc_attr( get_option( 'vsel-setting-14' ) );
	?>
	<input type='hidden' name='vsel-setting-14' value='no'>
	<label><input type='checkbox' name='vsel-setting-14' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_31() {
	$value = esc_attr( get_option( 'vsel-setting-31' ) );
	?>
	<input type='hidden' name='vsel-setting-31' value='no'>
	<label><input type='checkbox' name='vsel-setting-31' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_37() {
	$setting = esc_attr( get_option( 'vsel-setting-37' ) );
 	?>
	<select id='vsel-setting-37' name='vsel-setting-37'> 
		<option value='right'<?php echo ($setting == 'right') ? 'selected' : ''; ?>><?php _e( 'Align Right', 'very-simple-event-list' ); ?></option> 
		<option value='left'<?php echo ($setting == 'left') ? 'selected' : ''; ?>><?php _e( 'Align Left', 'very-simple-event-list' ); ?></option> 
	</select> 
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Right', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_32() {
	$setting = esc_attr( get_option( 'vsel-setting-32' ) );
 	?>
	<select id='vsel-setting-32' name='vsel-setting-32'> 
		<option value='post-thumbnail'<?php echo ($setting == 'post-thumbnail') ? 'selected' : ''; ?>><?php _e( 'Post Thumbnail', 'very-simple-event-list' ); ?></option> 
		<option value='large'<?php echo ($setting == 'large') ? 'selected' : ''; ?>><?php _e( 'Large', 'very-simple-event-list' ); ?></option> 
		<option value='medium'<?php echo ($setting == 'medium') ? 'selected' : ''; ?>><?php _e( 'Medium', 'very-simple-event-list' ); ?></option> 
		<option value='small'<?php echo ($setting == 'small') ? 'selected' : ''; ?>><?php _e( 'Small', 'very-simple-event-list' ); ?></option> 
	</select> 
	<?php _e( 'Change size to avoid a tiny or blurry featured image.', 'very-simple-event-list' ); ?>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Post Thumbnail', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_1() {
	$value = esc_attr( get_option( 'vsel-setting-1' ) );
	?>
	<input type='hidden' name='vsel-setting-1' value='no'>
	<label><input type='checkbox' name='vsel-setting-1' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Show a summary instead of all content.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_21() {
	$value = esc_attr( get_option( 'vsel-setting-21' ) );
	?>
	<input type='hidden' name='vsel-setting-21' value='no'>
	<label><input type='checkbox' name='vsel-setting-21' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_2() { 
	$value = esc_attr( get_option( 'vsel-setting-2' ) );
	?>
	<input type='hidden' name='vsel-setting-2' value='no'>
	<label><input type='checkbox' name='vsel-setting-2' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_3() { 
	$value = esc_attr( get_option( 'vsel-setting-3' ) );
	?>
	<input type='hidden' name='vsel-setting-3' value='no'>
	<label><input type='checkbox' name='vsel-setting-3' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_4() { 
	$value = esc_attr( get_option( 'vsel-setting-4' ) );
	?>
	<input type='hidden' name='vsel-setting-4' value='no'>
	<label><input type='checkbox' name='vsel-setting-4' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_34() { 
	$value = esc_attr( get_option( 'vsel-setting-34' ) );
	?>
	<input type='hidden' name='vsel-setting-34' value='no'>
	<label><input type='checkbox' name='vsel-setting-34' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_5() { 
	$value = esc_attr( get_option( 'vsel-setting-5' ) );
	?>
	<input type='hidden' name='vsel-setting-5' value='no'>
	<label><input type='checkbox' name='vsel-setting-5' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_7() { 
	$value = esc_attr( get_option( 'vsel-setting-7' ) );
	?>
	<input type='hidden' name='vsel-setting-7' value='no'>
	<label><input type='checkbox' name='vsel-setting-7' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_6() { 
	$value = esc_attr( get_option( 'vsel-setting-6' ) );
	?>
	<input type='hidden' name='vsel-setting-6' value='no'>
	<label><input type='checkbox' name='vsel-setting-6' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_22() {
	$vsel_placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-22' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-22' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_23() {
	$vsel_placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-23' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-23' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_24() {
	$vsel_placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-24' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-24' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_25() {
	$vsel_placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-25' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-25' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_26() {
	$vsel_placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-26' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-26' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

// display admin options page
function vsel_options_page() {
?>
<div class="wrap"> 
	<div id="icon-plugins" class="icon32"></div> 
	<h1><?php _e( 'Very Simple Event List', 'very-simple-event-list' ); ?></h1> 
	<?php
	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'page_options';
	?>
	<h2 class="nav-tab-wrapper">
		<a href="?page=vsel&tab=page_options" class="nav-tab <?php echo $active_tab == 'page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Page', 'very-simple-event-list' ); ?></a>
		<a href="?page=vsel&tab=widget_options" class="nav-tab <?php echo $active_tab == 'widget_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Widget', 'very-simple-event-list' ); ?></a>
		<a href="?page=vsel&tab=general_options" class="nav-tab <?php echo $active_tab == 'general_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'General', 'very-simple-event-list' ); ?></a>
	</h2>
	<form action="options.php" method="POST">
		<?php if( $active_tab == 'page_options' ) { ?>
			<?php settings_fields( 'vsel-page-options' ); ?>
			<?php do_settings_sections( 'vsel-page' ); ?>
		<?php } elseif( $active_tab == 'widget_options' ) { ?>
			<?php settings_fields( 'vsel-widget-options' ); ?>
			<?php do_settings_sections( 'vsel-widget' ); ?>
		<?php } else { ?>
			<?php settings_fields( 'vsel-general-options' ); ?>
			<?php do_settings_sections( 'vsel-general' ); ?>
		<?php } ?>
		<?php submit_button(); ?>
	</form>
	<?php if( ($active_tab == 'page_options') || ($active_tab == 'widget_options') ) { ?>
		<p><?php _e( 'More customizations can be made using (shortcode) attributes.', 'very-simple-event-list' ); ?></p>
		<p><?php _e( 'Info about attributes', 'very-simple-event-list' ); ?>: <a href="https://wordpress.org/plugins/very-simple-event-list" target="_blank"><?php _e( 'click here', 'very-simple-event-list' ); ?></a></p>
	<?php } ?>
</div>
<?php
}
