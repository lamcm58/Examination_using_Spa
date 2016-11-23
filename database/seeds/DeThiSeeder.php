<?php

use Illuminate\Database\Seeder;

class DeThiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dethi')->insert(
            [
                [
                    'name_dethi' => '[
                                        { "id" : 0, "text" : "Đề thi số 1"},
                                        { "id" : 1, "text" : "Đề thi số 2"},
                                        { "id" : 2, "text" : "Đề thi số 3"},
                                        { "id" : 3, "text" : "Đề thi số 4"}
								     ]',
                    'monthi_id' => 1,
                    'created_at'  => new DateTime()
                ],
                [
                    'name_dethi' => '[
                                        { "id" : 0, "text" : "Đề thi số 1"},
                                        { "id" : 1, "text" : "Đề thi số 2"},
                                        { "id" : 2, "text" : "Đề thi số 3"},
                                        { "id" : 3, "text" : "Đề thi số 4"}
								     ]',
                    'monthi_id' => 2,
                    'created_at'  => new DateTime()
                ],

                [
                    'name_dethi' => '[
                                        { "id" : 0, "text" : "Đề thi số 1"},
                                        { "id" : 1, "text" : "Đề thi số 2"}
                                       
								     ]',
                    'monthi_id' => 3,
                    'created_at'  => new DateTime()
                ],
                [
                    'name_dethi' => '[
                                        { "id" : 0, "text" : "Đề thi số 1"},
                                        { "id" : 1, "text" : "Đề thi số 2"},
                                        { "id" : 2, "text" : "Đề thi số 3"}
                                       
								     ]',
                    'monthi_id' => 4,
                    'created_at'  => new DateTime()
                ],

                [
                    'name_dethi' => '[
                                        { "id" : 0, "text" : "Đề thi số 1"},
                                        { "id" : 1, "text" : "Đề thi số 2"},
                                        { "id" : 2, "text" : "Đề thi số 3"},
                                        { "id" : 3, "text" : "Đề thi số 4"}
								     ]',
                    'monthi_id' => 5,
                    'created_at'  => new DateTime()
                ]

            ]

        );
    }
}
