<?php

use Illuminate\Database\Seeder;

class DropeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('page')->insert([
            'page_id' => '1',
            'page_title' => '<td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67);"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">Dropee.com</div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67);">Build Trust</div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67);"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">B2B Marketplace</div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">Saas enabled marketplace</div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67);"></div>
          </td><td class="col-3">
            <div draggable="true" class="box" style="color: rgb(65 190 67); opacity: 1;"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">Provide Transparency</div>
          </td>',
            'page_color' => '#41be43',
        ]);
    }
}
