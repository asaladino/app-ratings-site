<?php
/**
 * ApplicationFixture
 *
 */
class ApplicationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'itunes_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'google_play_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => null),
		'has_audio' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_text' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_video' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_images' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_no_task_cap' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_instructions_available' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'is_quick_to_upload_task' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_extra_features_for_various_populations' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'is_app_easy_to_use_and_does_not_crash' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'is_content_appropriate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_ads_or_in_app_purchases' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_app_be_customized_for_different_users' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_in_app_data_collection' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_content_be_exported' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'has_appealling_design_graphics' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'is_app_motivating_for_user' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'does_app_promote_creativity_and_imagination' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'itunes_url' => 'Lorem ipsum dolor sit amet',
			'google_play_url' => 'Lorem ipsum dolor sit amet',
			'rating' => 1,
			'has_audio' => 1,
			'has_text' => 1,
			'has_video' => 1,
			'has_images' => 1,
			'has_no_task_cap' => 1,
			'has_instructions_available' => 1,
			'is_quick_to_upload_task' => 1,
			'has_extra_features_for_various_populations' => 1,
			'is_app_easy_to_use_and_does_not_crash' => 1,
			'is_content_appropriate' => 1,
			'has_ads_or_in_app_purchases' => 1,
			'can_app_be_customized_for_different_users' => 1,
			'has_in_app_data_collection' => 1,
			'can_content_be_exported' => 1,
			'has_appealling_design_graphics' => 1,
			'is_app_motivating_for_user' => 1,
			'does_app_promote_creativity_and_imagination' => 1,
			'created' => '2013-12-05 22:22:10',
			'updated' => '2013-12-05 22:22:10'
		),
	);

}
