<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentAttachmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_attachments')->insert([
            'file'=>'image.JPG',
            'filePath'=>'storage/document/image.JPG',
            'document_id'=>'01',

        ]);
        DB::table('document_attachments')->insert([
            'file'=>'index.php',
            'filePath'=>'storage/document/index.php',
            'document_id'=>'01',

        ]);
        DB::table('document_attachments')->insert([
            'file'=>'my pdf.pdf',
            'filePath'=>'storage/document/my pdf.pdf',
            'document_id'=>'01',

        ]);

    }
}
