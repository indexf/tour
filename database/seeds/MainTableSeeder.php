<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mains')->insert([
            'description_criemea' => 'Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора. Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора. Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора.',
            'description_abkhazia' => 'Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора. Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора. Этот текст из двух стро­чек бу­дет ме­нять­ся в па­неле ад­ми­нимт­сра­тора.',
            'about_text' => 'Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui malesuada. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',

            'company_phone' => '8(999)-999-99-99',
            'company_email' => 'root@gmail.com',
            'leads_email' => 'root@gmail.com',

            'link_vk' => 'vk.com',
            'link_fb' => 'facebook.com',
            'link_inst' => 'instagram.com',

            'video' => 'DNjmf8yCsoU',
            'video_title' => 'Крым родной',

        ]);
    }
}
