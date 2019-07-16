<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class AdditionalSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$setting = $this->findSetting('site.comment_contact');
    	if (!$setting->exists) {
    		$setting->fill([
    			'display_name' => __('Комментарий для страницы "Контакты"'),
    			'value'        => '',
    			'details'      => '',
    			'type'         => 'rich_text_box',
    			'order'        => 7,
    			'group'        => 'Site',
    		])->save();
    	}
    	$setting = $this->findSetting('site.custom_code');
    	if (!$setting->exists) {
    		$setting->fill([
    			'display_name' => __('Код в подвал сайта'),
    			'value'        => '',
    			'details'      => '',
    			'type'         => 'code',
    			'order'        => 8,
    			'group'        => 'Site',
    		])->save();
    	}
    	$setting = $this->findSetting('admin.admin_email');
    	if (!$setting->exists) {
    		$setting->fill([
    			'display_name' => __('Email для уведомлений'),
    			'value'        => '',
    			'details'      => '',
    			'type'         => 'text',
    			'order'        => 9,
    			'group'        => 'Admin',
    		])->save();
    	}
    }

 /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
 protected function findSetting($key)
 {
 	return Setting::firstOrNew(['key' => $key]);
 }
}
